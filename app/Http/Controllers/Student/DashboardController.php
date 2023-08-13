<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('panel.student.dashboard.index');
    }

    public function logout()
    {
        auth()->guard('student')->logout();
        return redirect()->route('login', ['type' => 'student']);
    }
}
