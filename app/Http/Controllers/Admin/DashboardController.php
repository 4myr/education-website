<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('panel.admin.dashboard.index');
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('login', ['type' => 'admin']);
    }
}
