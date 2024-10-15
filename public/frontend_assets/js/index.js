$('.example').owlCarousel({
    loop: true,
    items: 9,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 3,
            nav: false
        },
        500: {
            items: 4,
            nav: false
        },
        600: {
            items: 6,
            nav: false
        },
        1000: {
            items: 7,
            nav: true
        },
        1299: {
            items: 8,
            nav: true
        },
        1499: {
            items: 9,
            nav: true
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


	$('.newTestimonialSlider').owlCarousel({
    stagePadding: 100,
    loop:true,
    margin:10,
    items:1,
    nav:false,
    navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
    ],
    dots:false,
    autoplay: true,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1,
            stagePadding: 0
        },
        576:{
            items:1,
            stagePadding: 60
        },
        992:{
            items:1,
            stagePadding: 150
        },
        1200:{
            items:1,
            stagePadding: 250
        },
        1400:{
            items:1,
            stagePadding: 300
        },
    }
})


$('.owl-testimonials-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 20,
    dots: false,
    center: true,
    autoplay: true,
    autoplayHoverPause: true,
    smartSpeed: 450,
});
