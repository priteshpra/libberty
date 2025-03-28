<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Cms;
use App\Models\Gallery;
use App\Models\Testimonial;
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
        $homeContaint = Cms::where(['status' => 1, 'type' => 'home'])->first();
        $homeContaint = isset($homeContaint) ? $homeContaint->description : '';
        $testimonials = Testimonial::where(['status' => 1])->get();
        return  view('front.index', compact('galleryAnantaa', 'galleryRegent', 'galleryBanjara', 'testimonials', 'homeContaint'));
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
        $cmsData = Cms::where(['status' => 1, 'type' => 'regent'])->first();
        return  view('front.regent-hall', compact('title', 'galleryRegent', 'bannerRegent', 'cmsData'));
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
        $cmsData = Cms::where(['status' => 1, 'type' => 'anantaa'])->first();
        return  view('front.ananta-hall', compact('galleryAnantaa', 'bannerAnantaa', 'cmsData'));
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
        $cmsData = Cms::where(['status' => 1, 'type' => 'banjara'])->first();
        return  view('front.banjara-hall', compact('galleryBanjara', 'bannerBanjara', 'cmsData'));
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


    public function odc()
    {
        return  view('front.odc');
    }
}
