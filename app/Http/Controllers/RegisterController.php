<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRegisterRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(string $type)
    {
        if ($type == 'teacher' && \Auth::guard('teacher')->check())
                return redirect()->route('panel.teacher.index');
        else if ($type == 'student' && \Auth::guard('student')->check())
                return redirect()->route('panel.student.index');

        return view('panel.' . $type . '.register.index', compact('type'));
    }

    public function register(string $type, TeacherRegisterRequest $request)
    {
        switch ($type) {
            case 'teacher': return $this->teacherRegister($request);
            case 'student': return $this->studentRegister($request);
        }
    }

    private function teacherRegister(TeacherRegisterRequest $request)
    {
        try {
            Teacher::query()->create($request->all());
            return redirect()->route('panel.teacher.index');
        } catch (\Exception $exception) {
            \Log::error($exception->getMessage());
            return back()->with('error', 'ثبت نام انجام نشد!');
        }
    }

    private function studentRegister(Request $request)
    {
    }
}
