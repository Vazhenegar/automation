<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('DashboardElements/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('DashboardElements/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('DashboardElements/vendor/chart_js/chart.bundle.min.js') }}"></script>
<script src="{{ asset('DashboardElements/vendor/owl-carousel/owl.carousel.js') }}"></script>
<!-- Chart piety plugin files -->
<script src="{{ asset('DashboardElements/vendor/peity/jquery.peity.min.js') }}"></script>
<!-- Dashboard 1 -->
<script src="{{ asset('DashboardElements/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('DashboardElements/js/index_custom.min.js') }}"></script>
<script src="{{ asset('DashboardElements/js/deznav-init.js') }}"></script>
<script src="{{ asset('DashboardElements/js/demo.js') }}"></script>
<script src="{{ asset('DashboardElements/js/styleswitcher.js') }}"></script>
<script>
    function carouselReview() {
        /*  testimonial one function by = owl.carousel.js */
        function checkDirection() {
            var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
            if (htmlClassName == 'rtl') {
                return true;
            } else {
                return false;

            }
        }
        jQuery('.testimonial-one').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 15,
            nav: false,
            dots: false,
            left: true,
            rtl: checkDirection(),
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },
                991: {
                    items: 2
                },

                1200: {
                    items: 2
                },
                1600: {
                    items: 2
                }
            }
        })
        jQuery('.testimonial-two').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 15,
            nav: false,
            dots: true,
            left: true,
            rtl: checkDirection(),
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                991: {
                    items: 3
                },

                1200: {
                    items: 3
                },
                1600: {
                    items: 4
                }
            }
        })
    }
    jQuery(window).on('load', function() {
        setTimeout(function() {
            carouselReview();
        }, 1000);
    });
</script>
