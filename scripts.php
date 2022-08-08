<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- For Global Section -->
<script src="./assets/js/core.js"></script>
<script src="./assets/js/maps.js"></script>
<script src="./assets/js/worldLow.js"></script>
<script src="./assets/js/continentsLow.js"></script>
<script src="./assets/js/script_<?php echo $lang; ?>.js"></script>
<script src="//cdn.amcharts.com/lib/5/themes/Responsive.js"></script>

<!-- For Clients Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="./assets/js/ClientsSlider.js"></script>

<!-- For Equipe Section -->
<script src="./assets/js/equipe.js"></script>

<!-- For Cases -->
<script src="./assets/js/Cases.js"></script>
<!-- For mobile Glovo -->
<script src="./assets/js/glovo.js"></script>
<!-- For Timeline -->
<script src="./assets/js/timeline.js"></script>
<!-- For Number Animation -->
<script>
  $(".display-counter").each(function() {
    $(this)
      .prop("Counter", 0)
      .animate({
        Counter: $(this).text(),
      }, {
        duration: 8000,
        easing: "swing",
        step: function(now, tween) {
          // Check added for decimal number
          if (parseInt(tween.end) == parseFloat(tween.end)) {
            $(this).text(Math.ceil(now));
          } else {
            $(this).text(now.toFixed(2));
          }
        },
      });
  });
</script>