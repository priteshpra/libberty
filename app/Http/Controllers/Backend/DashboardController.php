<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Lead;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $this->checkAuthorization(auth()->user(), ['dashboard.view']);
        // Get all blog posts that have new comments
        $blogsWithNewComments = Blog::whereIn('id', function ($query) {
            $query->select('blog_id')
                ->from('comments')
                ->where('is_approved', 0);
        })->withCount(['comments as new_comments_count' => function ($query) {
            $query->where('is_approved', 0);
        }])->get();
        
        // Total new comments count
        $newCommentsCount = Comment::where('is_approved', 0)->count();
        return view(
            'backend.pages.dashboard.index',
            [
                'total_blogs' => Blog::count(),
                'total_gallery' => Gallery::count(),
                'total_banners' => Banner::count(),
                'total_leads' => Lead::count(),
                // Get the count of new (unapproved) comments
                'newCommentsCount' => $newCommentsCount,
                'blogsWithNewComments' => $blogsWithNewComments,
            ]
        );
    }
}
