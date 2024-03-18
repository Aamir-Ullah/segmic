
<!-- Scripts -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('frontend/dist/script.js')}}"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- aos -->
<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- End of Scripts -->
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!-- 
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
-->
<!-- End of Analytics -->

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        // pagination: {
        // 	el: ".swiper-pagination",
        // 	dynamicBullets: true,
        // },
        loop: 'true',
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3000, // Delay between slides in milliseconds (e.g., 5000ms = 5 seconds)
            disableOnInteraction: true, // Prevent autoplay from stopping when user interacts with the slider
        },
        slidesPerView: 1, // Show 1 slide at a time
        slidesPerGroup: 1, // Move 1 slide at a time
    });

    var Heroswiper = new Swiper(".HeroSwiper", {
        slidesPerView: 3,
        // spaceBetween: 10,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000, // Delay between slides in milliseconds (e.g., 3000ms = 3 seconds)
            disableOnInteraction: false, // Allow autoplay to continue even when user interacts with the slider
        },
        loop: true, // Enable looping
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script>

    document.addEventListener("DOMContentLoaded", function () {
        // Initialize AOS after the DOM is loaded
        // AOS.init();
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
            initClassName: "aos-init", // class applied after initialization
            animatedClassName: "aos-animate", // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 1000, // values from 0 to 3000, with step 50ms
            easing: "ease", // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: true, // whether elements should animate out while scrolling past them
            anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
        });

        //--------------------
    });

</script>

</body>

</html>