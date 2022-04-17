(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
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
