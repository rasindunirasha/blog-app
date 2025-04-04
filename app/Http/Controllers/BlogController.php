<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display a listing of the blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    // Show the form for creating a new blog
    public function create()
    {
        return view('blogs.create');
    }

    // Store a newly created blog in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'writer_name' => 'required',
        ]);

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'writer_name' => $request->writer_name,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    // Show the form for editing the specified blog
    public function edit($id)
{
    $blog = Blog::findOrFail($id);
    return view('blogs.edit', compact('blog'));
}


    // Update the specified blog in the database
    public function update(Request $request, $id)
    {
        // Find the blog by its ID
        $blog = Blog::findOrFail($id);
    
        // Validate the incoming data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'writer_name' => 'required',
        ]);
    
        // Update the blog with the validated data
        $blog->update($request->all());
    
        // Redirect back to the blog index with a success message
        return redirect()->route('blogs.index')
                         ->with('success', 'Blog updated successfully.');
    }
    

    // Remove the specified blog from the database
   // In your BlogController
public function destroy($id)
{
    $blog = Blog::findOrFail($id);
    $blog->delete();

    // Flash success message
    session()->flash('success', 'Blog deleted successfully.');

    return redirect()->route('blogs.index');
}


    // Show the details of a single blog post
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }
}
