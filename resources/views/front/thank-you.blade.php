@extends('front.layouts.master')

@section('title')
{{ __('Best Banquet Halls for Weddings & Parties – Liberty Exclusive') }}
@endsection

@section('styles')
<style>
    body {
        border: 10px solid orange;
        background-color: #f9f9f9;
    }

    @media screen and (max-width: 480px) {
        .slogan {
            font-size: x-large;
        }

        .imgwidth {
            width: 50% !important;
        }
    }
</style>
@endsection

@section('front-content')

<body class="index-page">
    <footer id="footer" class="footer position-relative light-background">
        <div class="container mt-2">
            <div class="row text-center">
                <div class="col-12">
                    <img class="w-25 imgwidth" src="{{ asset('front/assets/img/logo.png') }}" alt="A’La Liberty">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <img class="w-50" src="{{ asset('front/assets/img/thankyou.png') }}" alt="A’La Liberty">
                    <h3>Our Team Shall Get Back to you SOON!</h3>
                </div>
            </div>
            <div class="row mt-2 p-2">
                <!--<div class="row  justify-content-center"><hr class="w-50"></div>-->
                <h4 class="border">Explore Our Services</h4>
                <!--<div class="row  justify-content-center"><hr class="w-50"></div>-->
                <div class="col-md-6 col-sm-6 col-12 offset-md-4 offset-sm-4 offset-0">
                    <div class="row mb-1 mt-2">
                        <div class="col-md-4 col-sm-6 col-6 text-start"><strong>Outdoor Catering</strong></div>
                        <div class="col-md-8 col-sm-6 col-6 text-start">- </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-6 text-start"><strong>Restaurants</strong></div>
                        <div class="col-md-8 col-sm-6 col-6 text-start">- Banjara Hills | Hitech City <a
                                href="https://www.instagram.com/alaliberty.hyd?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                target="_blank"><i class="bi bi-instagram"> Follow us</i></a></div>
                    </div>
                    <!--<ul class = "list-unstyled align-middle">
                    <li class="text-start"><a href="#">- Outdoor Catering</a>- Outdoor Catering</li>
					<li class="text-start"><a href="#">- Restaurants</a>- Restaurants: Banjara Hills | Hitech City <a href="https://www.instagram.com/alaliberty.hyd?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="bi bi-instagram"> Follow us</i></a></li>
                    <li><a href="#">- Restaurants</a>- Restaurants</li>
                </ul>-->
                </div>
                <!--<div class="col-md-2">
                <ul class = "list-unstyled">

                    <li><a href="#">- Landing Page Link</a></li>
                    <li>- Banjara Hills | Hitech City <a href="https://www.instagram.com/alaliberty.hyd?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><br><i class="bi bi-instagram"> Follow us</i></a></li>
                </ul>
            </div>-->
            </div>
            <div class="slogan">
                <p>If You ❤️ Good Food... You'll ❤️ Us...</p>
            </div>
            <!--<div class="row mt-4 text-center">
            <div class="col-12">
                <p>If You <i class="fas fa-heart"></i> Good Food... You'll <i class="fas fa-heart"></i> Us...</p>
            </div>
        </div>-->
            <!-- <div class="social-links d-flex justify-content-center">-->
            <!--<a href=""><i class="bi bi-twitter-x"></i></a>-->
            <!--<a href="https://www.facebook.com/share/bRfeLgAQoJJApm1X/"><i class="bi bi-facebook"></i></a>-->
            <!--  <a href="https://www.instagram.com/alaliberty.outdoors?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram"></i></a>-->
            <!-- <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>-->
            <!--</div>-->
        </div>
    </footer>
    <div id="adzyqa3pnhg925">
        <script src="https://content.adzylytics.com/static/scripts/conversion.min.js?p=1"></script>
        <script>
            var conversionValue = '0.00';  // Replace 0.00 with amount of sale if applicable.
            var txnId = '';  // Optionally if you have your payment transaction id else keep it as is.

            //except above 2 parameters do not modify any other values.
            var divId = "adzyqa3pnhg925";
            trackConversion(divId, 'https://events.adzylytics.com', '32', '32L80VNpUHLE', 'signup', conversionValue, 'INR', txnId);
        </script>
    </div>
</body>
@endsection