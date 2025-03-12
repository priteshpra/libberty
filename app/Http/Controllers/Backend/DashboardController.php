<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Lead;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        $this->checkAuthorization(auth()->user(), ['dashboard.view']);

        return view(
            'backend.pages.dashboard.index',
            [
                'total_blogs' => Blog::count(),
                'total_gallery' => Gallery::count(),
                'total_banners' => Banner::count(),
                'total_leads' => Lead::count(),
            ]
        );
    }
}
