@extends('front.layouts.master')

@section('styles')
<link href="{{ asset('front/assets/css/blog.css') }}" rel="stylesheet">
@endsection

@section('front-content')

<body class="index-page">

    <!-- Blog Hero Section -->
    <section id="blog-hero" class="blog-hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="blog-grid">
                @foreach ($blogOnelarge as $key=> $blog)
                <!-- Featured Post (Large) -->
                <article class="blog-item featured" data-aos="fade-up">
                    <img src="{{ asset('blogs/'.$blog->image) }}" alt="Blog Image" class="img-fluid">
                    <div class="blog-content">
                        <div class="post-meta">
                            <span class="date">{{ date('M d Y', strtotime($blog->blog_date)) }}</span>
                            <span class="category">{{ $blog->author }}</span>
                        </div>
                        <h2 class="post-title">
                            <a href="{{ route('blog.details', str_replace(' ', '-', $blog->title)) }}" title="{{
                                $blog->title }}">{{ $blog->title }}</a>
                        </h2>
                    </div>
                </article><!-- End Featured Post -->
                @endforeach
                @foreach ($blogOneSmall as $key=> $blog)
                <article class="blog-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('blogs/'.$blog->image) }}" alt="Blog Image" class="img-fluid">
                    <div class="blog-content">
                        <div class="post-meta">
                            <span class="date">{{ date('M d Y', strtotime($blog->blog_date)) }}</span>
                            <span class="category">{{ $blog->author }}</span>
                        </div>
                        <h3 class="post-title">
                            <a href="{{ route('blog.details', str_replace(' ', '-', $blog->title)) }}" title="{{
                                $blog->title }}">{{
                                $blog->title }}</a>
                        </h3>
                    </div>
                </article>
                @endforeach
                @foreach ($blogNextThree as $key=> $blog)
                @php
                $key = $key + 100;
                @endphp
                <article class="blog-item" data-aos="fade-up" data-aos-delay="{{ $key+100 }}">
                    <img src="{{ asset('blogs/'.$blog->image) }}" alt="Blog Image" class="img-fluid">
                    <div class="blog-content">
                        <div class="post-meta">
                            <span class="date">{{ date('M d Y', strtotime($blog->blog_date)) }}</span>
                            <span class="category">{{ $blog->author }}</span>
                        </div>
                        <h3 class="post-title">
                            <a href="{{ route('blog.details', str_replace(' ', '-', $blog->title)) }}" title="{{
                                $blog->title }}">{{
                                $blog->title }}</a>
                        </h3>
                    </div>
                </article>
                @endforeach
            </div>

        </div>

    </section><!-- /Blog Hero Section -->

    <!-- Featured Posts Section -->
    <section id="featured-posts" class="featured-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Featured Posts</h2>
            <div><span>Check Our</span> <span class="description-title">Featured Posts</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="blog-posts-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                  "loop": true,
                  "speed": 800,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 3,
                  "spaceBetween": 30,
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 20
                    },
                    "768": {
                      "slidesPerView": 2,
                      "spaceBetween": 20
                    },
                    "1200": {
                      "slidesPerView": 3,
                      "spaceBetween": 30
                    }
                  }
                }
                </script>

                <div class="swiper-wrapper">
                    @foreach ($blogs as $key=> $blog)
                    <div class="swiper-slide">
                        <div class="blog-post-item">
                            <img src="{{ asset('blogs/'.$blog->image) }}" alt="Blog Image">
                            <div class="blog-post-content">
                                <div class="post-meta">
                                    <span><i class="bi bi-person"></i> Julia Parker</span>
                                    <span><i class="bi bi-clock"></i> Jan 15, 2025</span>
                                    <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                                </div>
                                <h2><a
                                        href="{{ route('blog.details', str_replace(' ', '-', $blog->title)) }}">{{$blog->title}}</a>
                                </h2>
                                <p>{!! \Illuminate\Support\Str::limit($blog->description) !!}</p>
                                <a href="{{ route('blog.details', str_replace(' ', '-', $blog->title)) }}"
                                    class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End slide item -->
                    @endforeach

                </div>

            </div>

        </div>

    </section><!-- /Featured Posts Section -->



    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cta-content" data-aos="fade-up" data-aos-delay="200">
                        <h2>Subscribe to our newsletter</h2>
                        <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                            Curabitur
                            aliquet quam id dui posuere blandit.</p>
                        <form action="front/forms/newsletter.php" method="post" class="php-email-form cta-form"
                            data-aos="fade-up" data-aos-delay="300">
                            <div class="input-group mb-3">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email address..." aria-label="Email address"
                                    aria-describedby="button-subscribe">
                                <button class="btn btn-primary" type="submit" id="button-subscribe">Subscribe</button>
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta-image" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('front/assets/img/cta/cta-1.webp') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->

</body>
@endsection