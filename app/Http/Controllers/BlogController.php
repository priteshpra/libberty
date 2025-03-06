<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Comment;
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
        $blogOnelarge = Blog::where(['status' => 1])->limit(1)->get();
        $blogOneSmall = Blog::where(['status' => 1])->offset(1)->limit(1)->orderBy('id', 'desc')->get();
        $blogNextThree = Blog::where('status', 1)->offset(2)->limit(3)->orderBy('id', 'desc')->get();
        $blogs = Blog::where(['status' => 1, 'is_featured' => 1])->orderBy('id', 'desc')->get();

        return  view('front.blog', compact('blogs', 'bannerBlog', 'blogOnelarge', 'blogOneSmall', 'blogNextThree'));
    }

    public function show($slug)
    {
        $bannerBlog = Banner::where(['status' => 1, 'type' => 'blog'])->orderBy('id', 'desc')->limit('1')->first();
        $blogDetails = Blog::where('title', str_replace('-', ' ', $slug))->firstOrFail();
        $commentCount = Comment::where('blog_id', $blogDetails->id)->where('is_approved', 1)->count();

        return view('front.blog-detail', compact('blogDetails', 'bannerBlog', 'commentCount'));
    }
}
