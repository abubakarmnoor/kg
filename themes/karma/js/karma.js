map_initialized = !1;
is_desktop = !1;
$(document).ready(function() {
    if (isMobile() == !1) {
        is_desktop = !0;
        if (typeof(initialize_location_map) == "function") {
            initialize_location_map()
        }
        repositionGallery();
        return
    }
    $('.accordion-heading').click(function() {
        $(this).toggleClass('expanded');
        $(this).next().toggle(500, function() {
            if ($(this).css('display') == 'none') {} else {
                if ($('.accordion-content-location').length && $('.accordion-content-location').css('display') != 'none' && map_initialized != !0) {
                    initialize_location_map();
                    map_initialized = !0
                }
            }
        })
    });
    setTimeout(hideGallery, 2000)
});

function scrollToAmenities() {
    if (isMobile() == !1) {
        return
    }
    $('html,body').animate({
        scrollTop: $('.bottom_section').offset().top - $('.fixed_header').height() + 1
    }, 500)
}

function repositionGallery() {
    if (isMobile()) {
        $('#accordion-location-gallery').css('margin-top', 0);
        $('#accordion-location-gallery').css('margin-left', 0);
        $('#accordion-location-gallery .accordion-content').css('display', 'none');
        return
    }
    $('#accordion-location-gallery .accordion-content').css('display', 'block');
    if ($('#accordion-location-gallery').length > 0) {
        map_offset = $('.location_map').offset();
        gallery_offset = $('#accordion-location-gallery').offset();
        margin_top = map_offset.top - gallery_offset.top;
        $('#accordion-location-gallery').css('margin-top', margin_top);
        margin_left = $('.location_map').width();
        $('#accordion-location-gallery').css('margin-left', margin_left)
    }
}

function hideGallery() {
    $('#accordion-location-gallery .accordion-content').css('display', 'none');
    $('#accordion-location-gallery .accordion-content').css('height', 'auto')
}
$(window).load(function() {
    $('#gallery_thumb_controls').flexslider({
        animation: "slide",
        controlNav: !1,
        pauseOnAction: !1,
        slideshow: !1,
        itemWidth: 125,
        itemMargin: 5,
        asNavFor: '#gallery_slider',
        prevText: "",
        nextText: "",
    });
    $('#gallery_slider').flexslider({
        animation: "fade",
        controlNav: !1,
        directionNav: !1,
        slideshow: !0,
    });
    $('#gallery_slider2').flexslider({
        animation: "fade",
        controlNav: !0,
        directionNav: !0,
        slideshow: !1,
    });
    $('#gallery_thumb_controls2').flexslider({
        animation: "slide",
        controlNav: !1,
        pauseOnAction: !1,
        slideshow: !1,
        itemWidth: 125,
        itemMargin: 5,
        asNavFor: '#gallery_slider2',
        prevText: "",
        nextText: "",
    })
});
$(document).ready(function() {
    $('.showEnquiryForm').on('click', function() {
        showEnquiryForm()
    });
    $('.showContactForm').on('click', function() {
        showContactForm()
    });
    $('#testimonials .testimonial_slide_container').flexslider({
        controlNav: !1,
        directionNav: !1,
        slideshowSpeed: 4000
    });
    $('#banner .content').flexslider({
        controlNav: !1,
        directionNav: !1,
        slideshowSpeed: 4000
    });
    $('#services_slider .slider').flexslider({
        directionNav: !1,
        prevText: " ",
        nextText: " ",
        manualControls: ".slide_controls a",
        slideshowSpeed: 8000,
    })
});
$('.close_popup').on('click', function() {
    $('.member_check_popup').fadeOut();
    $('.popup_overlay').fadeOut()
});
if ($.browser.safari) {
    $('select#bookOnline').on('click', function(e) {
        e.preventDefault();
        if (this.selectedIndex !== 0) {
            if (this.value.indexOf("http") != -1) {
                if (open) {
                    window.open($(this).val(), '_blank')
                }
                console.log($(this).val());
                $(this).data("isopen", !open);
                $('select#bookOnline').val('')
            } else {
                var resortchoice = $('select#bookOnline').val();
                showEnquiryForm();
                $("#resort_choice").val(resortchoice);
                $('select#bookOnline').val('')
            }
        }
    })
} else {
    $('select#bookOnline').on('click', function(e) {
        e.preventDefault();
        if (this.selectedIndex !== 0) {
            if (this.value.indexOf("http") != -1) {
                if (open) {
                    if (/MSIE 10/i.test(navigator.userAgent)) {
                        window.location.href = $(this).val()
                    }
                    if (/MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent)) {
                        window.location.href = $(this).val()
                    }
                    if (/Edge\/\d./i.test(navigator.userAgent)) {
                        window.location.href = $(this).val()
                    } else {
                        window.open($(this).val(), '_blank')
                    }
                }
                console.log($(this).val());
                $(this).data("isopen", !open);
                $('select#bookOnline').val('')
            } else {
                var resortchoice = $('select#bookOnline').val();
                showEnquiryForm();
                $("#resort_choice").val(resortchoice);
                $('select#bookOnline').val('')
            }
        }
    })
}
$('.nav_toggle').on('click', function() {
    $('#destination_mobile_wrapper').hide();
    $('#open_destination_mobile_wrapper .ulwrapper').hide();
    $('.mobile_dropdown').show();
    $('.mobile_dropdown .content').hide();
    $('.mobile_dropdown .content').removeClass('active');
    $('.main_nav.main_nav1').slideToggle()
});
$('.destination_mobile_close').click(function() {
    $(this).hide();
    $('#destination_mobile_wrapper').hide();
    $('#destination_mobile_closebtn').hide();
    $('#destination_mobile_outside').hide()
});
if ($('body').hasClass('page-template-page-resort-php')) {
    $('#nav_booking').click(function() {
        if ($('#bookingDevice .formselect li.selected').length) {
            $('#submitButton').click()
        } else {
            showEnquiryForm()
        }
    })
} else {
    $('#nav_booking').on('click', function() {
        $('.main_nav.main_nav1').hide();
        $('#open_destination_mobile_wrapper .ulwrapper').hide();
        $('.mobile_dropdown').hide();
        $('#destination_mobile_wrapper').slideToggle(function() {
            if ($("#destination_mobile_wrapper").is(":hidden")) {
                $('#destination_mobile_outside').hide();
                $('#destination_mobile_closebtn').hide()
            } else {
                $('#destination_mobile_outside').show();
                $('#destination_mobile_closebtn').show()
            }
        });
        $('#book_online_select').show();
        $('.menu2').css('display', 'block');
        $('select option:contains("Book Online")').text('Choose Resorts:')
    })
}
$('.open_destination_mobile').on('click', function() {
    $('#destination_mobile_wrapper').hide();
    $('.main_nav.main_nav1').hide();
    $('.mobile_dropdown').hide();
    $('html,body').animate({
        scrollTop: ($(this).offset().top - 100)
    }, 800);
    $('#open_destination_mobile_wrapper ul').html($('.mobile_dropdown .content ul').html());
    $('#open_destination_mobile_wrapper .ulwrapper').slideToggle()
});
$('#open_destination_mobile_wrapper .arrowdown').on('click', function() {
    scr = $('#open_destination_mobile_wrapper .ulwrapper > ul').scrollTop();
    $('#open_destination_mobile_wrapper .ulwrapper > ul').animate({
        scrollTop: (scr + 30)
    }, 200)
});
$('.nav_toggle_booking').on('click', function() {
    $('.main_nav.main_nav1').slideUp();
    $('.main_nav.booking_nav').slideToggle();
    scrollTo(0, 0)
});
$('.nav_toggle_contact').on('click', function() {
    showContactForm()
});
$(window).resize(function() {
    if ($(window).width() > 1040) {
        $('.main_nav').show()
    }
});
$(function() {
    $('#tweets').tweet({
        modpath: '/twitter/',
        avatar_size: 32,
        username: 'KarmaResorts',
        template: "{text}",
        count: 1
    })
});
$(window).load(function() {
    $('.insta_slider').flexslider({
        animation: "slide",
        controlNav: !1,
        directionNav: !1,
        animationLoop: !0,
        itemWidth: 306,
        itemMargin: 0,
        move: 1,
        slideshowSpeed: 3000
    })
});
$(window).scroll(function() {
    var stickyOffset = $('header').offset().top;
    var sticky = $('header'),
        scroll = $(window).scrollTop();
    if (scroll > 0) sticky.addClass('fixed_header');
    else sticky.removeClass('fixed_header')
});
$(document).ready(function($) {
    $(".back_top").click(function(e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return !1
    });
    $("#location_page_nav a").click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 167
        }, 500);
        return !1
    });
    $('select#location_nav_mobile').on('change', function() {
        $('html,body').animate({
            scrollTop: $(this.value).offset().top - 133
        }, 500);
        return !1
    })
});
$('#blocks_section').masonry({
    itemSelector: '.grid_block',
    columnWidth: '.grid-sizer',
    percentPosition: !0
});
$('#searchResults').masonry({
    itemSelector: '.item_container',
    columnWidth: '.grid-sizer',
    percentPosition: !0
});

function showContactForm() {
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
    $("html, body").animate({
        scrollTop: 0
    }, "slow")
}

function showContactFormPopUp() {
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
    $("html, body").animate({
        scrollTop: 0
    }, "slow")
}

function showEnquiryForm(resortId) {
    var resortID = (typeof resortId !== 'undefined') ? resortId : "";
    $(".form_title").empty();
    $(".form_title").append('Booking Request');
    $('input:text[name=firstName]').show();
    $('input:text[name=surname]').show();
    $('input:text[name=email]').show();
    $('input:text[name=tel]').show();
    $('input:text[name=enquiry]').show();
    $('input:text[name=subject]').show();
    $('input[type="checkbox"]:nth-child(9)').show();
    $("label[for='monthlyNewsletter']").show();
    $("select[name='enquiry']").show();
    $("a.submit_btn.action_link.button_outline.gold").show();
    if (!resortId) {
        resortID = karma_theme.resortID
    }
    $("#resort_choice").val(resortID);
    $("select.apply_resort_choice").val(resortID);
    var is_timeshare = karma_theme.timeshare_resort_IDs.indexOf(resortID + "");
    if (is_timeshare != -1) {
        $(".form_title").text('Contact Details');
        $('.enquiry_form_container').removeClass('show-non-timeshare');
        $('.enquiry_form_container').addClass('show-timeshare')
    } else {
        $('.enquiry_form_container').removeClass('show-timeshare');
        $('.enquiry_form_container').addClass('show-non-timeshare')
    }
    $('.enquiry_form_container').fadeIn();
    $("html, body").animate({
        scrollTop: 0
    }, "slow")
}

function showSpaEnquiryForm() {
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
    $("html, body").animate({
        scrollTop: 0
    }, "slow")
}

function showSpaAndWellbeingEnquiryForm(options) {
    var resortName = "";
    var retreatsName = "";
    var tag = "null";
    if(options.resortName !== undefined){
        resortName = options.resortName;
    }
    if(options.retreatsName !== undefined){
        retreatsName = options.retreatsName;
    }
    if(options.tag !== undefined && options.tag !== ""){
        tag = options.tag;
    }            
    $.ajax({
        type: "GET",
        url: "https://karmagroup.com/api/query-retreats.php?tag=" + tag,
        success: function(result){
            var retreats = result.retreats;
            if(retreats.length === 0){
                $("#retreat-selector").html('<option value="" selected disabled hidden>No available retreats right now</option>');
                return false;
            }                
            var html = '<option value="" selected disabled hidden>Choose your retreats</option>';
            for(var i = 0; i < retreats.length; i++){
                var isSelected = (retreats[i] === retreatsName) ? true : false;
                var options = '<option value="' + retreats[i] + '" '+ (isSelected ? "selected" : "") +'>' + retreats[i] + '</option>'
                html += options;
            }                
            $("#retreat-selector").html(html);
        }
    }) 
    $("#spa_and_wellbeing_enquiry .error_message").hide();
    $("#spa_and_wellbeing_enquiry #loading-spa").hide();
    $("#spa_and_wellbeing_enquiry .success_message").hide();
    $("#spawellbeingformkg").show();      
    $('#spa_and_wellbeing_enquiry #spachoice').val(resortName);
    $('#spa_and_wellbeing_enquiry input:text[name=firstName]').val("");
    $('#spa_and_wellbeing_enquiry input:text[name=surname]').val("");
    $('#spa_and_wellbeing_enquiry input:text[name=email]').val("");    
    $('#spa_and_wellbeing_enquiry #countryspa').val("");
    $('#spa_and_wellbeing_enquiry #adult_count').val("");
    $('#spa_and_wellbeing_enquiry #arrival-spa-wellbeing').val("");
    $('#spa_and_wellbeing_enquiry #arrivalTime23').val("");    
    $('#spa_and_wellbeing_enquiry input[name=treatmentType]').val("");        
    $('#spa_and_wellbeing_enquiry #retreat-selector').val(retreatsName);
    $("a.submit_btn.action_link.button_outline.gold").val("");
    $('.enquiryspa_form_container#spa_and_wellbeing_enquiry').fadeIn();
    $("html, body").animate({
        scrollTop: 0
    }, "slow")
}

function showSpaEnquiryForm_from_kspa_page(key, pCode) {
    if (pCode == undefined) {
        pCode = ""
    }
    console.log('key:' + key);
    $('[name="resortChoice"]').val(key);
    if ($("#promoCodeskg").length == 1) {
        $("#promoCodeskg").val(pCode)
    }
    $('input:text[name=firstName]').show();
    $('input:text[name=surname]').show();
    $('input:text[name=email]').show();
    $('input:text[name=tel]').show();
    $('input:text[name=enquiry]').show();
    $('input:text[ncame=subject]').show();
    $('input[type="checkbox"]:nth-child(9)').show();
    $('input[name=message], textarea').show();
    $("label[for='monthlyNewsletter']").show();
    $("select[name='enquiry']").show();
    $("a.submit_btn.action_link.button_outline.gold").show();
    $('.enquiryspa_form_container').fadeIn();
    $("html, body").animate({
        scrollTop: 0
    }, "slow")
}

function showSpaForm() {
    $('.spa_form_container').fadeIn();
    $("html, body").animate({
        scrollTop: 0
    }, "slow")
}

function showBaPromoForm() {
    $('.ba_promo_form').fadeIn();
    $("html, body").animate({
        scrollTop: 0
    }, "slow")
}
$(function() {
    $('.datepicker').datepicker({
        minDate: 0,
        dateFormat: 'dd/mm/yy'
    })
});
$(document).ready(function() {
    var hash = window.location.hash.substr(1).split("#");
    var enquiry = !1;
    $.each(hash, function(index, value) {
        if (value == 'enquiry') {
            showEnquiryForm();
            return !1
        }
    })
});
$(document).ready(function() {
    var resortID = karma_theme.resortID;
    var is_timeshare = karma_theme.timeshare_resort_IDs.indexOf(resortID + "");
    if (is_timeshare != -1) {
        $('#leftstickymenu').remove()
    }
    var form = $("#newsletter_signup");
    $("#newsletter_signup_submit").click(function(e) {
        $('#newsletter_signup').validate({
            errorElement: 'div',
            rules: {
                "field-1456130004": {
                    required: !0,
                    email: !0
                },
                "field-1427865019-1": {
                    required: !0,
                    minlength: 2
                },
                "field-1427865019-2": {
                    required: !0,
                    minlength: 2
                }
            }
        }).form();
        if (userCheck == undefined) {
            $('#errornewsletter').show();
            return !1
        }
        if ($('#newsletter_signup').valid() && userCheck != undefined) {
            $('#errornewsletter').hide();
            $('#newsletter_signup_submit').prop('disabled', !0);
            $(".confirmprocess").css("display", "block");
            $.ajax({
                type: "POST",
                url: form.attr("action"),
                data: form.serialize(),
                success: function(response) {
                    if ($.trim(response) === 'ok') {
                        var first_name = "";
                        var last_name = "";
                        var email = $('#emailnewsletter').val();
                        var country = "";
                        var datemoment1 = moment().format('LL');
                        country = country.toUpperCase();
                        var databaru = {
                            'firstname': first_name,
                            'lastname': last_name,
                            'email': email,
                            'date_submit': datemoment1
                        }
                        console.log(databaru);
                        $.ajax({
                            type: "POST",
                            url: "https://karmamobileapps.appspot.com/newsletterthank",
                            data: databaru,
                            dataType: "json",
                        }).done(function(data) {
                            $.ajax({
                                type: "POST",
                                url: "https://karmawarehouse.izenoondemand.com/apicollections/whnewsletter.php",
                                contentType: "application/json",
                                data: JSON.stringify({
                                    FirstName: first_name,
                                    Surname: last_name,
                                    Email: email,
                                    Country: country,
                                    lead_source: "Web Site"
                                }),
                                success: function(data) {
                                    grecaptcha.reset(widgetId1);
                                    $('#emailnewsletter').val("");
                                    $('#newsletter_signup_submit').prop('disabled', !1);
                                    $(".confirmprocess").css("display", "none");
                                    vex.defaultOptions.className = 'vex-theme-wireframe';
                                    vex.dialog.alert('<h3 style="font-size:24px;">Thank You</h3><p style="padding-top:10px;">Thank you for signing up to receive Karma\'s e-Newsletter.</p>')
                                }
                            })
                        }).fail(function() {
                            console.log('Cannot connect to the API.')
                        })
                    } else {
                        $('#newsletter_signup_submit').prop('disabled', !1);
                        $('.text-center').text('Sorry...');
                        $('.text-inworking').text('Your email is already registered.')
                    }
                }
            });
            e.preventDefault();
            return !1
        } else {}
    })
})
