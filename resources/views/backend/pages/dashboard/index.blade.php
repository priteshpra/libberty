@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection

@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ 'admin' }}">Home</a></li>
                    <li><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <a href="{{ route('admin.gallery.index') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-camera-retro"></i> Gallery</div>
                                    <h2>{{ $total_gallery }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <a href="{{ route('admin.blogs.index') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-rss"></i> Blogs</div>
                                    <h2>{{ $total_blogs }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <a href="{{ route('admin.banner.index') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-image"></i>Banners</div>
                                    <h2>{{ $total_banners }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <a href="{{ route('admin.leads.index') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-users"></i> Leads</div>
                                    <h2>{{ $total_leads }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
                </script>
                <div class="col-md-6 mt-md-3 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">
                                    <i class="fa fa-comments"></i> New Comments
                                    @if($newCommentsCount > 0)
                                    <span class="badge badge-danger">{{ $newCommentsCount }}</span>
                                    @endif
                                </div>
                                <h2 class="count-text">{{ $newCommentsCount }}</h2>
                            </div>
                        </div>
                        @if($blogsWithNewComments->count() > 0)
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle w-100" type="button" id="commentDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    View Blogs with New Comments
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="commentDropdown">
                                    @foreach($blogsWithNewComments as $blog)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.blogs.show', $blog->id) }}">
                                            {{ $blog->title }} ({{ $blog->comments_count }} new)
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @else
                        <div class="card-body text-center text-muted">
                            No new comments
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <br />
            {{-- <div id="calendar"></div> --}}
        </div>
    </div>
</div>
@endsection
