<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsItems = News::all();

        return view('admin.news.index', compact('newsItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('news', 'public');
        }

        News::create([
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'News item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $imagePath = $news->image;
        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }

            $image = $request->file('image');
            $imagePath = $image->store('news', 'public');
        }

        $news->update([
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'News item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->back()->with('success', 'News item deleted successfully.');
    }
}
