require.config({
	"baseUrl": "wp-content/themes/yeopress/js",
	"paths": {
		"jquery": "vendor/jquery/jquery",
    "slick": "vendor/slick-carousel/slick/slick"
	}
});

requirejs(['jquery', 'slick'], function( $ ) {

  if($('.herospace__container').length) {
    $('.herospace__container').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      appendArrows: $('.herospace__dots'),
      prevArrow: '<a href="" class="herospace__dots__btn herospace__dots__prev"></a>',
      nextArrow: '<a href="" class="herospace__dots__btn herospace__dots__next"></a>'
    });

    $('.herospace__container').on('afterChange', function(event, slick, currentSlide, nextSlide) {
      let herospaceCurrent = currentSlide + 1;

      $('.herospace__dots__actions__current').html('0' + herospaceCurrent);
    });

    let totalHerospaceSlides = $('.herospace__container .herospace__wrapper').length;

    $('.herospace__dots__actions__total').html('0' + totalHerospaceSlides);
  }

  if($('.herospace-slider__mobile__list').length) {
    $('.herospace-slider__mobile__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      appendDots: $('.herospace-slider__mobile__dots')
    });
  }

  if($('.change-slider__mobile__list').length) {
    $('.change-slider__mobile__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      appendDots: $('.change-slider__mobile__dots')
    });
  }
});
