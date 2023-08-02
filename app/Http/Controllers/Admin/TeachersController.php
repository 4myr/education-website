<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all()->sortByDesc('created_at');
        return view('panel.admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('panel.admin.teachers.create');
    }

    public function store(Request $request)
    {
        Teacher::create([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'mobile' => $request->post('mobile'),
            'password' => \Hash::make($request->post('password')),
            'approved' => $request->post('approved'),
        ]);
        return redirect()->route('panel.admin.teachers.index')->with('success', 'استاد با موفقیت ایجاد شد.');
    }

    public function show(Teacher $teacher)
    {
        return redirect()->route('panel.admin.teachers.edit', $teacher->id);
    }

    public function edit(Teacher $teacher)
    {
        return view('panel.admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'mobile' => $request->post('mobile'),
            'password' => $request->post('password') ? \Hash::make($request->post('password')) : $teacher->getAuthPassword(),
            'approved' => $request->post('approved')
        ]);
        return redirect()->route('panel.admin.teachers.index', $teacher->id)->with('success', 'استاد با موفقیت ویرایش شد.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('panel.admin.teachers.index')->with('success', 'استاد با موفقیت حذف شد.');
    }
}
