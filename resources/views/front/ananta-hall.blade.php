@extends('front.layouts.master')

@section('title')
{{ __('Best Banquet Halls for Weddings & Parties – Liberty Exclusive') }}
@endsection

@section('styles')
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

<body class="portfolio-details-page">
    <div class="ananta-header">

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <div class="hdr-img">
            <img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/ananta-inner-page.jpg') }}" alt="Banjara Hall">
        </div>
        <!-- The HTML5 video element that will create the background video on the header -->
        <!--<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    		<source src="{{ asset('front/assets/img/portfolio/Regent-Hall/regent-hall.mp4') }}" type="video/mp4">
    	  </video>-->

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3 text-black anantalogo"><img src="{{ asset('front/assets/img/ananta.png') }}"
                            alt="Anantaa Hall">
                    </h1>
                    <p class="lead mb-0 text-black">Weddings, Receptions, Parties, Corporates and More …..</p>
                </div>
            </div>
        </div>
    </div>
    <section id="portfolio-details" class="portfolio-details section">

        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  },
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
                        </script>
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/7.webp') }}"
                                    alt="Ananta Hall 1">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/6.webp') }}"
                                    alt="Ananta Hall 2">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/5.webp') }}"
                                    alt="Ananta Hall 3">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/4.webp') }}"
                                    alt="Ananta Hall 4">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/3.webp') }}"
                                    alt="Ananta Hall 4">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('front/assets/img/portfolio/Anantaa-Hall/2.webp') }}"
                                    alt="Ananta Hall 4">
                            </div>

                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-info">
                        <h3>ANANTAA HALL</h3>
                        <ul>
                            <li><strong>Size</strong> 12,500 sq.ft.</li>
                            <li><strong>Ceiling Height</strong> 13 ft.</li>
                            <li><strong>Capacity</strong> 400-800 people</li>
                            <li><strong>Additional Services</strong> Decor, Dias, Audio-Visual Aids</li>
                            <li><strong>Address</strong> Ground Floor, T19 Towers,Mahatma Gandhi Rd, Karbala Maidan,
                                Rani
                                Gunj, Secunderabad, Hyderabad, Telangana - 500003</li>

                            <li><a href="{{ asset('front/assets/pdf/ANANTAA-HALL-LAYOUT.pdf') }}"
                                    class="btn-visit align-self-start">View
                                    Hall
                                    Layout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Portfolio Details Section -->
    <section class="Packages">
        <div class="container">
            <h2 class="text-center mb-3">ANANTAA HALL PACKAGES</h2>
            <div class="col-lg-8 offset-lg-2 pcktable">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-warning">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">PACKAGES</th>
                                <th scope="col"><strong>AMRIT</strong><br> @1400/-</th>
                                <th scope="col"><strong>AAHAR</strong><br> @1600/-</th>
                                <th scope="col"><strong>PANCH RASA</strong><br> @1900/-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>JUICE</td>
                                <td>3</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>SEASONAL JUICE</td>
                                <td>-</td>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <!--<tr>
    						  <th scope="row">3</th>
    						  <td>LIVE MOCKTAILS</td>
    						  <td>-</td>
    						<td>-</td>
    						<td>Counter</td>
    						</tr>-->
                            <tr>
                                <th scope="row">3</th>
                                <td>STARTERS</td>
                                <td>3</td>
                                <td>4</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>PREMIUM STARTERS</td>
                                <td>-</td>
                                <td>-</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>SOUP</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>CHAAT</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <!--<tr>
    						  <th scope="row">8</th>
    						  <td>DAKSHIN</td>
    						  <td>-</td>
    						<td>-</td>
    						<td>2</td>
    						</tr>-->
                            <tr>
                                <th scope="row">7</th>
                                <td>SALAD</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>LIVE INTERNATIONAL</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>PREMIUM LIVE INTERNATIONAL</td>
                                <td>-</td>
                                <td>-</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>ORIENTAL &amp; CONTINENTAL</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>INDIAN</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>LIVE INDIAN</td>
                                <td>-</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>BREADS</td>
                                <td>3</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>RICE </td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>LENTILS</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>ACCOMPANIMENTS</td>
                                <td colspan="3">Assorted Papad | Pickles | Curd</td>
                            </tr>
                            <tr>
                                <th scope="row">17</th>
                                <td>PREMIUM DESSERTS</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <th scope="row">18</th>
                                <td>LIVE DESSERTS</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th scope="row">19</th>
                                <td>ICE CREAM</td>
                                <td>2</td>
                                <td>2</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">20</th>
                                <td>STONE CONCEPTS</td>
                                <td>-</td>
                                <td>-</td>
                                <td>COUNTER</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center table-active text-white py-2"></div>
            </div>
        </div>
    </section>


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

                            <div class="col-md-6 ">
                                <input type="tel" class="form-control" name="contact_number"
                                    placeholder="Contact Number" required pattern="\d{10}" maxlength="10"
                                    title="Please enter exactly 10 digits" inputmode="numeric"
                                    oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10)">
                            </div>

                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="event_date"
                                    placeholder="Select Event date" required="">
                            </div>

                            <div class="col-md-6 ">
                                <select class="form-select" aria-label="Default select example" name="hall">
                                    <option value="ANANTAA HALL" selected>ANANTAA HALL</option>
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="number_of_guest"
                                    placeholder="Number of Guest" required>
                            </div>
                            <div class="col-md-6 ">
                                <select class="form-select" aria-label="Default select example" name="package">
                                    <option selected disabled>Select Package</option>
                                    <option value="AMRIT">AMRIT</option>
                                    <option value="AAHAR">AAHAR</option>
                                    <option value="PANCH">PANCH</option>
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <input type="time" class="form-control" name="time_to_call"
                                    placeholder="Any preferred time for a callback" required="20">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reference"
                                    placeholder="reference (if any)">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required=""></textarea>
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
                <!--<div class="imgShowCnt" style="display:none"><img width='650' src="https://www.libertyexclusive.com/assets/img/Thank-You-page-for-banquets.png" alt="Displayed Image"></div>-->
            </div>
        </div>
    </section><!-- /Contact Section -->
</body>
@endsection