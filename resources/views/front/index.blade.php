@extends('front.layouts.master')

@section('title')
{{ __('Best Banquet Halls for Weddings & Parties – Liberty Exclusive') }}
@endsection

@section('styles')
<style>
    .video-container {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .video-container video {
        width: 100%;
        height: auto;
        display: none;
        /* Hide video by default */
    }

    .video-container:hover video {
        display: block;
        /* Show video on hover */
    }

    .video-container:hover .thumbnail {
        display: none;
        /* Hide thumbnail on hover */
    }

    .video-container .thumbnail {
        width: 100%;
        height: auto;
    }


    .portfolio-item {
        margin-bottom: 30px;
        /* Add spacing between items */
    }

    .portfolio-wrap {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        /* Optional: Add border radius for aesthetics */
    }

    .portfolio-wrap img {
        width: 100%;
        /* Ensure images take full width of their container */
        height: auto;
        /* Maintain aspect ratio */
    }

    .portfolio-info {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        /* Initially hidden */
        transition: opacity 0.3s;
        /* Smooth transition */
    }

    .portfolio-wrap:hover .portfolio-info {
        opacity: 1;
        /* Show info on hover */
    }

    .portfolio-container {
        display: flex;
        flex-wrap: wrap;
        /* Allow items to wrap */
        justify-content: space-between;
        /* Space between items */
    }

    .portfolio-item {
        flex: 1 1 calc(33.333% - 20px);
        /* Three items per row with spacing */
        margin-bottom: 20px;
        /* Add space below each item */
        box-sizing: border-box;
        /* Include padding and border in width */
    }

    .testimonials {
        text-align: center;
        padding: 50px 0;
    }

    .testimonial-item {
        text-align: center;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    .testimonial-img {
        width: 80px;
        /* Adjust as needed */
        height: 80px;
        border-radius: 50%;
        /* Makes the image round */
        object-fit: cover;
        margin-bottom: 15px;
    }

    .testimonial-item p {
        font-size: 18px;
        color: #555;
    }

    .swiper-wrapper {
        display: flex;
        align-items: center;
        /* Ensure vertical alignment */
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
@endsection

@section('front-content')

<body class="index-page">
    <section id="hero" class="galfee light-background">
        <div class="container section-title" data-aos="fade-up">
            <!--<h2>Banquet Halls</h2>
        <p class="mb-3">Our venue boasts three exquisite banquet halls, each uniquely designed to cater to different types of events and guest sizes.</p>-->
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-lg-4 col-md-4 video-container">
                        <div class="weather-card one">
                            <div class="top">
                                <img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/7.webp') }}"
                                    alt="Thumbnail 1" class="thumbnail">
                                <video muted>
                                    <source src="{{ asset('front/assets/vdo/front-page-ananta-hall-1.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="bottom">
                                <div class="wrapper">
                                    <ul class="forecast">
                                        <li><img src="{{ asset('front/assets/img/ananta.png') }}" alt="Anantaa Hall">
                                        </li>
                                        <li class="active cardtextit">
                                            <p><i class="bx bx-area"></i> 12,500 sq.ft. | 350 - 800 People</p>
                                            <a href="{{ route('anantaa-hall') }}" class="w-100 btncustm">View More
                                                details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-4 col-md-4 video-container">
                        <div class="weather-card one">
                            <div class="top">
                                <img src="{{ asset('front/assets/img/portfolio/Regent-Hall/Regent7.webp') }}"
                                    alt="Thumbnail 2" class="thumbnail">
                                <video muted>
                                    <source src="{{ asset('front/assets/img/portfolio/Regent-Hall/regent-hall.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="bottom">
                                <div class="wrapper">
                                    <ul class="forecast">
                                        <li><img src="{{ asset('front/assets/img/regent.png') }}" alt="Regent Hall">
                                        </li>
                                        <li class="active cardtextit">
                                            <p><i class="bx bx-area"></i> 7,000 sq.ft. | 125 -350 People</p>
                                            <a href="{{ route('regent-hall') }}" class="w-100 btncustm">View More
                                                details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-4 col-md-4 video-container">
                        <div class="weather-card one">
                            <div class="top">
                                <img src="{{ asset('front/assets/img/portfolio/Banjara-Hall/Banjara-3.webp') }}"
                                    alt="Thumbnail 3" class="thumbnail">
                                <video muted>
                                    <source
                                        src="{{ asset('front/assets/img/portfolio/Banjara-Hall/banjara-hall.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="bottom">
                                <div class="wrapper">
                                    <ul class="forecast">
                                        <li><img src="{{ asset('front/assets/img/banjara.png') }}" alt="Banjara Hall">
                                        </li>
                                        <li class="active cardtextit">
                                            <p><i class="bx bx-area"></i> 5,000 sq.ft. | 50 - 300 People</p>
                                            <a href="{{ route('banjara-hall') }}" class="w-100 btncustm">View More
                                                details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="slogan">
                            <h2>If You ❤️ Good Food... You'll ❤️ Us...</h2>

                        </div>
                        <br />
                        @if(!empty($homeContaint) && is_object($homeContaint))
                        {!! $homeContaint->description !!}
                        @endif
                    </div>
                </div>
            </div>
        </div><!-- End Section Title -->
    </section>
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About us</h2>
            <p>Welcome to A'La Liberty, where Culinary Innovation meets unparalleled Hospitality. Since our inception in
                1988 as a humble Catering Business, we've continuously evolved, setting trends and redefining the
                culinary
                landscape.</p><br>
            <p>In the early 1990s, we pioneered the introduction of International Cuisines, elevating the dining
                experience
                with a diverse array of dishes including desserts, chaats, and starters. Our commitment to attention to
                detail and cleanliness became synonymous with our brand, setting new standards in the industry.</p><br>
            <p>One of our groundbreaking innovations was the introduction of Live Counters for Hot Naans at events,
                adding
                an interactive element to our Catering Services. This innovation not only delighted guests but also set
                a
                new benchmark for Outdoor Catering.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-5">
                    <div class="card"><img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/4.webp') }}"
                            class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-7 content">
                    <h2>The Banquets &amp; Restaurant Business</h2>
                    <p class="py-1">
                        In 2010, we took a bold step forward by expanding into the banquet and restaurant businesses.
                        Today,
                        we proudly operate two Restaurants and three Banquets in the Twin Cities, catering to a diverse
                        range of clientele.
                    </p>
                    <p>At A'La Liberty, our commitment to the "Style of Liberty" goes beyond just food and ambiance. It
                        encompasses our dedication to both our Customers and our Internal Team Members, creating warm
                        and
                        endearing bonds with every interaction.</p>
                    <p>Whether you're a vegetarian enthusiast or someone seeking a unique dining adventure, A'La Liberty
                        invites you to immerse yourself in the essence of Vegetarian Dining and Hospitality. Join us on
                        a
                        culinary journey where innovation, hospitality, and passion come together to create cherishing
                        experiences in all our locations, be it the Banquets, Restaurants or our Catering Services!</p>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- Portfolio Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio galfee">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Gallery</h2>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Anantaa Hall</li>
                        <li data-filter=".filter-card">Regent Hall</li>
                        <li data-filter=".filter-web">Banjara Hall</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($galleryAnantaa as $ananta)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('gallerys/'.$ananta->image) }}" class="img-fluid" alt="Anantaa Hall">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{ asset('gallerys/'.$ananta->image) }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i
                                        class="bx bx-zoom-in position-absolute top-50 start-50 translate-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                @foreach ($galleryBanjara as $banjara)
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('gallerys/'.$banjara->image) }}" class="img-fluid" alt="Banjara Hall">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{ asset('gallerys/'.$banjara->image) }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i
                                        class="bx bx-zoom-in position-absolute top-50 start-50 translate-middle"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($galleryRegent as $regent)
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('gallerys/'.$regent->image) }}" class="img-fluid" alt="Regent Hall">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{ asset('gallerys/'.$regent->image) }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i
                                        class="bx bx-zoom-in position-absolute top-50 start-50 translate-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section><!-- End Portfolio Section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <!-- ======= Testimonial Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Testimonials</h2>
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <!-- Profile Picture -->
                            {{-- <img src="{{ asset('testimonials/'.$testimonial->image) }}" class="testimonial-img"
                                alt="{{ $testimonial->title }}"> --}}

                            <!-- Testimonial Content -->
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $testimonial->description }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <h3>{{ $testimonial->title }}</h3>
                            <h4>{{ $testimonial->designation }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonial Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Here to Assist</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p><strong>A'La Liberty</strong><br> 2nd Floor, Leela Gopal Towers, 8-2-701/2, Road No. 12,
                                near
                                Century Hospital, near Century Super Speciality Hospitals, Bhola Nagar, Banjara Hills,
                                Hyderabad, Telangana 500034</p><br>
                            <p><strong>Ala Liberty Banquets</strong><br>
                                <!--Cluster_malkajgiri 52 Block-B,--> T19, Mahatma Gandhi Rd, Karbala Maidan, Rani Gunj,
                                Secunderabad, Hyderabad, Telangana 500003
                            </p>

                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>A’La Liberty Banjara Hills: <strong>+91 88976 27867</strong></p>
                            <p>A’La Liberty Secunderabad: <strong>+91 89778 67058</strong></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>sales@libertyexclusive.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8 formHidecnt">
                    <form action="front/forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6">
                                <input type="tel" class="form-control" name="contact_number"
                                    placeholder="Contact Number" required pattern="\d{10}" maxlength="10"
                                    title="Please enter exactly 10 digits" inputmode="numeric"
                                    oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10)">
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fls">Select Event Date</label>
                                <input type="date" class="form-control" name="event_date" required>
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fls">Select Time</label>
                                <input type="time" class="form-control" name="time_to_call" required>
                            </div>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="hall"
                                    id="hallSelect">
                                    <option selected disabled>Hall Name</option>
                                    <option value="ANANTAA HALL">Anantaa Hall – Secunderabad, 350 - 700 pax</option>
                                    <option value="REGENT HALL">Regent Hall – Secunderabad, 125 - 400 pax</option>
                                    <option value="BANJARA HALL">Banjara Hall – Banjara Hills, 50 - 350 pax</option>
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="number_of_guest"
                                    placeholder="Number of Guest" required>
                            </div>
                            <div class="col-md-6 ">
                                <select class="form-select" aria-label="Default select example" name="package"
                                    id="packageSelect">
                                    <option selected disabled>Select Package</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reference"
                                    placeholder="reference (if any)">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6"
                                    placeholder="Message (Optional)"></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LfENjcqAAAAAEvdptEC_sLT8bQOI8GotLmFne7q"></div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
                <!--<div class="imgShowCnt" style="display:none"><img width='650' src="https://www.libertyexclusive.com/{{ asset('front/assets/img/Thank-You-page-for-banquets.png') }}" alt="Displayed Image"></div>-->
            </div>
        </div>
    </section><!-- /Contact Section -->
</body>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".testimonials-slider", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            slidesPerView: 1, // Show one slide at a time
            centeredSlides: true,
        });
    });
</script>
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