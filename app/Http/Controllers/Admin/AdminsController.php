<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = Admin::all()->sortByDesc('created_at');
        return view('panel.admin.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('panel.admin.admins.create');
    }

    public function store(Request $request)
    {
        Admin::create([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'mobile' => $request->post('mobile'),
            'password' => \Hash::make($request->post('password')),
            'role' => $request->post('role'),
        ]);
        return redirect()->route('panel.admin.admins.index')->with('success', 'ادمین با موفقیت ایجاد شد.');
    }

    public function show(Admin $admin)
    {
        return redirect()->route('panel.admin.admins.edit', $admin->id);
    }

    public function edit(Admin $admin)
    {
        return view('panel.admin.admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $admin->update([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'mobile' => $request->post('mobile'),
            'password' => $request->post('password') ? \Hash::make($request->post('password')) : $admin->getAuthPassword(),
            'role' => $request->post('role')
        ]);
        return redirect()->route('panel.admin.admins.index', $admin->id)->with('success', 'ادمین با موفقیت ویرایش شد.');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('panel.admin.admins.index')->with('success', 'ادمین با موفقیت حذف شد.');
    }
}
