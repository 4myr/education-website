<?php

namespace App\Http\Controllers\Student;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\LectureStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamController
{
    public function all()
    {
        $exams = Exam::query()->whereHas('lecture_student', function ($q) {
            $q->where('student_id', auth('student')->id());
        })->get()->map(function($exam) {
            $lectureStudent = $exam->lecture->students->where('student_id', auth('student')->id())?->first();
            $answeredScore = null;
            $exam->questions->map(function($question) use ($lectureStudent, &$answeredScore) {
                $answer = $question->answers->where('student_id', $lectureStudent->id)->first();
                if ($answer) {
                    $answeredScore = $answeredScore == null ? $answer->score : ($answeredScore + $answer->score);
                }
            });
            $exam->answered_score = $answeredScore;
            return $exam;
        });

        return view('panel.student.exam.all', compact('exams'));
    }

    private function getSingleStudent(Exam $exam, LectureStudent $_student)
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
                "answer" => $question->answers->where('student_id', $student['id'])->first()?->toArray(),
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

        $student['answeredScore'] = $answeredScore;

        $student['status'] = 'not_started';

        if ($exam->start_at?->addMinutes($exam->time)->isPast()) {
            $student['status'] = 'finished';
        } else if ($exam->start_at->isPast() && $exam->start_at?->addMinutes($exam->time)->isFuture()) {
            $student['status'] = 'in_progress';
        }

        return $student;
    }


    public function show(Exam $exam)
    {
        $_student = $exam->lecture->students->where('student_id', auth('student')->id())?->first();

        $student = $this->getSingleStudent($exam, $_student);

        return view('panel.student.exam.exam', compact('exam', 'student'));
    }

    public function answer(Exam $exam, Request $request)
    {
        $questionId = $request->post('question_id');
        $answer = $request->post('answer');

        $lectureStudent = $exam->lecture->students->where('student_id', auth('student')->id())?->first();

        Answer::query()->updateOrCreate([
            'question_id' => $questionId,
            'student_id' => $lectureStudent->id
        ], [
            'answer' => $answer,
            'score' => 0
        ]);
    }
}
