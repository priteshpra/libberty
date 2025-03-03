<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Headway Business Solution LLP')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('front.layouts.partials.styles')
    @yield('styles')
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

        {{-- @include('front.layouts.partials.sidebar') --}}

        <!-- main content area start -->
        <div class="main-content">
            @include('front.layouts.partials.header')
            @yield('front-content')
        </div>
        <!-- main content area end -->

        @include('front.layouts.partials.footer')

    </div>
    <!-- page container area end -->

    @include('front.layouts.partials.offsets')
    @include('front.layouts.partials.scripts')
    @yield('scripts')
</body>

</html>
