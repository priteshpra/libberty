@extends('front.layouts.master')

@section('styles')
<link href="{{ asset('front/assets/css/blog.css') }}" rel="stylesheet">
@endsection

@section('front-content')

<body class="blog-details-page">
    <!-- Page Title -->
    <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house"></i>
                            Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('blog') }}">Our Blogs</a></li>
                    <li class="breadcrumb-item active current">{{ $blogDetails->title }}</li>
                </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>Blog Header</h1>
            <p>{{ $blogDetails->title }}</p>
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
                                <img src="{{ asset('blogs/'.$blogDetails->image) }}" alt="Featured blog image"
                                    class="img-fluid" loading="lazy">
                                <div class="meta-overlay">
                                    <div class="meta-categories">
                                        {{-- <a href="#" class="category">Web Development</a> --}}
                                        {{-- <span class="divider">•</span> --}}
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
                                            </div>
                                        </div>
                                        <div class="post-meta">
                                            <span class="date"><i class="bi bi-calendar3"></i> {{ date('M d Y',
                                                strtotime($blogDetails->blog_date)) }}</span>
                                            <span class="divider">•</span>
                                            <span class="comments"><i class="bi bi-chat-text"></i> {{ $commentCount }}
                                                Comments</span>
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
                                <h3>Comments <span class="comment-count">({{ $commentCount }})</span></h3>
                            </div>
                            <div class="comments-wrapper">
                                <div id="commentsContainer"></div>
                            </div>
                        </div>

                    </div>

                </section><!-- /Blog Comments Section -->

                <!-- Blog Comment Form Section -->
                <section id="blog-comment-form" class="blog-comment-form section">

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <form id="commentForm">
                            <!-- action="{{ url('blog/'.$blogDetails->id.'/comment') }}" -->
                            @csrf
                            <div class="section-header">
                                <h3>Share Your Thoughts</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <input type="hidden" name="blog_id" value="{{ $blogDetails->id }}">
                            <input type="hidden" name="parent_id" id="parent_id">
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
                                @include('backend.layouts.partials.messages')
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn-submit">Post Comment</button>
                                </div>
                            </div>

                        </form>
                        <div id="commentSuccess" class="alert alert-success mt-2" style="display: none;">
                            Comment submitted for approval.
                        </div>
                    </div>
                </section>

            </div>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        loadComments();

        // Fetch comments
        function loadComments() {
            $.get("{{ route('comments.fetch', $blogDetails->id) }}", function (comments) {
                let commentHtml = "";
                comments.forEach(comment => {
                    commentHtml += buildCommentHTML(comment);
                });
                $("#commentsContainer").html(commentHtml);
            });
        }

        // Build HTML for comments and replies
        function buildCommentHTML(comment) {
            let commentHtml = `
                <article class="comment-card">
                    <div class="comment-header">
                        <div class="user-info">
                            <img src="{{ asset('front/assets/img/person/Unknown_person.jpg') }}" alt="User avatar" loading="lazy">
                            <div class="meta">
                                <h4 class="name">${comment.name}</h4>
                                <span class="date"><i class="bi bi-calendar3"></i> ${new Date(comment.created_at).toDateString()}</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-content">
                        <p>${comment.comment}</p>
                    </div>
                    <div class="comment-actions">
                        <button class="action-btn like-btn" data-id="${comment.id}">
                            <i class="bi bi-hand-thumbs-up"></i> <span class="like-count">${comment.likes}</span>
                        </button>
                        <button class="action-btn reply-btn" data-id="${comment.id}">
                            <i class="bi bi-reply"></i> <span>Reply</span>
                        </button>
                    </div>
                    <div class="reply-thread" id="replies-${comment.id}">`;

            if (comment.replies.length > 0) {
                comment.replies.forEach(reply => {
                    commentHtml += buildCommentHTML(reply);
                });
            }

            commentHtml += `</div></article>`;
            return commentHtml;
        }

        $(document).on("click", ".like-btn", function () {
            var commentId = $(this).data("id");
            var likeButton = $(this);
            var likeCountSpan = likeButton.find(".like-count");

            $.ajax({
                url: "{{ route('comment.like', ':id') }}".replace(':id', commentId),//"/comment/" + commentId + "/like",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    likeCountSpan.text(response.likes); // Update like count
                },
                error: function () {
                    alert("Error liking the comment.");
                }
            });
        });

        // Submit comment form
        $("#commentForm").submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('comments.store') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function (response) {
                    $("#commentSuccess").show();
                    $("#commentForm")[0].reset();
                    $("#parent_id").val(""); // Reset parent_id
                    loadComments();
                },
                error: function () {
                    alert("Something went wrong. Please try again.");
                }
            });
        });

        // Reply button click
        $(document).on("click", ".reply-btn", function () {
            let commentId = $(this).data("id");
            $("#parent_id").val(commentId);
            $("textarea[name='comment']").focus().attr("placeholder", "Replying to comment...");
        });
    });
</script>
@endsection