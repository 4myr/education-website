<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lecture;
use App\Models\LectureStudent;
use App\Models\Student;
use Illuminate\Http\Request;

class LectureStudentsController
{

    public function index(Lecture $lecture)
    {
        return view('panel.admin.lecture-students.index', compact('lecture'));
    }

    public function create(Lecture $lecture)
    {
        $students = Student::all();
        return view('panel.admin.lecture-students.create', compact('lecture', 'students'));
    }

    public function store(Lecture $lecture, Request $request)
    {
        $lectureId = $lecture->id;

        foreach($request->post('students') as $studentId) {
            LectureStudent::create([
                'lecture_id' => $lectureId,
                'student_id' => $studentId
            ]);
        }
        return redirect()->route('panel.admin.lecture-students.index', $lectureId)->with('success', 'دانشجو با موفقیت به درس اضافه شد.');
    }

    public function destroy(LectureStudent $lectureStudent)
    {
        $lectureId = $lectureStudent->lecture_id;
        $lectureStudent->delete();
        return redirect()->route('panel.admin.lecture-students.index', $lectureId)->with('success', 'دانشجو با موفقیت از درس حذف شد.');
    }

}
