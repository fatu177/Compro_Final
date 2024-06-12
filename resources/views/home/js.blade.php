<script src="{{ asset('assets/fe/assets/vendor/purecounter/purecounter_vanilla.js') }}') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/fe/assets/js/main.js') }}"></script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>


<script>
    // const typed = gete('.typed');
    // if (typed) {
    //     let typed_strings = typed.getAttribute('data-typed-items');
    //     typed_strings = typed_strings.split(',');
    //     new Typed('.typed', {
    //         strings: typed_strings,
    //         loop: true,
    //         typeSpeed: 100,
    //         backSpeed: 50,
    //         backDelay: 2000
    //     });
    // }
    // }
    let typed_strings = document.querySelector('.typed').getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    let typed = new Typed('.typed', {
        strings: typed_strings,
        loop: true,
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 2000
    });
</script>
