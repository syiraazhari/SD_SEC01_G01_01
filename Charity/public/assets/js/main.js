$(document).ready(function () {
  "use strict";

  var window_width = $(window).width(),
    window_height = window.innerHeight,
    header_height = $(".default-header").height(),
    header_height_static = $(".site-header.static").outerHeight(),
    fitscreen = window_height - header_height;


  // $(".fullscreen").css("height", window_height)
  // $(".fitscreen").css("height", fitscreen);

  //-------- Active Sticky Js ----------//
  $(".default-header").sticky({
    topSpacing: 0
  });


  if (document.getElementById("default-select")) {
    $('select').niceSelect();
  };

  /*----------------------------------------------------*/
  /*  Magnific Pop up js (Home Video)
  /*----------------------------------------------------*/
  $('#play-home-video').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  $('.img-pop-up').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });

  $('.active-brand-carusel').owlCarousel({
    items: 3,
    loop: true,
    margin: 50,
    autoplayHoverPause: true,
    smartSpeed: 650,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 2,
      },
      768: {
        items: 4,
      },
      768: {
        items: 3,
      }
    }
  });

  /*----------------------------------------------------*/
	/*  Testimonials Slider
    /*----------------------------------------------------*/
  if ($('.instagram-slider').length) {
    $('.instagram-slider').owlCarousel({
      loop: true,
      margin: 0,
      items: 4,
      nav: false,
      autoplay: true,
      smartSpeed: 1500,
      dots: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        991: {
          items: 3
        },
        1200: {
          items: 5
        }
      }
    });
  }
/*----------------------------------------------------*/
  /*  Testimonials Slider
    /*----------------------------------------------------*/
  if ($('.instagram-slider-rtl').length) {
    $('.instagram-slider-rtl').owlCarousel({
      loop: true,
      margin: 0,
      items: 4,
      nav: false,
      rtl: true,
      autoplay: true,
      smartSpeed: 1500,
      dots: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        991: {
          items: 3
        },
        1200: {
          items: 5
        }
      }
    });
  }



  //------- Filter  js --------//
  $(window).on("load", function () {
    $(".filters ul li").on("click", function () {
      $(".filters ul li").removeClass("active");
      $(this).addClass("active");

      var data = $(this).attr("data-filter");
      $grid.isotope({
        filter: data
      });
    });

    if (document.getElementById("project")) {
      var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        percentPosition: true,
        masonry: {
          columnWidth: ".grid-sizer"
        }
      });
    }
  });




  // Select all links with hashes
  $('.navbar-nav a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .on('click', function (event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top - 50
          }, 1000, function () {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });



  // -------   Mail Send ajax

  $(document).ready(function () {
    var form = $('#booking'); // contact form
    var submit = $('.submit-btn'); // submit button
    var alert = $('.alert-msg'); // alert div for show alert message

    // form submit event
    form.on('submit', function (e) {
      e.preventDefault(); // prevent default form submit

      $.ajax({
        url: 'booking.php', // form action url
        type: 'POST', // form submit method get/post
        dataType: 'html', // request type html/json/xml
        data: form.serialize(), // serialize form data
        beforeSend: function () {
          alert.fadeOut();
          submit.html('Sending....'); // change submit button text
        },
        success: function (data) {
          alert.html(data).fadeIn(); // fade in response data
          form.trigger('reset'); // reset form
          submit.attr("style", "display: none !important");; // reset submit button text
        },
        error: function (e) {
          console.log(e)
        }
      });
    });
  });

  $("select").niceSelect();


  $(document).ready(function () {
    $('#mc_embed_signup').find('form').ajaxChimp();
  });

});