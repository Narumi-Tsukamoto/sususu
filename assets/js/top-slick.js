jQuery(function($){
  $('.works-ttl').slick({
    autoplay: true,
    autoplaySpeed: 0,
    variableWidth: true,
    arrows: false,
    speed: 10000,
    cssEase: "linear",
    pauseOnHover: false,
    pauseOnFocus: false,
    draggable: false,
  });
  $('#works-main-slider').slick({
    asNavFor:".follow",
    autoplay: true,
    speed: 1300,
    variableWidth: true,
    draggable: false,
    prevArrow: `<div class="prev_arrow_cont"><img src="${location.pathname}wp-content/themes/sususu/assets/img/top/svg/arrow_prev.svg" class="slide-arrow prev-arrow"></div>`,
    nextArrow: `<div class="next_arrow_cont"><img src="${location.pathname}wp-content/themes/sususu/assets/img/top/svg/arrow_next.svg" class="slide_arrow next-arrow"></div>`,
  });
  $('#works-sub-slider01').slick({
    draggable: false,
    speed: 1300,
    arrows: false,
    variableWidth: true
  });
  $('#works-sub-slider02').slick({
    draggable: false,
    speed: 1300,
    arrows: false,
    variableWidth: true
  });
  $('#works-txt-slider').slick({
    draggable: false,
    speed: 1300,
    arrows: false,
    variableWidth: true
  });
});