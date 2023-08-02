<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Field;
use App\Models\LectureGroup;
use Illuminate\Http\Request;

class LectureGroupsController extends Controller
{
    public function index()
    {
        $lectureGroups = LectureGroup::all()->sortByDesc('created_at');
        return view('panel.admin.lecture-groups.index', compact('lectureGroups'));
    }

    public function create()
    {
        $fields = Field::all();
        return view('panel.admin.lecture-groups.create', compact('fields'));
    }

    public function store(Request $request)
    {
        LectureGroup::create([
            'name' => $request->post('name'),
            'is_active' => $request->post('is_active'),
            'field_id' => $request->post('field_id'),
            'code' => $request->post('code'),
        ]);
        return redirect()->route('panel.admin.lecture-groups.index')->with('success', 'گروه درسی با موفقیت ایجاد شد.');
    }

    public function show(LectureGroup $lectureGroup)
    {
        return redirect()->route('panel.admin.lecture-groups.edit', $lectureGroup->id);
    }

    public function edit(LectureGroup $lectureGroup)
    {
        $fields = Field::all();
        return view('panel.admin.lecture-groups.edit', compact('lectureGroup', 'fields'));
    }

    public function update(Request $request, LectureGroup $lectureGroup)
    {
        $lectureGroup->update([
            'name' => $request->post('name'),
            'is_active' => $request->post('is_active'),
            'field_id' => $request->post('field_id'),
            'code' => $request->post('code')
        ]);
        return redirect()->route('panel.admin.lecture-groups.index', $lectureGroup->id)->with('success', 'گروه درسی با موفقیت ویرایش شد.');
    }

    public function destroy(LectureGroup $lectureGroup)
    {
        $lectureGroup->delete();
        return redirect()->route('panel.admin.lecture-groups.index')->with('success', 'گروه درسی با موفقیت حذف شد.');
    }
}
