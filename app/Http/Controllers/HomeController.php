<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::paginate(10);
        $askira = User::get()->where('local_government', 'Askira/Uba');
        $bayo = User::get()->where('local_government', 'Bayo');
        $biu = User::get()->where('local_government', 'Biu');
        $chibok = User::get()->where('local_government', 'Chibok');
        $damboa = User::get()->where('local_government', 'Damboa');
        $gwoza = User::get()->where('local_government', 'Gwoza');
        $hawul = User::get()->where('local_government', 'Hawul');
        $kwaya = User::get()->where('local_government', 'Kwaya Kusar');
        $shani = User::get()->where('local_government', 'Shani');
        $reviews = Review::latest()->get();
        return view('home')->with(compact('users'))->with(compact('askira'))->with(compact('bayo'))->with(compact('biu'))->with(compact('chibok'))->with(compact('damboa'))
        ->with(compact('gwoza'))->with(compact('hawul'))->with(compact('kwaya'))->with(compact('shani'))->with(compact('reviews'));
    }

    /**
     * Show the review approve page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function approve()
    {
        $reviews = Review::latest()->get();
        return view('pages.approve')->with(compact('reviews'));
    }

    /**
     * Approve a review
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function approved(Request $request, $id)
    {
        $review = Review::find($id);
        $review->status = "Approved";
        $review->save();
        return back();
    }
}
