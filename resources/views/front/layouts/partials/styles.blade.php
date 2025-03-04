<!-- Favicons -->
<link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">

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
</style>