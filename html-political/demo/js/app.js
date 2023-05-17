$(document).ready(function ($) {
  "use strict";
  // Menu
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 250) {
      $(".header-area").addClass("header-sticky");
    } else {
      $(".header-area").removeClass("header-sticky");
    }
  });
  // Smothlyscroll
  var scrollsmoth = function () {
    $(document).on('click', '.navbar-nav a[href^="#"]', function (event) {
      event.preventDefault();

      var href = $.attr(this, 'href');

      $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 90
      }, 50, function () {
        // window.location.hash = href;
      });
    });
  };
  scrollsmoth();

  // SmothlyscrollActive
  var nav_sections = $('section');
  var main_nav = $('.navbar-nav');

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function () {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".navbar-nav li:first").addClass('active');
      }
    });
  });
 
 
 

}(jQuery))