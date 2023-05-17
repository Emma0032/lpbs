<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'title' => 'required',
            'body_1' => 'required',
            'body_2' => 'required',
            'subtitle_1' => 'required',
            'body_3' => 'required',
            'subtitle_2' => 'required',
            'body_4' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['image'] = time().'.'.$image->extension();

            $destinationPath = 'images/blogs';
            $img = Image::make($image->path());
            //-------------[ Resize Image ]------------
            $img->resize(1600, 1067, function ($constraint) {})->save($destinationPath.'/'.$input['image']);
        }
        
        $blog = new Blog;
        if (($request->hasFile('image'))) {
            $blog->image = $input['image'];
        }
        $blog->title = $request->title;
        $blog->body_1 = $request->body_1;
        $blog->body_2 = $request->body_2;
        $blog->subtitle_1 = $request->subtitle_1;
        $blog->body_3 = $request->body_3;
        $blog->subtitle_2 = $request->subtitle_2;
        $blog->body_4 = $request->body_4;
        $blog->save();
        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        return view('pages.blog.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        return view('pages.blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['image'] = time().'.'.$image->extension();

            $destinationPath = 'images/blogs';
            $img = Image::make($image->path());
            //-------------[ Resize Image ]------------
            $img->resize(1600, 1067, function ($constraint) {})->save($destinationPath.'/'.$input['image']);
        }
        
        $blog = Blog::find($id);
        if (($request->hasFile('image'))) {
            $oldImage = 'images/blogs/' .$blog->image;
            File::delete($oldImage);

            $page->image = $input['image'];
        }
        $blog->title = $request->title;
        $blog->body_1 = $request->body_1;
        $blog->body_2 = $request->body_2;
        $blog->subtitle_1 = $request->subtitle_1;
        $blog->body_3 = $request->body_3;
        $blog->subtitle_2 = $request->subtitle_2;
        $blog->body_4 = $request->body_4;
        $blog->save();
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        $image = 'images/blogs/' .$blog->image;
        if (File::exists($image)) {
            File::delete($image);
        };
        $blog->delete();
        return redirect('/blog');
    }
}
