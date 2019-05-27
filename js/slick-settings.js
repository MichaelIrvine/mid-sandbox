jQuery(document).ready(function($) {
  $(".slick-gallery").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    speed: 600,
    adaptiveHeight: false,
    fade: true,
    arrows: true,
    appendArrows: $(".container"),
    dots: true,
    dotsClass: "custom_paging",
    customPaging: function(slider, i) {
      if (i < 9) {
        return $('<button type="button" />').text("0" + (i + 1));
      } else {
        return $('<button type="button" />').text(i + 1);
      }
    },
    appendDots: $(".current-count"),
    nextArrow:
      '<button class="slide-button slides-next" aria-label="Next" type="button"></button>',
    prevArrow:
      '<button class="slide-button slides-previous" aria-label="Previous" type="button"></button>',
    responsive: [
      {
        breakpoint: 620,
        settings: {
          arrows: false
        }
      }
    ]
  });

});

