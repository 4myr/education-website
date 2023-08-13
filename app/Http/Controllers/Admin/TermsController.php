<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $terms = Term::all()->sortByDesc('created_at');
        return view('panel.admin.terms.index', compact('terms'));
    }

    public function create()
    {
        return view('panel.admin.terms.create');
    }

    public function store(Request $request)
    {
        Term::create([
            'title' => $request->post('title'),
            'year' => $request->post('year'),
            'month' => $request->post('month')
        ]);
        return redirect()->route('panel.admin.terms.index')->with('success', 'ترم با موفقیت ایجاد شد.');
    }

    public function show(Term $term)
    {
        return redirect()->route('panel.admin.terms.edit', $term->id);
    }

    public function edit(Term $term)
    {
        return view('panel.admin.terms.edit', compact('term'));
    }

    public function update(Request $request, Term $term)
    {
        $term->update([
            'title' => $request->post('title'),
            'year' => $request->post('year'),
            'month' => $request->post('month')
        ]);
        return redirect()->route('panel.admin.terms.index', $term->id)->with('success', 'ترم با موفقیت ویرایش شد.');
    }

    public function destroy(Term $term)
    {
        $term->delete();
        return redirect()->route('panel.admin.terms.index')->with('success', 'ترم با موفقیت حذف شد.');
    }
}
