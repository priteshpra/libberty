<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NDXR3HMV');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @if (Route::currentRouteName() == 'regent-hall')
    <title>Pure Veg Banquet Halls for Every Occasion | Liberty Exclusive</title>
    <meta
        content="Discover exquisite pure veg banquet halls at Liberty Exclusive, perfect for weddings, parties, and corporate events. Enjoy elegant venues and premium vegetarian catering."
        name="description">
    <meta content="" name="keywords">
    @elseif (Route::currentRouteName() == 'banjara-hall')
    <title>A'La Liberty: Pure Veg Luxury Banquets in Banjara Hills</title>
    <meta
        content="A'La Liberty's Banjara Hall offers pure vegetarian luxury banquets for 50-350 guests in Banjara Hills. Perfect for weddings & events! Call us!"
        name="description">
    <meta content="" name="keywords">
    @elseif (Route::currentRouteName() == 'anantaa-hall')
    <title>Anantaa Hall – Best Pure Veg Banquet for Weddings & Events</title>
    <meta
        content="Host your special events at Anantaa Hall, a premium pure veg luxury banquet with elegant ambiance & top-notch hospitality. Reserve your banquet today!"
        name="description">
    <meta content="" name="keywords">
    @elseif (Route::currentRouteName() == 'home')
    <title>Best Banquet Halls for Weddings & Parties – Regent Exclusive</title>
    <meta
        content="Host your dream wedding or event at A'La Liberty, offering the best banquet halls in Hyderabad. Spacious venues, elegant décor, and top-tier hospitality await you."
        name="description">
    <meta content="catering, banquets, restaurants, vegetarian dining, Hyderabad" name="keywords">
    @endif

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Headway Business Solution LLP')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('front.layouts.partials.styles')
    @yield('styles')
</head>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDXR3HMV" height="0" width="0"
        style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager -->
<!-- preloader area start -->
@if (!Route::is('blog'))
<div class="companylogo">
    <a href="#">
        <img src="{{ asset('front/assets/img/logo.png') }}" alt="Company logo" width="250px">
    </a>
</div>
@endif
<!-- preloader area end -->
@include('front.layouts.partials.header')
<!-- page container area start -->
<main class="main">
    <!-- main content area start -->
    @yield('front-content')
    <!-- main content area end -->
</main>
@include('front.layouts.partials.footer')

<!-- page container area end -->

@include('front.layouts.partials.scripts')
@yield('scripts')


</html>