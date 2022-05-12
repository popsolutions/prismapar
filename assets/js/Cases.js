(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
     dots: false,
      nav: false,
		navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],

      responsive: {
        0: {
          items: 1,
          nav: false,
        },
        680: {
          items: 1,
          nav: false,
          loop: false,
        },
        1000: {
          items: 1,
          nav: true,
        },
      },
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();
