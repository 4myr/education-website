<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all()->sortByDesc('created_at');
        return view('panel.admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('panel.admin.students.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'student_id' => $request->post('student_id'),
            'mobile' => $request->post('mobile'),
            'password' => \Hash::make($request->post('password')),
            'approved' => $request->post('approved'),
        ]);
        return redirect()->route('panel.admin.students.index')->with('success', 'دانشجو با موفقیت ایجاد شد.');
    }

    public function show(Student $student)
    {
        return redirect()->route('panel.admin.students.edit', $student->id);
    }

    public function edit(Student $student)
    {
        return view('panel.admin.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'student_id' => $request->post('student_id'),
            'mobile' => $request->post('mobile'),
            'password' => $request->post('password') ? \Hash::make($request->post('password')) : $student->getAuthPassword(),
            'approved' => $request->post('approved')
        ]);
        return redirect()->route('panel.admin.students.index', $student->id)->with('success', 'دانشجو با موفقیت ویرایش شد.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('panel.admin.students.index')->with('success', 'دانشجو با موفقیت حذف شد.');
    }
}
