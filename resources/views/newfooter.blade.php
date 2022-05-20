<footer id="footer">
    <div class="container d-md-flex" style="padding: 10px;">
        <div class="social-links me-md-auto text-center text-md-start">
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
        <div class="text-center text-md-right pt-3 pt-md-0">
            <p style="font-weight: bold;">&copy; تمامی حقوق برای مجموعه ژاوی هاب محفوض است </p>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('new/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('new/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('new/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('new/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('new/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('new/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('new/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('new/assets/js/main.js')}}"></script>
<script>
    // This is "probably" IE9 compatible but will need some fallbacks for IE8
    // - (event listeners, forEach loop)

    // wait for the entire page to finish loading
    window.addEventListener('load', function() {

        // setTimeout to simulate the delay from a real page load
        setTimeout(lazyLoad, 1000);

    });

    function lazyLoad() {
        var card_images = document.querySelectorAll('.card-image');

        // loop over each card image
        card_images.forEach(function(card_image) {
            var image_url = card_image.getAttribute('data-image-full');
            var content_image = card_image.querySelector('img');

            // change the src of the content image to load the new high res photo
            content_image.src = image_url;

            // listen for load event when the new photo is finished loading
            content_image.addEventListener('load', function() {
                // swap out the visible background image with the new fully downloaded photo
                card_image.style.backgroundImage = 'url(' + image_url + ')';
                // add a class to remove the blur filter to smoothly transition the image change
                card_image.className = card_image.className + ' is-loaded';
            });

        });

    }


</script>
<script>

    window.onload = function(){
        var topLoader = document.getElementById('top-loader');
        topLoader.classList.toggle('play-loader');
    };
</script>
