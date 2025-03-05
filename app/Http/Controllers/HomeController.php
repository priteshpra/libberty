<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function redirectAdmin()
    {
        $this->middleware('auth');
        return redirect()->route('admin.dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd('home');
        // return view('home');
        $galleryAnantaa = Gallery::where(['status' => 1, 'type' => 'anantaa'])->get();
        $galleryRegent = Gallery::where(['status' => 1, 'type' => 'regent'])->get();
        $galleryBanjara = Gallery::where(['status' => 1, 'type' => 'banjara'])->get();
        return  view('front.index', compact('galleryAnantaa', 'galleryRegent', 'galleryBanjara'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function regentHall()
    {
        $title = 'Regent Hall';
        $galleryRegent = Gallery::where(['status' => 1, 'type' => 'regent'])->get();
        $bannerRegent = Banner::where(['status' => 1, 'type' => 'regent'])->orderBy('id', 'desc')->limit('1')->first();
        // return view('home');
        return  view('front.regent-hall', compact('title', 'galleryRegent', 'bannerRegent'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function anantaHall()
    {
        $galleryAnantaa = Gallery::where(['status' => 1, 'type' => 'anantaa'])->get();
        $bannerAnantaa = Banner::where(['status' => 1, 'type' => 'anantaa'])->orderBy('id', 'desc')->limit('1')->first();
        return  view('front.ananta-hall', compact('galleryAnantaa', 'bannerAnantaa'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function banjaraHall()
    {
        $galleryBanjara = Gallery::where(['status' => 1, 'type' => 'banjara'])->get();
        $bannerBanjara = Banner::where(['status' => 1, 'type' => 'banjara'])->orderBy('id', 'desc')->limit('1')->first();
        return  view('front.banjara-hall', compact('galleryBanjara', 'bannerBanjara'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function thankYou()
    {
        return  view('front.thank-you');
    }
}
