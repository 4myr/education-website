<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Lecture;
use App\Models\LectureStudent;
use App\Models\Question;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamController
{
    public function all()
    {
        $exams = Exam::query()->whereHas('lecture', function ($q) {
            $q->where('teacher_id', auth('teacher')->id());
        })->get();

        return view('panel.teacher.exam.all', compact('exams'));
    }
    public function index(Lecture $lecture)
    {
        return view('panel.teacher.exam.index', compact('lecture'));
    }

    public function create(Lecture $lecture)
    {
        return view('panel.teacher.exam.create', compact('lecture'));
    }

    public function store(Lecture $lecture, Request $request)
    {
        $lectureId = $lecture->id;

        $exam = Exam::query()->create([
            'lecture_id' => $lectureId,
            'title' => $request->post('title'),
            'score' => 20,
            'time' => $request->post('time'),
            'start_at' => Carbon::createFromTimeString($request->post('start_at'))
        ]);

        $finalScore = 0;
        foreach($request->post('questions') as $question) {
            Question::create([
                'exam_id' => $exam->id,
                'type' => $question['type'],
                'question' => $question['title'],
                'score' => $question['score'],
                'choice1' => $question['choice1'] ?? null,
                'choice2' => $question['choice2'] ?? null,
                'choice3' => $question['choice3'] ?? null,
                'choice4' => $question['choice4'] ?? null
            ]);
            $finalScore += $question['score'];
        }

        $exam->update(['score' => $finalScore]);

        return redirect()->route('panel.teacher.exam.index', $lectureId)->with('success', 'آزمون با موفقیت ایجاد شد.');
    }

    public function students(Exam $exam)
    {
        $students = $exam->lecture->students;

        $students = $students->map(function($_student) use ($exam) {
            return $this->getSingleStudent($exam, $_student);
        });

        return view('panel.teacher.exam.students', compact('students', 'exam'));
    }

    public function check(Exam $exam, Student $student)
    {
        $_student = $exam->lecture->students->where('student_id', $student->id)?->first();

        $student = $this->getSingleStudent($exam, $_student, true);

        return view('panel.teacher.exam.student', compact('exam', 'student'));
    }
    public function checkDone(Exam $exam, Student $student, Request $request)
    {
        foreach ($request->post('answers') as $answerId => $score) {
            Answer::query()->find($answerId)->update([
                'score' => $score
            ]);
        }

        return redirect()->route('panel.teacher.exam.students', $exam)->with('success', 'نمره دانشجو با موفقیت ثبت شد.');
    }

    private function getSingleStudent(Exam $exam, LectureStudent $_student, $updateAnswer = false)
    {
        $student = $_student->toArray();
        $student['questions'] = $exam->questions->map(function($question) use ($student) {
            return [
                "id" => $question->id,
                "type" => $question->type,
                "question" => $question->question,
                "choice1" => $question->choice1,
                "choice2" => $question->choice2,
                "choice3" => $question->choice3,
                "choice4" => $question->choice4,
                "score" => $question->score,
                "answer" => $question->answers->where('lecture_student_id', $student['id'])->first()?->toArray(),
            ];
        })->all();
        $student['answered'] = false;
        $answeredScore = null;

        array_map(function($q) use (&$answeredScore, &$student) {
           if ($q['answer']) {
               $student['answered'] = true;
               $answeredScore = $answeredScore == null ? $q['answer']['score'] : ($answeredScore + $q['answer']['score']);
           }
        }, $student['questions']);


        if ($updateAnswer) {
            $student['questions'] = array_map(function($q) use (&$answeredScore, &$student, $updateAnswer) {
                    if (!$q['answer']) {
                        $q['answer'] = Answer::query()->updateOrCreate([
                            'question_id' => $q['id'],
                            'lecture_student_id' => $student['id']
                        ], [
                            'answer' => '',
                            'score' => 0
                        ])->toArray();
                    }
                return $q;
            }, $student['questions']);
        }

        $student['answeredScore'] = $answeredScore;
        $student['student'] = $_student->student;

        return $student;
    }
}
