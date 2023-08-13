<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Lecture;
use App\Models\LectureStudent;
use Illuminate\Http\Request;

class LectureStudentsController
{
    public function index(Lecture $lecture)
    {
        return view('panel.teacher.lecture-students.index', compact('lecture'));
    }

    public function update(Lecture $lecture, Request $request)
    {
        $lectureId = $lecture->id;

        foreach($request->post('data') as $studentId => $data) {
            LectureStudent::query()->find($studentId)->update($data);
        }
        return redirect()->route('panel.teacher.lecture-students.index', $lectureId)->with('success', 'دانشجویان درس با موفقیت ویرایش شدند.');
    }
}
