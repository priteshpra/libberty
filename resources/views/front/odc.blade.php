<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>A’La Liberty - Our Door Caterings</title>
    <meta content="A’La Liberty - Premier Catering and Banquet Services" name="description">
    <meta content="catering, banquets, restaurants, vegetarian dining, Hyderabad" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front/odc/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <!--.satisfy-regular {
  font-family: "Satisfy", system-ui;
  font-weight: 400;
  font-style: normal;
  }-->
    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/odc/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/odc/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/odc/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/odc/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/odc/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/odc/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/odc/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('front/odc/assets/css/main.css') }}" rel="stylesheet">
    <style>
        .slides img {
            width: 80%;
        }

        .slides {
            padding-top: 4em;
        }

        .video-container {
            position: relative;
            overflow: hidden;
            cursor: pointer;
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

        #wa-widget {
            position: fixed;
            bottom: 65px;
            right: 15px;
            position: fixed;
            z-index: 99999;
            background-color: var(--accent-color);
            width: 44px;
            height: 44px;
            border-radius: 50px;
            transition: all 0.4s;
        }

        #wa-widget:hover {}

        #wa-widget .bi-whatsapp::before {
            content: "";
            font-size: 45px;
            color: white;
            cursor: pointer;
        }

        /* gallery */
        .gallery .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery .gallery-item img {
            transition: all ease-in-out 0.4s;
        }

        .gallery .gallery-item {
            overflow: hidden;
            border-right: 3px solid var(--background-color);
            border-bottom: 3px solid var(--background-color);
        }

        /*testimonials */
        .testimonials .testimonial-item {
            box-sizing: content-box;
            min-height: 320px;
        }

        .testimonials .testimonial-item p {
            font-style: italic;
            margin: 0 15px 0 15px;
            padding: 20px 20px 60px 20px;
            background:
                color-mix(in srgb, var(--default-color), transparent 97%);
            position: relative;
            border-radius: 6px;
            position: relative;
            z-index: 1;
        }

        .testimonials .testimonial-item .testimonial-img {
            width: 90px;
            border-radius: 50%;
            margin: -40px 0 0 40px;
            position: relative;
            z-index: 2;
            border: 6px solid var(--background-color);
        }

        .testimonials .testimonial-item h3 {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0 5px 45px;
        }

        .testimonials .testimonial-item h4 {
            font-size: 14px;
            color:
                color-mix(in srgb, var(--default-color), transparent 20%);
            margin: 0 0 0 45px;
        }
    </style>


</head>

<body class="index-page">
    <div id="wa-widget"><i class="bi bi-whatsapp"></i></div>
    <div class="companylogo"><a href="#"><img src="{{ asset('front/odc/assets/img/ODCLogos-Liberty.png') }}"
                alt="A'La Liberty Outdoor Caterings"></a></div>
    <header id="header" class="header d-flex flex-column justify-content-center">
        <i class="header-toggle d-xl-none bi bi-list"></i>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="http://libertyexclusive.com"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
                <li><a href="https://libertyexclusive.com/blog"><i class="bi bi-book navicon"></i><span>Our
                            Blog</span></a></li>
                <li><a href="#" class="active"><i class="bi bi-door-open"></i><span>OD Catering</span></a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <section id="hero" class="galfee light-background">
            <div class="container section-title" data-aos="fade-up">
                <!--<h2>Banquet Halls</h2>
        <p class="mb-3">Our venue boasts three exquisite banquet halls, each uniquely designed to cater to different types of events and guest sizes.</p>-->
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-lg-6 col-md-6 video-container">
                            <div class="slides">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img
                                                src="{{ asset('front/odc/assets/img/odc/1-1.jpg') }}"
                                                alt="Out Door Catering"></div>
                                        <div class="swiper-slide"><img
                                                src="{{ asset('front/odc/assets/img/odc/1.jpg') }}"
                                                alt="Out Door Catering"></div>
                                        <div class="swiper-slide"><img
                                                src="{{ asset('front/odc/assets/img/odc/2.jpg') }}"
                                                alt="Out Door Catering"></div>
                                        <div class="swiper-slide"><img
                                                src="{{ asset('front/odc/assets/img/odc/3.jpg') }}"
                                                alt="Out Door Catering"></div>
                                        <div class="swiper-slide"><img
                                                src="{{ asset('front/odc/assets/img/odc/4.jpg') }}"
                                                alt="Out Door Catering"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Section Title -->
        </section>
        <section id="about" class="about section mt-5">
            <!-- Section Title -->
            <!--<div class="container section-title" data-aos="fade-up">
        <h2>About us</h2>
        <p>Welcome to A'La Liberty, where Culinary Innovation meets unparalleled Hospitality. Since our inception in 1988 as a humble Catering Business, we've continuously evolved, setting trends and redefining the culinary landscape.</p><br>
		  <p>In the early 1990s, we pioneered the introduction of International Cuisines, elevating the dining experience with a diverse array of dishes including desserts, chaats, and starters. Our commitment to attention to detail and cleanliness became synonymous with our brand, setting new standards in the industry.</p><br>
		  <p>One of our groundbreaking innovations was the introduction of Live Counters for Hot Naans at events, adding an interactive element to our Catering Services. This innovation not only delighted guests but also set a new benchmark for Outdoor Catering.</p>
      </div>-->
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="card"><img src="{{ asset('front/odc/assets/img/odc/square.jpg') }}"
                                class="img-fluid" alt="Our Door Catering"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <h1>A Legacy of Excellence in <strong>Outdoor Catering</strong></h1>
                        <p class="py-1">
                            Since 1986, <strong>A'La Liberty</strong> has been transforming celebrations into
                            extraordinary experiences with premium pure vegetarian catering. From lavish weddings and
                            milestone events to intimate gatherings and corporate soirées, we bring gourmet excellence
                            to every occasion.
                        </p>
                        <p>With bespoke menus, live culinary stations, and elegant presentations, we curate immersive
                            dining experiences that captivate guests. Every detail is meticulously crafted, ensuring
                            seamless execution, indulgent flavors, and a touch of sophistication. Our services extend
                            beyond just catering, we provide customized setups, attentive hospitality, and seamless
                            event coordination. Offering a wide variety of cuisines, from traditional Indian feasts to
                            global gourmet selections, we ensure every palate is delighted. At A'La Liberty, we don’t
                            just cater events, we create lasting memories that guests cherish forever. </p>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->



        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p>Some photos from Our Out Door Catering</p>
            </div><!-- End Section Title -->

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('front/odc/assets/img/odc/1.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('front/odc/assets/img/odc/1.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('front/odc/assets/img/odc/2.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('front/odc/assets/img/odc/2.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('front/odc/assets/img/odc/3.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('front/odc/assets/img/odc/3.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('front/odc/assets/img/odc/4.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('front/odc/assets/img/odc/4.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('front/odc/assets/img/odc/6.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('front/odc/assets/img/odc/6.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('front/odc/assets/img/odc/7.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('front/odc/assets/img/odc/7.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('front/odc/assets/img/odc/8.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('front/odc/assets/img/odc/8.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->


                </div>

            </div>

        </section>
        <!-- /Testimonials Section -->



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
                                <p><strong>A'La Liberty</strong><br> 2nd Floor, Leela Gopal Towers, 8-2-701/2, Road No.
                                    12, near Century Hospital, near Century Super Speciality Hospitals, Bhola Nagar,
                                    Banjara Hills, Hyderabad, Telangana 500034</p><br>


                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p><strong>+ 91 77027 20044</strong></p>
                                <p><strong>+91 92465 38818</strong></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>rishabh@libertyexclusive.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="front/odc/forms/contact.php" method="post" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6">
                                    <input type="tel" class="form-control" name="contact_number"
                                        placeholder="Contact Number" required pattern="\d{10}" maxlength="10"
                                        title="Please enter exactly 10 digits" inputmode="numeric"
                                        oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10)">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label fls">Select Event Date</label>
                                    <input type="date" class="form-control" name="event_date"
                                        placeholder="Select Event date" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label fls">Select Time</label>
                                    <input type="time" class="form-control" name="time_to_call"
                                        placeholder="Any preferred time for a callback" required="20">
                                </div>


                                <div class="col-md-6 ">
                                    <input type="number" class="form-control" name="number_of_guest"
                                        placeholder="Number of Guest" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="reference"
                                        placeholder="reference (if any)">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required=""></textarea>
                                </div>
                                <!-- <div class="g-recaptcha" data-sitekey="6LfENjcqAAAAAEvdptEC_sLT8bQOI8GotLmFne7q"></div> -->
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section><!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container">
            <h3 class="sitename">
                <h3 class="sitename"><img class="w-25" src="{{ asset('front/odc/assets/img/logo.png') }}"
                        alt="A’La Liberty"></h3>
            </h3>
            <p>At A'La Liberty, we believe that exceptional dining is more than just food—it's an experience. Since our
                humble beginnings in 1988, we've grown into a leader in culinary innovation and hospitality. In the
                early 1990s, we set the stage for introducing International Cuisines, transforming the dining landscape
                with our diverse offerings of starters, chaat, and indulgent desserts. Our unwavering commitment to
                detail and impeccable cleanliness has become a hallmark of our brand, setting new industry standards.
                Today, with two restaurants, three banquet halls, and a full-fledged outdoor catering service, we
                continue to push boundaries, creating unforgettable culinary experiences for every guest. Whether it’s a
                private gathering or a grand celebration, A'La Liberty remains dedicated to delivering excellence in
                every bite and moment.</p>
            <div class="social-links d-flex justify-content-center">
                <!--<a href=""><i class="bi bi-twitter-x"></i></a>-->
                <a href="https://www.facebook.com/share/bRfeLgAQoJJApm1X/"><i class="bi bi-facebook"></i></a>
                <a
                    href="https://www.instagram.com/alaliberty.outdoors?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                        class="bi bi-instagram"></i></a>
                <!-- <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>-->
            </div>
            <div class="container">
                <div class="copyright">
                    <span>Copyright</span> <strong class="px-1 sitename">A’La Liberty</strong> <span>All Rights
                        Reserved</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front/odc/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/odc/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {});
    </script>

    <script>
        const videoContainers = document.querySelectorAll('.video-container');

    videoContainers.forEach(container => {
        const video = container.querySelector('video');

        container.addEventListener('mouseenter', () => {
            video.play();
        });

        container.addEventListener('mouseleave', () => {
            video.pause();
            video.currentTime = 0; // Reset video to start
        });
    });
    </script>

    <script>
        // Get the portfolio container and filter elements
	var portfolioContainer = document.querySelector('.portfolio-container');
	var filterElements = document.querySelectorAll('#portfolio-flters li');

	// Initialize Isotope.js
	var iso = new Isotope(portfolioContainer, {
	  itemSelector: '.portfolio-item',
	  layoutMode: 'fitRows'
	});

	// Add event listener to filter elements
	filterElements.forEach(function(element) {
	  element.addEventListener('click', function() {
		// Get the filter value
		var filterValue = element.getAttribute('data-filter');

		// Filter the portfolio items
		iso.arrange({
		  filter: filterValue
		});

		// Add active class to the current filter element
		filterElements.forEach(function(elem) {
		  elem.classList.remove('filter-active');
		});
		element.classList.add('filter-active');
	  });
	});

    </script>

    <script>
        // Wait for images to load
portfolioContainer.imagesLoaded().progress(function() {
  // Initialize Isotope.js
  iso.layout();
});

    </script>
    <script>
        // Get the portfolio container and filter elements
	var portfolioContainer = document.querySelector('.portfolio-container');
	var filterElements = document.querySelectorAll('#portfolio-flters li');

	// Initialize Isotope.js
	var iso = new Isotope(portfolioContainer, {
	  itemSelector: '.portfolio-item',
	  layoutMode: 'fitRows'
	});

	// Wait for images to load
	portfolioContainer.imagesLoaded().progress(function() {
	  // Initialize Isotope.js
	  iso.layout();
	});

	// Add event listener to filter elements
	filterElements.forEach(function(element) {
	  element.addEventListener('click', function() {
		// Get the filter value
		var filterValue = element.getAttribute('data-filter');

		// Filter the portfolio items
		iso.arrange({
		  filter: filterValue
		});

		// Add active class to the current filter element
		filterElements.forEach(function(elem) {
		  elem.classList.remove('filter-active');
		});
		element.classList.add('filter-active');
	  });
	});

    </script>


    <script>
        const galleryLargeImages = document.querySelectorAll('#gallery-large .carousel-item img');

	galleryLargeImages.forEach((image) => {
	  image.addEventListener('click', () => {
		image.classList.toggle('zoomed');
	  });
	});
    </script>


    <script>
        // Add click event listener to each carousel item
	document.querySelectorAll('.carousel-item img').forEach((image) => {
	  image.addEventListener('click', (event) => {
		// Get the clicked image URL
		const imageUrl = event.target.src;

		// Show the Modal and update the image src
		const modalImage = document.getElementById('modalImage');
		modalImage.src = imageUrl;
		const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
		imageModal.show();
	  });
	});
    </script>
    <!-- Main JS File -->
    <script>
        // Object where the key is the hall name and the value is an array of packages
  const hallPackages = {
    "ANANTAA HALL": ["AMRIT", "AAHAR", "PANCH"],
    "REGENT HALL": ["GRAND", "ROYAL", "PRESTIGE"],
    "BANJARA HALL": ["DELUXE", "GRAND", "ROYAL"]
  };

  // Get references to the select elements
  const hallSelect = document.getElementById('hallSelect');
  const packageSelect = document.getElementById('packageSelect');

  // Event listener for when the hall is selected
  hallSelect.addEventListener('change', function() {
    const selectedHall = this.value;

    // Clear the package select options
    packageSelect.innerHTML = '<option selected disabled>Select Package</option>';

    // Get the packages for the selected hall
    const packages = hallPackages[selectedHall];

    // Populate the package select with the new options
    if (packages) {
      packages.forEach(function(package) {
        const option = document.createElement('option');
        option.value = package;
        option.textContent = package;
        packageSelect.appendChild(option);
      });
    }
  });
    </script>

    <script>
        // WhatsApp Widget Script
        const waWidget = document.createElement('script');
        waWidget.type = 'text/javascript';
        waWidget.src = 'https://d2jyl60qlhb39o.cloudfront.net/integration-plugin.js';
        waWidget.setAttribute('widget-id', 'wa-widget');
        waWidget.id = 'ox7doz';
        document.body.appendChild(waWidget);
    </script>
    <script src="{{ asset('front/odc/assets/js/main.js') }}"></script>

</body>

</html>