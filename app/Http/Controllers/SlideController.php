<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Review;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        $reviews = Review::latest()->get();
        $blogs = Blog::latest()->paginate(3);
        return view('pages.index')->with(compact('slides'))->with(compact('blogs'))->with(compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
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
            'image' => 'required|image|mimes:jpg,png,jpeg|max:6144',
            'title' => 'required',
            'body' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['image'] = time().'.'.$image->extension();

            $destinationPath = 'images/slides';
            $img = Image::make($image->path());
            //-------------[ Resize Image ]------------
            $img->resize(1920, 1080, function ($constraint) {})->save($destinationPath.'/'.$input['image']);
        }
        
        $slide = new Slide;
        if (($request->hasFile('image'))) {
            $slide->image = $input['image'];
        }
        $slide->title = $request->title;
        $slide->body = $request->body;
        $slide->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        //
    }

    /**
     * Show the form for posting reviews
     * 
     * @return \Illuminate\Http\Response
     */
    public function review()
    {
        return view('pages.review');
    }

    /**
     * Store a newly created review in storage
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeReview(Request $request)
    {
        $review = new Review;
        $review->review = $request->review;
        $review->user()->associate($request->user());
        $review->save();
        return back();
    }

    /**
     * Remove the specified review from storage
     * 
     * @param \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroyReview(Review $review, $id)
    {
        $review = Review::find($id);
        $review->delete();
        return back();
    }
}
