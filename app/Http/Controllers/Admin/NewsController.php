<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('panel.admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('panel.admin.news.create');
    }

    public function store(Request $request)
    {
        News::create($request->all());
        return redirect()->route('panel.admin.news.index');
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
        $news->update($request->all());
        return redirect()->route('panel.admin.news.index', $news->id);
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('panel.admin.news.index');
    }
}
