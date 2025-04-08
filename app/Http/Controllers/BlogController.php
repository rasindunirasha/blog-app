<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'writer_name' => 'required|max:100',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $blog = Blog::create($validated);

        // Handle image uploads if needed
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('blog_images', 'public');
                $blog->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('blogs.index')
                        ->with('success', 'Blog created successfully!');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
{
    $validated = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'writer_name' => 'required|max:100',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $blog->update($validated);

    // Handle newly uploaded images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('blog_images', 'public');
            $blog->images()->create(['path' => $path]);
        }
    }

    return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
}


    public function destroy(Blog $blog)
    {
        $blog->delete();
        
        return redirect()->route('blogs.index')
                        ->with('success', 'Blog deleted successfully!');
    }
}