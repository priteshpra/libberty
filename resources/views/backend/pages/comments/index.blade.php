@extends('backend.layouts.master')

@section('title')
{{ __('Comments - Admin Panel') }}
@endsection

@section('styles')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection

@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">{{ __('Comments') }}</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                    <li><span>{{ __('Comment') }}</span></li>
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
                    <h4 class="header-title float-left">Blog Title - {{ ($blogs->title) }}</h4>
                    <p class="float-right mb-2">

                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">{{ __('Sl') }}</th>
                                    <th width="10%">{{ __('Name') }}</th>
                                    <th width="10%">{{ __('Email') }}</th>
                                    <th width="15%">{{ __('Comments') }}</th>
                                    <th width="15%">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->comment }}</td>
                                    <td>
                                        <input type="checkbox" class="approve-toggle" data-id="{{ $admin->id }}" {{
                                            $admin->is_approved == 1 ? 'checked' : ''
                                        }}>
                                        <label for="approve-toggle">Approved</label>

                                        <a class="btn btn-danger text-white" href="javascript:void(0);"
                                            onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { document.getElementById('delete-form-{{ $admin->id }}').submit(); }">
                                            {{ __('Delete') }}
                                        </a>

                                        <form id="delete-form-{{ $admin->id }}"
                                            action="{{ route('admin.comment.destroy', $admin->id) }}" method="POST"
                                            style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
</div>
@endsection

@section('scripts')
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

<script>
    if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }
</script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".approve-toggle").change(function () {
            var commentId = $(this).data("id");
            var isApproved = $(this).is(":checked") ? 1 : 0; // Get checkbox state

            $.ajax({
                url: "{{ url('/admin/comments') }}/" + commentId + "/approve",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    is_approved: isApproved
                },
                success: function (response) {
                    alert(response.success); // Show success message
                },
                error: function () {
                }
            });
        });
    });
</script>