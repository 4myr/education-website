<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldsController extends Controller
{
    public function index()
    {
        $fields = Field::all()->sortByDesc('created_at');
        return view('panel.admin.fields.index', compact('fields'));
    }

    public function create()
    {
        return view('panel.admin.fields.create');
    }

    public function store(Request $request)
    {
        Field::create([
            'name' => $request->post('name'),
            'code' => $request->post('code'),
        ]);
        return redirect()->route('panel.admin.fields.index')->with('success', 'رشته با موفقیت ایجاد شد.');
    }

    public function show(Field $field)
    {
        return redirect()->route('panel.admin.fields.edit', $field->id);
    }

    public function edit(Field $field)
    {
        return view('panel.admin.fields.edit', compact('field'));
    }

    public function update(Request $request, Field $field)
    {
        $field->update([
            'name' => $request->post('name'),
            'code' => $request->post('code'),
        ]);
        return redirect()->route('panel.admin.fields.index', $field->id)->with('success', 'رشته با موفقیت ویرایش شد.');
    }

    public function destroy(Field $field)
    {
        $field->delete();
        return redirect()->route('panel.admin.fields.index')->with('success', 'رشته با موفقیت حذف شد.');
    }
}
