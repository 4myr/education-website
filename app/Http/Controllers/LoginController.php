<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(string $type)
    {
        return view('panel.' . $type . '.login.index', compact('type'));
    }

    public function login(string $type, Request $request)
    {
        switch ($type) {
            case 'teacher': return $this->teacherLogin($request);
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
}
