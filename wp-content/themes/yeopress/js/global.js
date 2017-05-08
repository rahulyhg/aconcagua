require.config({
	"baseUrl": "/wp-content/themes/yeopress/js/",
	"paths": {
		"jquery": "vendor/jquery/jquery",
    "slick": "vendor/slick-carousel/slick/slick"
	}
});

requirejs(['jquery', 'slick'], function( $ ) {

  //Herospace
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
      var herospaceCurrent = currentSlide + 1;

      $('.herospace__dots__actions__current').html('0' + herospaceCurrent);
    });

    var totalHerospaceSlides = $('.herospace__container .herospace__wrapper').length;

    $('.herospace__dots__actions__total').html('0' + totalHerospaceSlides);

    if(totalHerospaceSlides == 1) {
      $('.herospace__dots').hide();
    }
  }

  //Herospace Secondary
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

  //Change
  if($('.change__container').length) {
    $('.change__container').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      appendArrows: $('.change__dots'),
      prevArrow: '<a href="" class="change__dots__btn change__dots__prev"></a>',
      nextArrow: '<a href="" class="change__dots__btn change__dots__next"></a>'
    });

    $('.change__container').on('afterChange', function(event, slick, currentSlide, nextSlide) {
      var changeCurrent = currentSlide + 1;

      $('.change__dots__actions__current').html('0' + changeCurrent);
    });

    var totalChangeSlides = $('.change__container .change__wrapper').length;


    $('.change__dots__actions__total').html('0' + totalChangeSlides);

    if(totalChangeSlides == 1) {
      $('.change__dots').hide();
    }
  }

  //Change Secondary
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

  //News
  if($('.news__wrapper').length) {
    if($('.news__wrapper .news__content__box').length) {
      $('.news__dots').css('display', 'block');
    } else {
      $('.news__dots').css('display', 'none');
    }

    $('.news__wrapper').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      appendArrows: $('.news__dots'),
      prevArrow: '<a href="" class="news__dots__btn news__dots__prev"></a>',
      nextArrow: '<a href="" class="news__dots__btn news__dots__next"></a>'
    });

    $('.news__wrapper').on('afterChange', function(event, slick, currentSlide, nextSlide) {
      var newsCurrent = currentSlide + 1;

      $('.news__dots__actions__current').html('0' + newsCurrent);
    });

    var totalNewsSlides = $('.news__wrapper .news__content__box').length;

    $('.news__dots__actions__total').html('0' + totalNewsSlides);

    if(totalNewsSlides == 1) {
      $('.news__dots').hide();
    }
  }

  $('.footer__about__list__items--who').on('click', function(e) {
    e.preventDefault();
    $('html,body').animate({scrollTop: ($('.footer__down').offset().top) + 200}, 1000);

    $('.footer__bottom__wrapper__right').removeClass().addClass('footer__bottom__wrapper__right footer__bottom__wrapper__right--who');

    if($('.footer__bottom').hasClass('footer__bottom--show')) {
      return;
    } else {
      $('.footer__bottom').addClass('footer__bottom--show');
    }
  });

  $('.footer__about__list__items--publicity').on('click', function(e) {
    e.preventDefault();
    $('html,body').animate({scrollTop: ($('.footer__down').offset().top) + 200}, 1000);

    $('.footer__bottom__wrapper__right').removeClass().addClass('footer__bottom__wrapper__right footer__bottom__wrapper__right--publicity');

    if($('.footer__bottom').hasClass('footer__bottom--show')) {
      return;
    } else {
      $('.footer__bottom').addClass('footer__bottom--show');
    }
  });

  $('.footer__about__list__items--contact').on('click', function(e) {
    e.preventDefault();
    $('html,body').animate({scrollTop: ($('.footer__down').offset().top) + 200}, 1000);

    $('.footer__bottom__wrapper__right').removeClass().addClass('footer__bottom__wrapper__right footer__bottom__wrapper__right--contact');

    if($('.footer__bottom').hasClass('footer__bottom--show')) {
      return;
    } else {
      $('.footer__bottom').addClass('footer__bottom--show');
    }
  });

  $('.footer__bottom__close').on('click', function(e) {
    e.preventDefault();

    $('.footer__bottom').removeClass('footer__bottom--show');
  });

  $('.header__share__link').on('click', function(e) {
    e.preventDefault();

    var elem = $('.header__share');

    if(elem.hasClass('header__share--show')) {
      elem.removeClass('header__share--show');
    } else {
      elem.addClass('header__share--show');
    }
  });

  $('.article__left__share__link').on('click', function(e) {
    e.preventDefault();

    var elem = $('.article__left__share');

    if(elem.hasClass('article__left__share--show')) {
      elem.removeClass('article__left__share--show');
    } else {
      elem.addClass('article__left__share--show');
    }
  });

});
