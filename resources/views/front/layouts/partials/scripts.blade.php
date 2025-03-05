<!-- jquery latest version -->
{{-- <script src="{{ asset('backend/assets/js/vendor/jquery-2.2.4.min.js') }}"></script> --}}

<!-- Vendor JS Files -->
<script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/php-email-form/validate.js?v=2') }}"></script>
<script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('front/assets/vendor/typed.js/typed.umd.js') }}"></script>
<script src="{{ asset('front/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('front/assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('front/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
{{-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript" src=https://d2jyl60qlhb39o.cloudfront.net/integration-plugin.js id="wa-widget"
    widget-id="EWKMOm">
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
<script src="{{ asset('front/assets/js/main.js') }}"></script>
<script src="{{ asset('front/assets/js/blogmain.js') }}"></script>