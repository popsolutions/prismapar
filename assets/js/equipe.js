$(document).ready(function () {
  if ($(".bbb_viewed_slider").length) {
    var viewedSlider = $(".bbb_viewed_slider");

    viewedSlider.owlCarousel({
      loop: true,
      margin: 0,
      autoplay: false,
      //autoplayTimeout: 6000,
      nav: false,
      dots: false,
      responsive: {
        0: { items: 2 },
        480: { items: 2 },
        575: { items: 3 },
        768: { items: 4 },
        991: { items: 4 },
        1199: { items: 5 },
      },
    });

    if ($(".bbb_viewed_prev").length) {
      var prev = $(".bbb_viewed_prev");
      prev.on("click", function () {
        viewedSlider.trigger("prev.owl.carousel");
      });
    }

    if ($(".bbb_viewed_next").length) {
      var next = $(".bbb_viewed_next");
      next.on("click", function () {
        viewedSlider.trigger("next.owl.carousel");
      });
    }
  }
});
