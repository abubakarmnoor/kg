

// Accordion stuff
map_initialized = false;
is_desktop = false;
$(document).ready(function() {
  if(isMobile() == false) { // for desktop only
    is_desktop = true;
    if (typeof(initialize_location_map) == "function") {
      initialize_location_map(); // google maps api function, call immediately for desktop view
    }
    repositionGallery();
    return; // if not a mobile screen don't add accordian js  
  }
  $('.accordion-heading').click(function() {
    $(this).toggleClass('expanded');
    $(this).next().toggle(500, function() {
        if($(this).css('display') == 'none') {
          //$(this).prev().toggleClass('expanded');
        } else {
        if ($('.accordion-content-location').length && $('.accordion-content-location').css('display') != 'none' && map_initialized != true) {
          initialize_location_map(); // google maps api function, needs to be called after the map is rendered for mobile view
          map_initialized = true;
        }
        }
    });
  });
  setTimeout(hideGallery, 2000); /// gallery needs to be rendered for js to set layout properties, but then should be hidden        
});

function scrollToAmenities() {
  if (isMobile() == false) {
    return;
  }
  $('html,body').animate({
    scrollTop: $('.bottom_section').offset().top - $('.fixed_header').height() + 1
  }, 500);
}

function repositionGallery() {
  if(isMobile()) {
    // remove any adjustments done for desktop
    $('#accordion-location-gallery').css('margin-top', 0);
    $('#accordion-location-gallery').css('margin-left', 0);
    $('#accordion-location-gallery .accordion-content').css('display', 'none');
    return;
  }
  $('#accordion-location-gallery .accordion-content').css('display', 'block');
  if ($('#accordion-location-gallery').length > 0) {
    // position gallery in location block
    map_offset = $('.location_map').offset();
    gallery_offset = $('#accordion-location-gallery').offset();
    margin_top = map_offset.top - gallery_offset.top;
    $('#accordion-location-gallery').css('margin-top', margin_top);
    margin_left = $('.location_map').width();
    $('#accordion-location-gallery').css('margin-left', margin_left);
  }
}

function hideGallery() {
  $('#accordion-location-gallery .accordion-content').css('display','none');
  $('#accordion-location-gallery .accordion-content').css('height','auto');
}

/***********************************************************************************************
 *
 *  Last update: 4 July 2016. Newsletter ajax submit form. Flexslider
 *
***********************************************************************************************/

$(window).load(function() {
  // The slider being synced must be initialized first
  $('#gallery_thumb_controls').flexslider({
    animation: "slide",
    controlNav: false,
    // animationLoop: true,
    pauseOnAction: false,
    slideshow: false,
    itemWidth: 125,
    itemMargin: 5,
    asNavFor: '#gallery_slider',
    prevText: "",
    nextText: "",
  });
 
  $('#gallery_slider').flexslider({
    animation: "fade",
    controlNav: false,
    directionNav: false,
    // animationLoop: true,
    slideshow: true,
    // sync: "#gallery_thumb_controls"
  });

  $('#gallery_slider2').flexslider({
    animation: "fade",
    controlNav: true,
    directionNav: true,
    // animationLoop: true,
    slideshow: false,
    // sync: "#gallery_thumb_controls"
  });
  $('#gallery_thumb_controls2').flexslider({
    animation: "slide",
    controlNav: false,
    // animationLoop: true,
    pauseOnAction: false,
    slideshow: false,
    itemWidth: 125,
    itemMargin: 5,
    asNavFor: '#gallery_slider2',
    prevText: "",
    nextText: "",
});

});

// CTA Slider
$(document).ready(function() {

  $('.showEnquiryForm').on('click', function(){
    showEnquiryForm();
  });

  $('.showContactForm').on('click', function(){
    showContactForm();
  });
  
  // Testimonials Slider
  $('#testimonials .testimonial_slide_container').flexslider({
      controlNav: false,
      directionNav: false,
      slideshowSpeed: 4000
  });

  // Banner Slider
  $('#banner .content').flexslider({
      controlNav: false,
      directionNav: false,
      slideshowSpeed: 4000
  });

  // Banner Slider
  $('#services_slider .slider' ).flexslider({
    // controlNav: false,
    directionNav: false,
    // controlsContainer: ".bottom_section .left",
    prevText: " ",
    nextText: " ",
    manualControls: ".slide_controls a",
    slideshowSpeed: 8000,
  });

});

/***********************************************************************************************
 *
 *             Close Homepage member/guest popup
 *
***********************************************************************************************/ 

$('.close_popup').on('click', function(){
  $('.member_check_popup').fadeOut();
  $('.popup_overlay').fadeOut();
});



if( $.browser.safari ){

    $('select#bookOnline').on('click', function(e){
        e.preventDefault();
        if (this.value == 0) 
        {
            showEnquiryForm();
        }
        else if(this.value.length > 0)
        {
            var urlgo2 = this.options[this.selectedIndex].value;
            var redirectWindow2 = window.open(urlgo2, '_blank');
              $.ajax({
                  type: 'POST',
                  url: '/echo/json/',
                  success: function (data) {
                      redirectWindow2.location;
                  }
              });
        }
    });
}else{

    $('select#bookOnline').on('change', function(e){
        e.preventDefault();
        if (this.value == 0) 
        {
            showEnquiryForm();
        }
        else
        {            
            var urlgo2 = this.options[this.selectedIndex].value;
            var redirectWindow2 = window.open(urlgo2, '_blank');
              $.ajax({
                  type: 'POST',
                  url: '/echo/json/',
                  success: function (data) {
                      redirectWindow2.location;
                  }
              });
        }
    });  
}


/***********************************************************************************************
 *
 *             Nav Toggle
 *
***********************************************************************************************/ 

$('.nav_toggle').on('click', function(){

  //BEGIN HIDE OTHERS TOGGLE
      $('#destination_mobile_wrapper').hide();
      $('#open_destination_mobile_wrapper .ulwrapper').hide();
    //END HIDE OTHERS TOGGLE

  /////////////////////////////
  $('.mobile_dropdown').show();
  $('.mobile_dropdown .content').hide();
  $('.mobile_dropdown .content').removeClass('active');
  ///////////////////////

  $('.main_nav.main_nav1').slideToggle();
});


$('.destination_mobile_close').click(function(){

    $(this).hide();
    $('#destination_mobile_wrapper').hide();
    $('#destination_mobile_closebtn').hide();
    $('#destination_mobile_outside').hide();

});

if($('body').hasClass('page-template-page-resort-php')){

$('#nav_booking').click(function(){

if($('#bookingDevice .formselect li.selected').length){
$('#submitButton').click();  
}else{
showEnquiryForm();
}        
});

}else{

$('#nav_booking').on('click', function(){

//BEGIN HIDE OTHERS TOGGLE
$('.main_nav.main_nav1').hide();
$('#open_destination_mobile_wrapper .ulwrapper').hide();
$('.mobile_dropdown').hide();
//END HIDE OTHERS TOGGLE    

$('#destination_mobile_wrapper').slideToggle(function(){

if($("#destination_mobile_wrapper").is(":hidden")){

$('#destination_mobile_outside').hide();
$('#destination_mobile_closebtn').hide();
}else{

$('#destination_mobile_outside').show();
$('#destination_mobile_closebtn').show();
}
});

$('#book_online_select').show();
$('.menu2').css('display','block');
$('select option:contains("Book Online")').text('Choose Resorts:');
});
}

$('.open_destination_mobile').on('click', function(){

    //BEGIN HIDE OTHERS TOGGLE
      $('#destination_mobile_wrapper').hide();
      $('.main_nav.main_nav1').hide();
      $('.mobile_dropdown').hide();
    //END HIDE OTHERS TOGGLE

    $('html,body').animate({scrollTop: ($(this).offset().top - 100)}, 800);     
    $('#open_destination_mobile_wrapper ul').html($('.mobile_dropdown .content ul').html());

    $('#open_destination_mobile_wrapper .ulwrapper').slideToggle();

});


$('#open_destination_mobile_wrapper .arrowdown').on('click', function(){    
    scr = $('#open_destination_mobile_wrapper .ulwrapper > ul').scrollTop();
    $('#open_destination_mobile_wrapper .ulwrapper > ul').animate({scrollTop: (scr+30)},200);
});



$('.nav_toggle_booking').on('click', function(){
  $('.main_nav.main_nav1').slideUp();
  $('.main_nav.booking_nav').slideToggle();
  scrollTo(0,0);
});
$('.nav_toggle_contact').on('click', function(){
  showContactForm();
});



$(window).resize(function() {
  if ($(window).width() > 1040) {
     $('.main_nav').show();
  }
});




/***********************************************************************************************
 *
 *             Location Page Anchor Scrolling
 *
***********************************************************************************************/ 
// $(document).ready(function($) {

//   $('#location_page_nav a').click(function(){
//       $('html, body').animate({
//           scrollTop: $( $.attr(this, 'href') ).offset().top-167
//       }, 500);
//       return false;
//   });

//   $('select').on('change', function () {
//     $('html,body').animate({
//         scrollTop: $(this.value).offset().top-167
//       }, 500);
//       return false;
//   });

// });





/***********************************************************************************************
 *
 *             Location Page Navigation Fixed
 *
***********************************************************************************************/
// $(document).ready(function($) {
//   var stickyTop = $('#location_page_nav').offset().top-105;

//   $(window).on( 'scroll', function(e){
//     e.preventDefault();

//       if ($(window).scrollTop() >= stickyTop) {
//           $('#location_page_nav').addClass('fixed_location_nav');
//       } else {
//           $('#location_page_nav').removeClass('fixed_location_nav');
//       }
//   });
// });


/***********************************************************************************************
 *
 *             Scroll To Top Button
 *
***********************************************************************************************/




// Fixes header to top when it reaches the top of the browser
// var elementPosition = $('#location_page_nav').offset();

// $(window).scroll(function(){
//   if($(window).scrollTop() > elementPosition.top){
//     $('#location_page_nav').addClass("stick");
//     $('header').slideUp();
//   } else {
//     $('#location_page_nav').removeClass("stick");
//     $('header').slideDown();
//   }
// });





/***********************************************************************************************
 *
 *             Twitter
 *
***********************************************************************************************/

$(function() {
  $('#tweets').tweet({
    modpath: '/twitter/',
    avatar_size: 32,
    username: 'KarmaResorts',
    template: "{text}" ,
    count: 1
  });
});





/***********************************************************************************************
 *
 *             Popup
 *
***********************************************************************************************/

// $('.app_download_btn').on('click', function(e){
//   e.preventDefault();
//   $('#karma').prepend('<div class="popup">Our new Karma Group App is coming soon!</div>');

//   var height = $('img.ireland').outerHeight();
//   var width = $('img.ireland').outerWidth();

//   var halfHeight = height / 2;
//   var halfWidth = width / 2;

//   $('.popup').css({
//       "margin-left": -halfWidth,
//       "margin-top": -halfHeight,
//   });
// });





/***********************************************************************************************
 *
 *             Instagram Flexslider (Load in after page has loaded due to grabbing imgs from insta)
 *
***********************************************************************************************/

$(window).load(function() {

    $('.insta_slider').flexslider({
    animation: "slide",
    controlNav: false,
    directionNav: false,
    animationLoop: true,
    itemWidth: 306,
    itemMargin: 0,
    move: 1,
    slideshowSpeed: 3000
  });

});




/***********************************************************************************************
 *
 *             Banner Image
 *
***********************************************************************************************/ 



// slides.push({src: themePath + '/imgs/banner-img-2.jpg'});

// console.log(slides);




/***********************************************************************************************
 *
 *             Sticky Header
 *
***********************************************************************************************/ 

$(window).scroll(function(){

  var stickyOffset = $('header').offset().top;
  var sticky = $('header'),
  scroll = $(window).scrollTop();

  if (scroll > 0) sticky.addClass('fixed_header');
  else sticky.removeClass('fixed_header');

});





/***********************************************************************************************
 *
 *             Location Navbar Links Smooth ScrollTo and smooth Back Top
 *
***********************************************************************************************/ 

$(document).ready(function($) {

  $(".back_top").click(function(e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });


  $("#location_page_nav a").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top -167
      }, 500);
      return false;
  });

  $('select#location_nav_mobile').on('change', function () {
    $('html,body').animate({
        scrollTop: $(this.value).offset().top -133
      }, 500);
      return false;
  });

});




/***********************************************************************************************
 *
 *             Masonry
 *
***********************************************************************************************/ 


$('#blocks_section').masonry({
  // options
  itemSelector: '.grid_block',
  columnWidth: '.grid-sizer',
  percentPosition: true
});


$('#searchResults').masonry({
  // options
  itemSelector: '.item_container',
  columnWidth: '.grid-sizer',
  percentPosition: true
});




/***********************************************************************************************
 *
 *             Show contact form function
 *
***********************************************************************************************/ 

function showContactForm()
{ 
  $(".form_title").empty();
  $(".form_title").append('Contact Us');
  $(".wpcf7").show(); 
  $('input:text[name=firstName]').show();
  $('input:text[name=surname]').show();
  $('input:text[name=email]').show();
  $('input:text[name=tel]').show();
  $('input:text[name=enquiry]').show();
  $('input:text[name=subject]').show();
  $('input[type="checkbox"]:nth-child(9)').show();
  $('input[name=message], textarea').show();
  $("label[for='monthlyNewsletter']").show();
  $("select[name='enquiry']").show();
  $("a.submit_btn.action_link.button_outline.gold").show();
  $('.contact_form_container').fadeIn();
  $("html, body").animate({ scrollTop: 0 }, "slow");
}

/***********************************************************************************************
 *
 *   Pop Up for Karma Kandara & Reef and Jimbaran
 *
***********************************************************************************************/ 

function showContactFormPopUp()
{ 
  $(".wpcf7").hide();
  $('input:text[name=firstName]').hide();
  $('input:text[name=surname]').hide();
  $('input:text[name=email]').hide();
  $('input:text[name=tel]').hide();
  $('input:text[name=enquiry]').hide();
  $('input:text[name=subject]').hide();
  $('input[type="checkbox"]:nth-child(9)').hide();
  $('input[name=message], textarea').hide();
  $("label[for='monthlyNewsletter']").hide();
  $("select[name='enquiry']").hide();
  $("a.submit_btn.action_link.button_outline.gold").hide();
  $('.contact_form_container').fadeIn();
  $("html, body").animate({ scrollTop: 0 }, "slow");
}


/***********************************************************************************************
 *
 *             Show Enquiry form function
 *
***********************************************************************************************/ 

function showEnquiryForm()
{ 
  $(".form_title").empty();
  $(".form_title").append('Booking Request'); 
  $('input:text[name=firstName]').show();
  $('input:text[name=surname]').show();
  $('input:text[name=email]').show();
  $('input:text[name=tel]').show();
  $('input:text[name=enquiry]').show();
  $('input:text[name=subject]').show();
  $('input[type="checkbox"]:nth-child(9)').show();
  $('input[name=message], textarea').show();
  $("label[for='monthlyNewsletter']").show();
  $("select[name='enquiry']").show();
  $("a.submit_btn.action_link.button_outline.gold").show();
  $('.enquiry_form_container').fadeIn();
  
    //resort_key = new Array();
      //resort_key = $.trim($("#bookOnline option:selected").text()).split(' - ');
        //console.log(resort_key[0]);
          //$('[name="resortChoice"]').val(resort_key[0]);
  
  $("html, body").animate({ scrollTop: 0 }, "slow");
}

/***********************************************************************************************
 *
 *             Show SPAEnquiry form function
 *
***********************************************************************************************/ 

function showSpaEnquiryForm()
{ 
  $(".form_title").empty();
  $(".form_title").append('SPA Booking Request'); 
  $('input:text[name=firstName]').show();
  $('input:text[name=surname]').show();
  $('input:text[name=email]').show();
  $('input:text[name=tel]').show();
  $('input:text[name=enquiry]').show();
  $('input:text[name=subject]').show();
  $('input[type="checkbox"]:nth-child(9)').show();
  $('input[name=message], textarea').show();
  $("label[for='monthlyNewsletter']").show();
  $("select[name='enquiry']").show();
  $("a.submit_btn.action_link.button_outline.gold").show();
  $('.enquiryspa_form_container').fadeIn();
  $("html, body").animate({ scrollTop: 0 }, "slow");
}

    function showSpaEnquiryForm_from_kspa_page(key)
    { 
    
	console.log('key:'+ key);
    $('[name="resortChoice"]').val(key);
    $(".form_title").empty();
    $(".form_title").append('SPA Booking Request'); 
    $('input:text[name=firstName]').show();
    $('input:text[name=surname]').show();
    $('input:text[name=email]').show();
    $('input:text[name=tel]').show();
    $('input:text[name=enquiry]').show();
    $('input:text[name=subject]').show();
    $('input[type="checkbox"]:nth-child(9)').show();
    $('input[name=message], textarea').show();
    $("label[for='monthlyNewsletter']").show();
    $("select[name='enquiry']").show();
    $("a.submit_btn.action_link.button_outline.gold").show();
    $('.enquiryspa_form_container').fadeIn();
    $("html, body").animate({ scrollTop: 0 }, "slow");
    }

/***********************************************************************************************
 *
 *             Show SPA form function
 *
***********************************************************************************************/ 

function showSpaForm()
{
  $('.spa_form_container').fadeIn();
  $("html, body").animate({ scrollTop: 0 }, "slow");
}



/***********************************************************************************************
 *
 *             Show Ba Promo form function
 *
***********************************************************************************************/ 

function showBaPromoForm()
{
  $('.ba_promo_form').fadeIn();
  $("html, body").animate({ scrollTop: 0 }, "slow");
}



/***********************************************************************************************
 *
 *             Date Picker
 *
***********************************************************************************************/ 

$(function() {
  $('.datepicker').datepicker({
    minDate: 0,
    dateFormat: 'yy/mm/dd',
  });
});

// $(document).ready(function() {
//   $('.datepicker').pickadate({
//     format: 'yyyy , mmmm, d',
//     min: true
//   });
// });



/***********************************************************************************************
 *
 *             Po.st Follow Script
 *
***********************************************************************************************/ 

// (function () {
// var s = document.createElement('script');
// s.type = 'text/javascript';
// s.async = true;
// s.src = ('https:' == document.location.protocol ? 'https://s' : 'http://i')
// + '.po.st/static/v3/follow-widget/post-follow.js#publisherKey=5tvpch4ee76oecdi3bp0';                  
// var x = document.getElementsByTagName('script')[0];
// x.parentNode.insertBefore(s, x);
// })();



/***********************************************************************************************
 *
 *             Po.st Load Script and Configuration
 *
***********************************************************************************************/ 

// var pwidget_config = { trackAddressBar: true, defaults: { afterShare: true, sharePopups: true} };                    

// (function () {
// var s = document.createElement('script');
// s.type = 'text/javascript';
// s.async = true; 
// s.src = ('https:' == document.location.protocol ? 'https://s' : 'http://i')
// + '.po.st/share/script/post-widget.js#publisherKey=5tvpch4ee76oecdi3bp0&lc=auto';
// var x = document.getElementsByTagName('script')[0];
// x.parentNode.insertBefore(s, x);
// })();


/***********************************************************************************************
 *
 *             Hash enquiry form
 *
***********************************************************************************************/ 
$(document).ready(function(){
  var hash = window.location.hash.substr(1).split("#");
  var enquiry = false;
  $.each(hash, function(index, value){
    if(value == 'enquiry'){
      // alert('enquiry');
      showEnquiryForm();
      return false;
    }
  });
});

/***********************************************************************************************
 *
 *             New Footer Newsletter form
 *
***********************************************************************************************/ 

$(document).ready(function(){ 

// $('#newsletter_signup').validate({ 
//     errorElement: 'div',
//         rules: {
//             "field-1456130004": {
//                 required: true,
//                 email: true
//             },
//             "field-1427865019-1": {
//                 required: true,
//                 minlength: 2
//             },
//             "field-1427865019-2": {
//                 required: true,
//                 minlength: 2
//             }
//         }
        
// });

var form=$("#newsletter_signup");
$("#newsletter_signup_submit").click(function(e){

$('#newsletter_signup').validate({ 
    errorElement: 'div',
        rules: {
            "field-1456130004": {
                required: true,
                email: true
            },
            "field-1427865019-1": {
                required: true,
                minlength: 2
            },
            "field-1427865019-2": {
                required: true,
                minlength: 2
            }
        }
        
}).form();

if($('#newsletter_signup').valid()) {

$('#newsletter_signup_submit').prop('disabled', true); 
$(".confirmprocess").css("display", "block");

$.ajax({
        type:"POST",
        url:form.attr("action"), 
        data:form.serialize(),
        success: function(response){
        if($.trim(response) === 'ok'){
            $('#newsletter_signup_submit').prop('disabled', false);
            $('.text-center').text('Thank you'); 
            $('.text-inworking').text('for signing up to receive Karma\'s e-Newsletter.');
            vex.defaultOptions.className = 'vex-theme-wireframe';
            vex.dialog.alert('<h3>Thank you</h3><p>for signing up to receive Karma\'s e-Newsletter..</p>');
        }  else {
            $('#newsletter_signup_submit').prop('disabled', false);
            $('.text-center').text('Sorry...');
            $('.text-inworking').text('Your email is already registered.');
        }
        }
    });

e.preventDefault();
return false;
       
} else {
       //do some error handling
}



});

});



