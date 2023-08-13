<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('panel.teacher.dashboard.index');
    }

    public function logout()
    {
        auth()->guard('teacher')->logout();
        return redirect()->route('login', ['type' => 'teacher']);
    }
}
