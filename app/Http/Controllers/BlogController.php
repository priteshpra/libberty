<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $bannerBlog = Banner::where(['status' => 1, 'type' => 'blog'])->orderBy('id', 'desc')->limit('1')->first();
        $blogs = Blog::where(['status' => 1])->get();
        return  view('front.blog', compact('blogs', 'bannerBlog'));
    }

    public function show($slug)
    {
        $bannerBlog = Banner::where(['status' => 1, 'type' => 'blog'])->orderBy('id', 'desc')->limit('1')->first();
        $blogDetails = Blog::where('title', str_replace('-', ' ', $slug))->firstOrFail();
        // dd($blog);
        return view('front.blog-detail', compact('blogDetails', 'bannerBlog'));
    }
}
