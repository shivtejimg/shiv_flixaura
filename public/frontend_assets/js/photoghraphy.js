$('.category_sldier').owlCarousel({
  loop: true,
  items: 3,
  margin: 0,
  nav: true,
  dots: false,
  autoplay: true,
  center: true,
  freeDrag: false,
  lazyLoad: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 2000,
  responsiveClass: true, 
  navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"],
  responsive: {
    0: {
      items: 2,
      margin: 20,
      dots: true,
    },
    500: {
      items: 2,
      margin: 10,
      dots: true,
    }, 
    600: {
      items: 4,
    },
    1024: {
      items: 6,
      nav: true,
    },
    1366: {
      items: 6,
      nav: true,
    }
  }
});




 