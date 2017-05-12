$('#sec_01 .sec_01-slider_controll').addClass('fade-in-left')
jQuery(document).ready(function($) {
  // $('#page-preloader').fadeOut(700);
  setTimeout(function() {
    $('.slider_01 .slick-current .animation_block').addClass('animation');
  }, 0)
});

if (localStorage.name && localStorage.email && localStorage.phone)  {
  // запись сохраненных данных сразу в поля, если надо
  $('input[name="name"]').val(localStorage.name);
  $('input[type="email"]').val(localStorage.email);
  $('input[type="tel"]').val(localStorage.phone);
}

$(function() {
  $("[name=send]").click(function (e) {
   var btn = $(this);
   var form = $(this).closest('form');

   $(":input.error").removeClass('error');
   $(".allert").remove();

   var error;
   var ref = btn.closest('form').find('[required]');
   var loc = ymaps.geolocation.city+', '+ymaps.geolocation.region+', '+ymaps.geolocation.country;
   $('[name=city').val(loc);
   var msg = btn.closest('form').find('input, textarea, select');
   var short_msg = btn.closest('form').find('[name=project_name], [name=admin_email], [name=form_subject], [name=city], [name=page_url], [name=user_agent], [type="text"], [type="email"], [type="tel"]');
   var msg = btn.closest('form').find('input, textarea, select');
   var send_btn = btn.closest('form').find('[name=send]');
   var send_adress = btn.closest('form').find('[name=send_adress]').val();
   var send_options = btn.closest('form').find('[name=campaign_token]');;
   var formType = btn.closest('form').find('[name=form_type]').val();
   var redirect = btn.closest('form').find('[name=redirect]').val();
   var goal = btn.closest('form').find('[name=goal]').val();
   var alertImage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.1 286.1"><path d="M143 0C64 0 0 64 0 143c0 79 64 143 143 143 79 0 143-64 143-143C286.1 64 222 0 143 0zM143 259.2c-64.2 0-116.2-52-116.2-116.2S78.8 26.8 143 26.8s116.2 52 116.2 116.2S207.2 259.2 143 259.2zM143 62.7c-10.2 0-18 5.3-18 14v79.2c0 8.6 7.8 14 18 14 10 0 18-5.6 18-14V76.7C161 68.3 153 62.7 143 62.7zM143 187.7c-9.8 0-17.9 8-17.9 17.9 0 9.8 8 17.8 17.9 17.8s17.8-8 17.8-17.8C160.9 195.7 152.9 187.7 143 187.7z" fill="#E2574C"/></svg>';


   $(ref).each(function() {
    if ($(this).val() == '') {
      var errorfield = $(this);
      $(this).addClass('error').parent('.field').append('<div class="allert"><span>Заполните это поле</span>' + alertImage + '</div>');
      error = 1;
      $(":input.error:first").focus();
      return;
    } else {
      var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
      if ($(this).attr("type") == 'email') {
        if (!pattern.test($(this).val())) {
          $("[name=email]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите коректный e-mail</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
      var patterntel = /^()[- +()0-9]{9,18}/i;
      if ($(this).attr("type") == 'tel') {
        if (!patterntel.test($(this).val())) {
          $("[name=phone]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите номер телефона в формате +3809999999</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
    }
  });
   if (!(error == 1)) {
    $(send_btn).each(function() {
      $(this).attr('disabled', true);
    });
    // Отправка на почту
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: short_msg,
      success: function() {
        setTimeout(function() {
          $("[name=send]").removeAttr("disabled");
        }, 1000);
        $('div.md-show').removeClass('md-show');
          // Отправка в базу данных
          $.ajax({
           type: 'POST',
           url: 'db/registration.php',
           dataType: 'json',
           data: form.serialize(),
           success: function(response) {
             if (response.status == 'success') {
              $('form').trigger("reset");
              window.location.href = 'http://lp.yaburo.design//success';
            }
          }
        });
      },
      error: function(xhr, str) {
        console.log("Erorr")
      }
    });

  }
  return false;
})
});

 // Smooth scroll to anchor

 $('.scroll').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 1000);
  return false;
});

//  INPUT TEL MASK

jQuery(function($){
 $("input[type='tel']").mask("+38 (099) 999-9999");
});



// Scroll BAR

$(window).scroll(function() {
    // calculate the percentage the user has scrolled down the page
    var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

    $('.bar-long').css('width', scrollPercent +"%"  );

  });


//  UP BUTTON

$( document ).ready(function() {
  $('#scrollup img').mouseover( function(){
    $( this ).animate({opacity: 0.65},100);
  }).mouseout( function(){
    $( this ).animate({opacity: 1},100);
  });

  $(window).scroll(function(){
    if ( $(document).scrollTop() > 0 ) {
      $('#scrollup').fadeIn('slow');
      $('#mobile_menu_trigger').addClass('scrolled');
    } else {
      $('#scrollup').fadeOut('slow');
      $('#mobile_menu_trigger').removeClass('scrolled');
    }
  });

  $('#scrollup').click(function() {
    $('body,html').animate({scrollTop:0},1000);
  });
});

// PREVENT SCROLLING

$('.md-trigger').click(function() {
  $("body").addClass('unscroll');
});

$('.md-close').click(function() {
  $("body").removeClass('unscroll');
});

$('.md-overlay').click(function() {
  $("body").removeClass('unscroll');
});




$('.slider_01').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  autoplaySpeed: 5000,
  asNavFor: '.sec_01-slider_controll',
  fade: true,
  autoplay: true,
  swipe: false
});
$('.sec_01-slider_controll').slick({
  slidesToShow: 1,
  dots: false,
  arrows: true,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.slider_01',
  fade: true
});

$('.slider_04').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.sec_04-slider_controll',
  fade: true
});
$('.sec_04-slider_controll').slick({
  slidesToShow: 1,
  dots: false,
  arrows: true,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.slider_04',
  fade: true
});

$('.slider_06').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.sec_06-slider_controll',
  fade: true
});
$('.sec_06-slider_controll').slick({
  slidesToShow: 1,
  dots: false,
  arrows: true,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.slider_06',
  fade: true
});

$('.slider_09').slick({
  slidesToShow: 2,
  dots: true,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.sec_09-slider_controll',
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});
$('.sec_09-slider_controll').slick({
  slidesToShow: 1,
  dots: false,
  arrows: true,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.slider_09',
  fade: true
});

$('.mobile_slider_02').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.mobile_slider_02-slider_controll',
});

$('.mobile_slider_02-slider_controll').slick({
  slidesToShow: 1,
  dots: false,
  arrows: true,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.mobile_slider_02',
  fade: true
});


$('.mobile_slider_07').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.mobile_slider_07-slider_controll'
});
$('.mobile_slider_07-slider_controll').slick({
  slidesToShow: 1,
  dots: false,
  arrows: true,
  infinite: true,
  slidesToScroll: 1,
  asNavFor: '.mobile_slider_07',
  fade: true
});


$('.mobile.photos').slick({
  slidesToShow: 2,
  dots: false,
  arrows: true,
  infinite: false,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 430,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});


$('.portfolio_slider').slick({
  slidesToShow: 1,
  dots: false,
  arrows: true,
  infinite: true,
  slidesToScroll: 1,
  swipe: false,
  fade: true,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        arrows: false
      }
    }
  ]
});

//letters state change

$('.slider_img-1').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  fade: true,
  autoplay: true,
  autoplaySpeed: 4234,
  swipe: false,
  pauseOnHover: false
});

$('.slider_img-2').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  fade: true,
  autoplay: true,
  autoplaySpeed: 3943,
  swipe: false,
  pauseOnHover: false
});

$('.slider_img-3').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  fade: true,
  autoplay: true,
  autoplaySpeed: 3543,
  swipe: false,
  pauseOnHover: false
});


$('.slider_01').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  $(this).find('.animation_block').removeClass('animation');
  $(this).find('.slick-current .animation_block').addClass('animation');
});
$('.slider_04').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  $(this).find('.animation_block').removeClass('animation');
  $(this).find('.slick-current .animation_block').addClass('animation');
});
$('.slider_06').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  $(this).find('.animation_block').removeClass('animation');
  $(this).find('.slick-current .animation_block').addClass('animation');
});



// Auto height for dloated items 

function funcItemsHeight(el){

 var maxHeight = 0,
 widthPosition = 0,
 widthWindowPosition = 0,
 elSum = 0,
 i = 0,
 $el;

 elSum = $(".mycol-4").length;

 $(el).each(function() {

  $el = $(this);
  $($el).height('auto');
  widthPosition = $el.width();
  widthWindowPosition = $(window).width();
  var nItem = widthWindowPosition / widthPosition;
  nItem = nItem ^ 0;

  if (i%nItem == 0) {
   $(".active_row").height(maxHeight);
   $(".mycol-4").removeClass("active_row");
   maxHeight = $el.height();
  } else {
   if ($el.height() > maxHeight) { 
    maxHeight = $el.height();
   } 
  }

  $el.addClass("active_row");

  i += 1;
  if( i == elSum ) {
   $(".active_row").height(maxHeight);
   $(".mycol-4").removeClass("active_row");
  }

 });
}

$(document).ready(function(){
 funcItemsHeight('.mycol-4');
});


$(window).resize(function(){
 funcItemsHeight('.mycol-4');
});


//animate number
    var decimal_places = 1;
    var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 1;

// waypoints

$('#sec_02').waypoint(
    function() {
        if ($("#sec_02").hasClass("animated_block")) {
        }
        else{
            $("#sec_02").addClass("animated_block");
            $('#sec_02 .content_animation').addClass('fade-in-left');
            $('#sec_02 .item').addClass('fade-in-bottom');
            setTimeout(function() {
              $('#sec_02 .item_01 .title').addClass('animated');
            }, 800);
            setTimeout(function() {
              $('#sec_02 .item_02 .title').addClass('animated');
            }, 1200);
            setTimeout(function() {
              $('#sec_02 .item_03 .title').addClass('animated');
            }, 1600);

        }
    },
    {offset: "550px"}

);


$('#sec_03').waypoint(
    function() {
        if ($("#sec_03").hasClass("animated_block")) {
        }
        else{
            $("#sec_03").addClass("animated_block");
            $('#sec_03 .content_animation').addClass('fade-in-left');
            $('#sec_03 .animation_block').addClass('animation');
        }
    },
    {offset: "650px"}

);


$('#sec_04').waypoint(
    function() {
        if ($("#sec_04").hasClass("animated_block")) {
        }
        else{
            $("#sec_04").addClass("animated_block");
            $('#sec_04 .slick-current .animation_block').addClass('animation');
            $('#sec_04 .content_animation').addClass('fade-in-right');
            setTimeout(function() {
              $('#sec_04 .header_main').addClass('animated');
            }, 1600);
        }
    },
    {offset: "550px"}

);

$('#sec_05').waypoint(
    function() {
        if ($("#sec_05").hasClass("animated_block")) {
        }
        else{
            $("#sec_05").addClass("animated_block");
            $('#sec_05 .content_animation').addClass('fade-in-left');
            $('#sec_05 .item').addClass('fade-in-right');
            setTimeout(function() {
              $('#sec_05 .item_01 .title').addClass('animated');
            }, 1600);
            setTimeout(function() {
              $('#sec_05 .item_02 .title').addClass('animated');
            }, 2000);
            setTimeout(function() {
              $('#sec_05 .item_03 .title').addClass('animated');
            }, 2400);

        }
    },
    {offset: "550px"}

);



$('#sec_06').waypoint(
    function() {
        if ($("#sec_06").hasClass("number")) {
        }
        else{
            $("#sec_06").addClass("number");
            $('.1_animate_number').animateNumber(
            {
                number: 12 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text(floored_number);
                }
            },
            2000
            );
            $('.2_animate_number').animateNumber(
            {
                number: 58800 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text(floored_number);
                }
            },
            2000
            );
            $('.3_animate_number').animateNumber(
            {
                number: 136 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text(floored_number);
                }
            },
            2000
            );
            $('.4_animate_number').animateNumber(
            {
                number: 100 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text(floored_number + '%');
                }
            },
            2000
            );
            $('#sec_06 .slick-current .animation_block').addClass('animation');
        }
    },
    {offset: "400px"}

);


$('#sec_07').waypoint(
    function() {
        if ($("#sec_07").hasClass("animated_block")) {
        }
        else{
            $("#sec_07").addClass("animated_block");
            $('#sec_07 .content_animation_header ').addClass('fade-in-left');
            $('#sec_07 .item img').addClass('fade-in-bottom');
            setTimeout(function() {
              $('#sec_07 .item .content_animation').addClass('fade-in-left');
            }, 200);
            setTimeout(function() {
              $('#sec_07 .item .title').addClass('animated');
              $('#sec_07 .wrap').addClass('animated');
            }, 1600);

        }
    },
    {offset: "550px"}

);

$('#sec_08').waypoint(
    function() {
        if ($("#sec_08").hasClass("animated_block")) {
        }
        else{
            $("#sec_08").addClass("animated_block");
            $('#sec_08 .content_animation').addClass('fade-in-left');
            $('#sec_08 .field').addClass('fade-in-bottom');
            $('#sec_08 .btn_white').addClass('fade-in-bottom');
        }
    },
    {offset: "1300px"}

);


$('#sec_09').waypoint(
    function() {
        if ($("#sec_09").hasClass("animated_block")) {
        }
        else{
            $("#sec_09").addClass("animated_block");
            $('#sec_09 .content_animation').addClass('fade-in-left');
            $('#sec_09 .sec_09-slider_controll').addClass('fade-in-right');
            setTimeout(function() {
              $('#sec_09 .slider_09').addClass('puff-in-hor');
            }, 1600);
        }
    },
    {offset: "1300px"}

);


$('#sec_10').waypoint(
    function() {
        if ($("#sec_10").hasClass("animated_block")) {
        }
        else{
            $("#sec_10").addClass("animated_block");
            $('#sec_10 .content_animation').addClass('fade-in-left');
            $('#sec_10 .item').addClass('fade-in-right');
        }
    },
    {offset: "1300px"}

);



$('#sec_11').waypoint(
    function() {
        if ($("#sec_11").hasClass("animated_block")) {
        }
        else{
            $("#sec_11").addClass("animated_block, fade-in-top");
            // $('#sec_11 .content_animation').addClass('fade-in-top');
            $('#sec_11 .content_block').addClass('fade-in-bottom');
        }
    },
    {offset: "1500px"}

);

$('#sec_12').waypoint(
    function() {
        if ($("#sec_12").hasClass("animated_block")) {
        }
        else{
            $("#sec_12").addClass("animated_block");
            $('#sec_12 .content_animation').addClass('fade-in-left');
            $('#sec_12 .field').addClass('fade-in-bottom');
            $('#sec_12 .btn_white').addClass('fade-in-bottom');
        }
    },
    {offset: "1500px"}

);

// Menu

$('#menu_trigger').click(function(event) {
  $('#menu_modal').addClass('open');
  $("body").addClass('unscroll');
  setTimeout(function() {
    $('#close_menu_modal, .menu_list, #menu_modal .portfolio_trigger').addClass('visible');
    $('#menu_trigger').fadeOut();
  }, 900);
});


$('#close_menu_modal, #menu_modal li a').click(function(event) {
  $('#menu_modal').removeClass('open');
  $("body").removeClass('unscroll');
  $('#mobile_menu_trigger').addClass('visible');
  $('#close_menu_modal, .menu_list,  #menu_modal .portfolio_trigger').removeClass('visible');
  setTimeout(function() {
    $('#menu_trigger').fadeIn();
  }, 900);
});

$('#mobile_menu_trigger').click(function(event) {
  $('#menu_modal').addClass('open');
  $('#mobile_menu_trigger').removeClass('visible');
  $("body").addClass('unscroll');
  setTimeout(function() {
    $('#close_menu_modal, .menu_list, #menu_modal .portfolio_trigger').addClass('visible');
  }, 900);
});


// Portfolio

$('.portfolio_trigger').click(function(event) {
  $('#portfolio_modal').addClass('open');
  $("body").addClass('unscroll');
  setTimeout(function() {
    $('.portfolio_slider, #portfolio_modal .top, #close_portfolio_modal').addClass('visible');
  }, 900);
});


$('#close_portfolio_modal').click(function(event) {
  $('#portfolio_modal').removeClass('open');
  $("body").removeClass('unscroll');
  $('.portfolio_slider, #portfolio_modal .top, #close_portfolio_modal').removeClass('visible');
});


$(".slider_09 .slide").click(function(e){
    e.preventDefault();
    slideIndex = $(this).data('slick-index');
    $( '.portfolio_slider' ).slick('slickGoTo', parseInt(slideIndex) );

    $('#portfolio_modal').addClass('open');
    $("body").addClass('unscroll');
    setTimeout(function() {
      $('.portfolio_slider, #portfolio_modal .top, #close_portfolio_modal').addClass('visible');
    }, 900);
});


(function() {
  var i, resize;

  i = setInterval(function() {
    return $("#mobile_menu_trigger .wrapper").toggleClass("cross");
  }, 1500);

}).call(this);
