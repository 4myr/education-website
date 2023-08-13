<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(string $type)
    {
        if ($type == 'student' && \Auth::guard('student')->check())
            return redirect()->route('panel.student.index');
        else if ($type == 'teacher' && \Auth::guard('teacher')->check())
            return redirect()->route('panel.teacher.index');
        else if ($type == 'admin' && \Auth::guard('admin')->check())
            return redirect()->route('panel.admin.index');

        return view('panel.' . $type . '.login.index', compact('type'));
    }

    public function login(string $type, Request $request)
    {
        switch ($type) {
            case 'teacher': return $this->teacherLogin($request);
            case 'student': return $this->studentLogin($request);
            case 'admin': return $this->adminLogin($request);
        }
    }

    private function teacherLogin(Request $request)
    {
        $loginResult = \Auth::guard('teacher')->attempt([
            'mobile' => $request->get('mobile'),
            'password' => $request->get('password')
        ]);

        if ($loginResult)
            return redirect()->route('panel.teacher.index');
        return back()->with('error', 'شماره موبایل یا رمز عبور صحیح نیست!');
    }

    private function studentLogin(Request $request)
    {
        $loginResult = \Auth::guard('student')->attempt([
            'mobile' => $request->get('mobile'),
            'password' => $request->get('password')
        ]);

        if ($loginResult)
            return redirect()->route('panel.student.index');
        return back()->with('error', 'شماره موبایل یا رمز عبور صحیح نیست!');
    }

    private function adminLogin(Request $request)
    {
        $loginResult = \Auth::guard('admin')->attempt([
            'mobile' => $request->get('mobile'),
            'password' => $request->get('password')
        ]);

        if ($loginResult)
            return redirect()->route('panel.admin.index');
        return back()->with('error', 'شماره موبایل یا رمز عبور صحیح نیست!');
    }
}
