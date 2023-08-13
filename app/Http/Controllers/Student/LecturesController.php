<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\LectureGroup;
use App\Models\LectureSession;
use App\Models\Teacher;
use App\Models\Term;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index()
    {
        $lectures = Lecture::all()->sortByDesc('created_at');
        return view('panel.student.lectures.index', compact('lectures'));
    }


    public function show(Lecture $lecture)
    {
        return view('panel.student.lectures.show', compact('lecture'));
    }

}
