<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all()->sortByDesc('created_at');
        return view('panel.admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('panel.admin.news.create');
    }

    public function store(Request $request)
    {
        News::create([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
            'is_active' => $request->post('is_active'),
            'image' => $request->file('image') ? $request->file('image')->store('news', 'public') : null,
            'admin_id' => \Auth::guard('admin')->id()
        ]);
        return redirect()->route('panel.admin.news.index')->with('success', 'خبر با موفقیت ایجاد شد.');
    }

    public function show(News $news)
    {
        return redirect()->route('panel.admin.news.edit', $news->id);
    }

    public function edit(News $news)
    {
        return view('panel.admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $news->update([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
            'is_active' => $request->post('is_active'),
            'image' => $request->file('image') ? $request->file('image')->store('news', 'public') : $news->image,
        ]);
        return redirect()->route('panel.admin.news.index', $news->id)->with('success', 'خبر با موفقیت ویرایش شد.');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('panel.admin.news.index')->with('success', 'خبر با موفقیت حذف شد.');
    }
}
