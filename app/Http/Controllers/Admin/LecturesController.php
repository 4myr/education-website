<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\LectureGroup;
use App\Models\LectureSession;
use App\Models\Teacher;
use App\Models\Term;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index()
    {
        $lectures = Lecture::all()->sortByDesc('created_at');
        return view('panel.admin.lectures.index', compact('lectures'));
    }

    public function create()
    {
        $lectureGroups = LectureGroup::all();
        $teachers = Teacher::all();
        $terms = Term::all();
        return view('panel.admin.lectures.create', compact('lectureGroups', 'teachers', 'terms'));
    }

    public function store(Request $request)
    {
        $lecture = Lecture::create([
            'teacher_id' => $request->post('teacher_id'),
            'lecture_group_id' => $request->post('lecture_group_id'),
            'code' => $request->post('code'),
            'is_active' => $request->post('is_active'),
            'capacity' => $request->post('capacity'),
            'term_id' => $request->post('term_id'),
            'link' => $request->post('link'),
            'holding_day' => $request->post('holding_day'),
            'holding_time' => $request->post('holding_time'),
        ]);
        $this->createSessions($lecture->id, $request->post('sessions'));

        return redirect()->route('panel.admin.lectures.index')->with('success', 'درس با موفقیت ایجاد شد.');
    }

    public function show(Lecture $lecture)
    {
        return redirect()->route('panel.admin.lectures.edit', $lecture->id);
    }

    public function edit(Lecture $lecture)
    {
        $lectureGroups = LectureGroup::all();
        $teachers = Teacher::all();
        $terms = Term::all();
        return view('panel.admin.lectures.edit', compact('lecture', 'lectureGroups', 'teachers', 'terms'));
    }

    public function update(Request $request, Lecture $lecture)
    {
        $lecture->update([
            'teacher_id' => $request->post('teacher_id'),
            'lecture_group_id' => $request->post('lecture_group_id'),
            'code' => $request->post('code'),
            'is_active' => $request->post('is_active'),
            'capacity' => $request->post('capacity'),
            'term_id' => $request->post('term_id'),
            'link' => $request->post('link'),
            'holding_day' => $request->post('holding_day'),
            'holding_time' => $request->post('holding_time'),
        ]);
        return redirect()->route('panel.admin.lectures.index', $lecture->id)->with('success', 'درس با موفقیت ویرایش شد.');
    }

    public function destroy(Lecture $lecture)
    {
        $lecture->delete();
        return redirect()->route('panel.admin.lectures.index')->with('success', 'درس با موفقیت حذف شد.');
    }

    private function createSessions($lectureId, $sessions)
    {
        for ($order=1; $order <= $sessions; $order++) {
            LectureSession::bulkCreate($lectureId, $order);
        }
    }
}
