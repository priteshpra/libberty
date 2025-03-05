@extends('front.layouts.master')

@section('styles')
<link href="{{ asset('front/assets/css/blog.css') }}" rel="stylesheet">
<style>
    .hdr-img img {
        position: absolute;
        top: 0%;
        left: 0%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: 100%;
        z-index: 0;
    }
</style>
@endsection

@section('front-content')

<body class="blog-details-page portfolio-details-page">
    <div class="ananta-header">
        <div class="overlay"></div>
        <div class="hdr-img">
            <img src="{{ asset('banners/' . $bannerBlog->image) }}" alt="Banjara Hall">
        </div>

        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3 text-black anantalogo"><img src="{{ asset('front/assets/img/ananta.png') }}"
                            alt="Anantaa Hall">
                    </h1>
                    <p class="lead mb-0 text-black">{{ $bannerBlog->desc }} …..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title -->
    <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://libertyexclusive.com/"><i class="bi bi-house"></i>
                            Home</a></li>
                    <li class="breadcrumb-item"><a href="our-blogs.html">Our Blogs</a></li>
                    <li class="breadcrumb-item active current">Blog Title</li>



                </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>Blog Header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,
                pulvinar dapibus leo.</p>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container" data-aos="fade-up">

                        <article class="article">

                            <div class="hero-img" data-aos="zoom-in">
                                <img src="{{ asset('front/assets/img/blog/blog-post-3.webp') }}"
                                    alt="Featured blog image" class="img-fluid" loading="lazy">
                                <div class="meta-overlay">
                                    <div class="meta-categories">
                                        <a href="#" class="category">Web Development</a>
                                        <span class="divider">•</span>
                                        <span class="reading-time"><i class="bi bi-clock"></i> 6 min read</span>
                                    </div>
                                </div>
                            </div>

                            <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                                <div class="content-header">
                                    <h1 class="title">{{ $blogDetails->title }}
                                    </h1>

                                    <div class="author-info">
                                        <div class="author-details">
                                            <img src="{{ asset('front/assets/img/person/Unknown_person.jpg') }}"
                                                alt="Author" class="author-img">
                                            <div class="info">
                                                <h4>{{ $blogDetails->author }}</h4>
                                                {{-- <span class="role">Senior Web Developer</span> --}}
                                            </div>
                                        </div>
                                        <div class="post-meta">
                                            <span class="date"><i class="bi bi-calendar3"></i> {{ date('M d Y',
                                                strtotime($blogDetails->blog_date)) }}</span>
                                            <span class="divider">•</span>
                                            <span class="comments"><i class="bi bi-chat-text"></i> 18 Comments</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="content">
                                    {!! $blogDetails->description !!}
                                </div>


                            </div>

                        </article>

                    </div>
                </section><!-- /Blog Details Section -->



                <!-- Blog Comments Section -->
                <section id="blog-comments" class="blog-comments section">

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <div class="blog-comments-3">
                            <div class="section-header">
                                <h3>Comments <span class="comment-count">(8)</span></h3>
                            </div>

                            <div class="comments-wrapper">
                                <!-- Comment 1 -->
                                <article class="comment-card">
                                    <div class="comment-header">
                                        <div class="user-info">
                                            <img src="{{ asset('front/assets/img/person/person-f-9.webp') }}"
                                                alt="User avatar" loading="lazy">
                                            <div class="meta">
                                                <h4 class="name">Sarah Williams</h4>
                                                <span class="date"><i class="bi bi-calendar3"></i> February 13,
                                                    2025</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.</p>
                                    </div>
                                    <div class="comment-actions">
                                        <button class="action-btn like-btn">
                                            <i class="bi bi-hand-thumbs-up"></i>
                                            <span>12</span>
                                        </button>
                                        <button class="action-btn reply-btn">
                                            <i class="bi bi-reply"></i>
                                            <span>Reply</span>
                                        </button>
                                    </div>
                                </article>

                                <!-- Comment 2 with replies -->
                                <article class="comment-card">
                                    <div class="comment-header">
                                        <div class="user-info">
                                            <img src="{{ asset('front/assets/img/person/person-m-9.webp') }}"
                                                alt="User avatar" loading="lazy">
                                            <div class="meta">
                                                <h4 class="name">James Cooper</h4>
                                                <span class="date"><i class="bi bi-calendar3"></i> February 13,
                                                    2025</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>Quisque ut nisi. Donec mi odio, faucibus at, scelerisque quis, convallis in,
                                            nisi. Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a
                                            nisl id ante tempus hendrerit.</p>
                                    </div>
                                    <div class="comment-actions">
                                        <button class="action-btn like-btn">
                                            <i class="bi bi-hand-thumbs-up"></i>
                                            <span>8</span>
                                        </button>
                                        <button class="action-btn reply-btn">
                                            <i class="bi bi-reply"></i>
                                            <span>Reply</span>
                                        </button>
                                    </div>

                                    <!-- Reply Thread -->
                                    <div class="reply-thread">
                                        <!-- Reply 1 -->
                                        <article class="comment-card reply">
                                            <div class="comment-header">
                                                <div class="user-info">
                                                    <img src="{{ asset('front/assets/img/person/person-f-9.webp') }}"
                                                        alt="User avatar" loading="lazy">
                                                    <div class="meta">
                                                        <h4 class="name">Emily Parker</h4>
                                                        <span class="date"><i class="bi bi-calendar3"></i> February 13,
                                                            2025</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante
                                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                    Curae.</p>
                                            </div>
                                            <div class="comment-actions">
                                                <button class="action-btn like-btn">
                                                    <i class="bi bi-hand-thumbs-up"></i>
                                                    <span>5</span>
                                                </button>
                                                <button class="action-btn reply-btn">
                                                    <i class="bi bi-reply"></i>
                                                    <span>Reply</span>
                                                </button>
                                            </div>
                                        </article>

                                        <!-- Reply 2 -->
                                        <article class="comment-card reply">
                                            <div class="comment-header">
                                                <div class="user-info">
                                                    <img src="{{ asset('front/assets/img/person/person-f-7.webp') }}"
                                                        alt="User avatar" loading="lazy">
                                                    <div class="meta">
                                                        <h4 class="name">Daniel Brown</h4>
                                                        <span class="date"><i class="bi bi-calendar3"></i> February 13,
                                                            2025</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Nam commodo suscipit quam. Vestibulum ullamcorper mauris at ligula.
                                                    Fusce fermentum odio nec arcu.</p>
                                            </div>
                                            <div class="comment-actions">
                                                <button class="action-btn like-btn">
                                                    <i class="bi bi-hand-thumbs-up"></i>
                                                    <span>3</span>
                                                </button>
                                                <button class="action-btn reply-btn">
                                                    <i class="bi bi-reply"></i>
                                                    <span>Reply</span>
                                                </button>
                                            </div>
                                        </article>
                                    </div>
                                </article>

                                <!-- Comment 3 -->
                                <article class="comment-card">
                                    <div class="comment-header">
                                        <div class="user-info">
                                            <img src="{{ asset('front/assets/img/person/person-m-6.webp') }}"
                                                alt="User avatar" loading="lazy">
                                            <div class="meta">
                                                <h4 class="name">Rachel Adams</h4>
                                                <span class="date"><i class="bi bi-calendar3"></i> February 13,
                                                    2025</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
                                            ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                    <div class="comment-actions">
                                        <button class="action-btn like-btn">
                                            <i class="bi bi-hand-thumbs-up"></i>
                                            <span>6</span>
                                        </button>
                                        <button class="action-btn reply-btn">
                                            <i class="bi bi-reply"></i>
                                            <span>Reply</span>
                                        </button>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>

                </section><!-- /Blog Comments Section -->

                <!-- Blog Comment Form Section -->
                <section id="blog-comment-form" class="blog-comment-form section">

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <form method="post" role="form">

                            <div class="section-header">
                                <h3>Share Your Thoughts</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>

                            <div class="row gy-3">
                                <div class="col-md-6 form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter your full name" required="">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter your email address" required="">
                                </div>

                                <div class="col-12 form-group">
                                    <label for="website">Website</label>
                                    <input type="url" name="website" class="form-control" id="website"
                                        placeholder="Your website (optional)">
                                </div>

                                <div class="col-12 form-group">
                                    <label for="comment">Your Comment *</label>
                                    <textarea class="form-control" name="comment" id="comment" rows="5"
                                        placeholder="Write your thoughts here..." required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn-submit">Post Comment</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </section><!-- /Blog Comment Form Section -->

            </div>


        </div>
    </div>
</body>
@endsection