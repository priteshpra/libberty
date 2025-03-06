@extends('backend.layouts.master')

@section('title')
Comments Edit - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection

@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Comments Edit</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.comment.index') }}">All Comments</a></li>
                    <li><span>Edit Comments - {{ $admin->title }}</span></li>
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
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Comment - {{ $admin->title }}</h4>
                    @include('backend.layouts.partials.messages')

                    <form action="{{ route('admin.comment.update', $admin->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            {{-- <div class="form-group col-md-6 col-sm-6">
                                <label for="username">Category Name</label>
                                <select class="form-control " id="category_id" name="category_id" required>
                                    <option value="">Select Category
                                    </option>
                                    @foreach ($blog_categories as $cat)
                                    <option value="{{ $cat->id }}" {{ old('category_id')==$cat->id ? 'selected' : ''
                                        }} {{ $admin->category_id== $cat->id
                                        ? 'selected' : '' }}>{{ $cat->name
                                        }}
                                    </option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Enter Title" value="{{ $admin->title }}" required autofocus>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="password">Author</label>
                                <input type="text" name="author" id="author" value="{{ $admin->author }}"
                                    class="form-control" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="password">Description</label>
                                <textarea class="form-control" id="description"
                                    name="description">{{ $admin->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="password">Blog Date</label>
                                <input type="date" name="blog_date" id="blog_date" class="form-control"
                                    value="{{ $admin->blog_date }}" />

                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="password">Blog Image</label>
                                <input type="file" name="image" id="image" class="form-control" />
                                <br />
                                <img src="{{ asset('blogs/'.$admin->image) }}" alt="Blog Image" width="100px"
                                    height="80px" />
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="username">Status</label>
                                <select class="form-control " id="status" name="status" required>
                                    <option value="1" {{ old('status')=='1' ? 'selected' : '' }} {{ $admin->status=='1'
                                        ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="0" {{ old('status')=='0' ? 'selected' : '' }} {{ $admin->status=='0'
                                        ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                        <a href="{{ route('admin.comment.index') }}" class="btn btn-secondary mt-4 pr-4 pl-4">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->

    </div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('description');
    setTimeout(() => {
        $('.cke_notification_warning').hide();
    }, 1000);
</script>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>