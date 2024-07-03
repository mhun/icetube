new WOW().init();

jQuery( document ).ready(function($) {
    $('#video').click(function() {
        $(this).get(0).paused ? $(this).get(0).play() : $(this).get(0).pause();
    });
});

jQuery(window).scroll(function() {
  if ($(document).scrollTop() > 500) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});