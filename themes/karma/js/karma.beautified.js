function scrollToAmenities() {
    0 != isMobile() && $("html,body").animate({
        scrollTop: $(".bottom_section").offset().top - $(".fixed_header").height() + 1
    }, 500);
}

function repositionGallery() {
    return isMobile() ? ($("#accordion-location-gallery").css("margin-top", 0), $("#accordion-location-gallery").css("margin-left", 0), 
    void $("#accordion-location-gallery .accordion-content").css("display", "none")) : ($("#accordion-location-gallery .accordion-content").css("display", "block"), 
    void ($("#accordion-location-gallery").length > 0 && (map_offset = $(".location_map").offset(), 
    gallery_offset = $("#accordion-location-gallery").offset(), margin_top = map_offset.top - gallery_offset.top, 
    $("#accordion-location-gallery").css("margin-top", margin_top), margin_left = $(".location_map").width(), 
    $("#accordion-location-gallery").css("margin-left", margin_left))));
}

function hideGallery() {
    $("#accordion-location-gallery .accordion-content").css("display", "none"), $("#accordion-location-gallery .accordion-content").css("height", "auto");
}

function showContactForm() {
    $(".form_title").empty(), $(".form_title").append("Contact Us"), $(".wpcf7").show(), 
    $("input:text[name=firstName]").show(), $("input:text[name=surname]").show(), $("input:text[name=email]").show(), 
    $("input:text[name=tel]").show(), $("input:text[name=enquiry]").show(), $("input:text[name=subject]").show(), 
    $('input[type="checkbox"]:nth-child(9)').show(), $("input[name=message], textarea").show(), 
    $("label[for='monthlyNewsletter']").show(), $("select[name='enquiry']").show(), 
    $("a.submit_btn.action_link.button_outline.gold").show(), $(".contact_form_container").fadeIn(), 
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
}

function showContactFormPopUp() {
    $(".wpcf7").hide(), $("input:text[name=firstName]").hide(), $("input:text[name=surname]").hide(), 
    $("input:text[name=email]").hide(), $("input:text[name=tel]").hide(), $("input:text[name=enquiry]").hide(), 
    $("input:text[name=subject]").hide(), $('input[type="checkbox"]:nth-child(9)').hide(), 
    $("input[name=message], textarea").hide(), $("label[for='monthlyNewsletter']").hide(), 
    $("select[name='enquiry']").hide(), $("a.submit_btn.action_link.button_outline.gold").hide(), 
    $(".contact_form_container").fadeIn(), $("html, body").animate({
        scrollTop: 0
    }, "slow");
}

function showEnquiryForm() {
    $(".form_title").empty(), $(".form_title").append("Booking Request"), $("input:text[name=firstName]").show(), 
    $("input:text[name=surname]").show(), $("input:text[name=email]").show(), $("input:text[name=tel]").show(), 
    $("input:text[name=enquiry]").show(), $("input:text[name=subject]").show(), $('input[type="checkbox"]:nth-child(9)').show(), 
    $("input[name=message], textarea").show(), $("label[for='monthlyNewsletter']").show(), 
    $("select[name='enquiry']").show(), $("a.submit_btn.action_link.button_outline.gold").show(), 
    $(".enquiry_form_container").fadeIn(), $("html, body").animate({
        scrollTop: 0
    }, "slow");
}

function showSpaEnquiryForm() {
    $(".form_title").empty(), $(".form_title").append("SPA Booking Request"), $("input:text[name=firstName]").show(), 
    $("input:text[name=surname]").show(), $("input:text[name=email]").show(), $("input:text[name=tel]").show(), 
    $("input:text[name=enquiry]").show(), $("input:text[name=subject]").show(), $('input[type="checkbox"]:nth-child(9)').show(), 
    $("input[name=message], textarea").show(), $("label[for='monthlyNewsletter']").show(), 
    $("select[name='enquiry']").show(), $("a.submit_btn.action_link.button_outline.gold").show(), 
    $(".enquiryspa_form_container").fadeIn(), $("html, body").animate({
        scrollTop: 0
    }, "slow");
}

function showSpaForm() {
    $(".spa_form_container").fadeIn(), $("html, body").animate({
        scrollTop: 0
    }, "slow");
}

function showBaPromoForm() {
    $(".ba_promo_form").fadeIn(), $("html, body").animate({
        scrollTop: 0
    }, "slow");
}

map_initialized = !1, is_desktop = !1, $(document).ready(function() {
    return 0 == isMobile() ? (is_desktop = !0, "function" == typeof initialize_location_map && initialize_location_map(), 
    void repositionGallery()) : ($(".accordion-heading").click(function() {
        $(this).toggleClass("expanded"), $(this).next().toggle(500, function() {
            "none" == $(this).css("display") || $(".accordion-content-location").length && "none" != $(".accordion-content-location").css("display") && 1 != map_initialized && (initialize_location_map(), 
            map_initialized = !0);
        });
    }), void setTimeout(hideGallery, 2e3));
}), $(window).load(function() {
    $("#gallery_thumb_controls").flexslider({
        animation: "slide",
        controlNav: !1,
        pauseOnAction: !1,
        slideshow: !1,
        itemWidth: 125,
        itemMargin: 5,
        asNavFor: "#gallery_slider",
        prevText: "",
        nextText: ""
    }), $("#gallery_slider").flexslider({
        animation: "fade",
        controlNav: !1,
        directionNav: !1,
        slideshow: !0
    }), $("#gallery_slider2").flexslider({
        animation: "fade",
        controlNav: !0,
        directionNav: !0,
        slideshow: !1
    }), $("#gallery_thumb_controls2").flexslider({
        animation: "slide",
        controlNav: !1,
        pauseOnAction: !1,
        slideshow: !1,
        itemWidth: 125,
        itemMargin: 5,
        asNavFor: "#gallery_slider2",
        prevText: "",
        nextText: ""
    });
}), $(document).ready(function() {
    $(".showEnquiryForm").on("click", function() {
        showEnquiryForm();
    }), $(".showContactForm").on("click", function() {
        showContactForm();
    }), $("#testimonials .testimonial_slide_container").flexslider({
        controlNav: !1,
        directionNav: !1,
        slideshowSpeed: 4e3
    }), $("#banner .content").flexslider({
        controlNav: !1,
        directionNav: !1,
        slideshowSpeed: 4e3
    }), $("#services_slider .slider").flexslider({
        directionNav: !1,
        prevText: " ",
        nextText: " ",
        manualControls: ".slide_controls a",
        slideshowSpeed: 8e3
    });
}), $(".close_popup").on("click", function() {
    $(".member_check_popup").fadeOut(), $(".popup_overlay").fadeOut();
}), $.browser.safari ? $("select#bookOnline").on("click", function(e) {
    if (e.preventDefault(), 0 == this.value) showEnquiryForm(); else /*if (this.value.length > 0)*/ {
        var t = 'http://localhost/karmawp/booking-iframe?page_ID=' + this.options[this.selectedIndex].value, o = window.open(t, "_blank");
        $.ajax({
            type: "POST",
            url: "/echo/json/",
            success: function(e) {
                o.location;
            }
        });
    }
}) : $("select#bookOnline").on("change", function(e) {
    if (e.preventDefault(), 0 == this.value) showEnquiryForm(); /*else if ($(window).width() > 767) {
        $("#overlay").show(), $("#booknow_iframe_wrapper").show();
        var t = 'http://localhost/karmawp/booking-iframe?page_ID=' + this.options[this.selectedIndex].value;
        $("#booknow_iframe").attr("src", ""), $("#booknow_iframe").attr("src", t);
    }*/ else {
        var t = 'http://localhost/karmawp/booking-iframe?page_ID=' + this.options[this.selectedIndex].value, o = window.open(t, "_blank");
        $.ajax({
            type: "POST",
            url: "/echo/json/",
            success: function(e) {
                o.location;
            }
        });
    }
}), $("#booknow_iframe_wrapper .close_btn").click(function() {
    $("#overlay").hide(), $("#booknow_iframe_wrapper").hide();
}), $(".nav_toggle").on("click", function() {
    $("#destination_mobile_wrapper").hide(), $("#open_destination_mobile_wrapper .ulwrapper").hide(), 
    $(".mobile_dropdown").show(), $(".mobile_dropdown .content").hide(), $(".mobile_dropdown .content").removeClass("active"), 
    $(".main_nav.main_nav1").slideToggle();
}), $(".destination_mobile_close").click(function() {
    $(this).hide(), $("#destination_mobile_wrapper").hide(), $("#destination_mobile_closebtn").hide(), 
    $("#destination_mobile_outside").hide();
}), $("#nav_booking").on("click", function() {
    $(".main_nav.main_nav1").hide(), $("#open_destination_mobile_wrapper .ulwrapper").hide(), 
    $(".mobile_dropdown").hide(), $("#destination_mobile_wrapper").slideToggle(function() {
        $("#destination_mobile_wrapper").is(":hidden") ? ($("#destination_mobile_outside").hide(), 
        $("#destination_mobile_closebtn").hide()) : ($("#destination_mobile_outside").show(), 
        $("#destination_mobile_closebtn").show());
    }), $("#book_online_select").show(), $(".menu2").css("display", "block"), $('select option:contains("Book Online")').text("Choose Resorts:");
}), $(".open_destination_mobile").on("click", function() {
    $("#destination_mobile_wrapper").hide(), $(".main_nav.main_nav1").hide(), $(".mobile_dropdown").hide(), 
    $("html,body").animate({
        scrollTop: $(this).offset().top - 100
    }, 800), $("#open_destination_mobile_wrapper ul").html($(".mobile_dropdown .content ul").html()), 
    $("#open_destination_mobile_wrapper .ulwrapper").slideToggle();
}), $("#open_destination_mobile_wrapper .arrowdown").on("click", function() {
    scr = $("#open_destination_mobile_wrapper .ulwrapper > ul").scrollTop(), $("#open_destination_mobile_wrapper .ulwrapper > ul").animate({
        scrollTop: scr + 30
    }, 200);
}), $(".nav_toggle_booking").on("click", function() {
    $(".main_nav.main_nav1").slideUp(), $(".main_nav.booking_nav").slideToggle(), scrollTo(0, 0);
}), $(".nav_toggle_contact").on("click", function() {
    showContactForm();
}), $(window).resize(function() {
    $(window).width() > 1040 && $(".main_nav").show();
}), $(function() {
    $("#tweets").tweet({
        modpath: "/twitter/",
        avatar_size: 32,
        username: "KarmaResorts",
        template: "{text}",
        count: 1
    });
}), $(window).load(function() {
    $(".insta_slider").flexslider({
        animation: "slide",
        controlNav: !1,
        directionNav: !1,
        animationLoop: !0,
        itemWidth: 306,
        itemMargin: 0,
        move: 1,
        slideshowSpeed: 3e3
    });
}), $(window).scroll(function() {
    var e = ($("header").offset().top, $("header")), t = $(window).scrollTop();
    t > 0 ? e.addClass("fixed_header") : e.removeClass("fixed_header");
}), $(document).ready(function(e) {
    e(".back_top").click(function(t) {
        return t.preventDefault(), e("html, body").animate({
            scrollTop: 0
        }, "slow"), !1;
    }), e("#location_page_nav a").click(function(t) {
        return t.preventDefault(), e("html, body").animate({
            scrollTop: e(e.attr(this, "href")).offset().top - 167
        }, 500), !1;
    }), e("select#location_nav_mobile").on("change", function() {
        return e("html,body").animate({
            scrollTop: e(this.value).offset().top - 133
        }, 500), !1;
    });
}), $("#blocks_section").masonry({
    itemSelector: ".grid_block",
    columnWidth: ".grid-sizer",
    percentPosition: !0
}), $("#searchResults").masonry({
    itemSelector: ".item_container",
    columnWidth: ".grid-sizer",
    percentPosition: !0
}), $(function() {
    $(".datepicker").datepicker({
        minDate: 0,
        dateFormat: "yy/mm/dd"
    });
}), function() {
    var e = document.createElement("script");
    e.type = "text/javascript", e.async = !0, e.src = ("https:" == document.location.protocol ? "https://s" : "http://i") + ".po.st/static/v3/follow-widget/post-follow.js#publisherKey=5tvpch4ee76oecdi3bp0";
    var t = document.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(e, t);
}();

var pwidget_config = {
    trackAddressBar: !0,
    defaults: {
        afterShare: !0,
        sharePopups: !0
    }
};

!function() {
    var e = document.createElement("script");
    e.type = "text/javascript", e.async = !0, e.src = ("https:" == document.location.protocol ? "https://s" : "http://i") + ".po.st/share/script/post-widget.js#publisherKey=5tvpch4ee76oecdi3bp0&lc=auto";
    var t = document.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(e, t);
}(), $(document).ready(function() {
    var e = window.location.hash.substr(1).split("#");
    $.each(e, function(e, t) {
        if ("enquiry" == t) return showEnquiryForm(), !1;
    });
}), $(document).ready(function() {
    var e = $("#newsletter_signup");
    $("#newsletter_signup_submit").click(function(t) {
        if ($("#newsletter_signup").validate({
            errorElement: "div",
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
        }).form(), $("#newsletter_signup").valid()) return $("#newsletter_signup_submit").prop("disabled", !0), 
        $(".confirmprocess").css("display", "block"), $.ajax({
            type: "POST",
            url: e.attr("action"),
            data: e.serialize(),
            success: function(e) {
                "ok" === $.trim(e) ? ($("#newsletter_signup_submit").prop("disabled", !1), $(".text-center").text("Thank you"), 
                $(".text-inworking").text("for signing up to receive Karma's e-Newsletter."), vex.defaultOptions.className = "vex-theme-wireframe", 
                vex.dialog.alert("<h3>Thank you</h3><p>for signing up to receive Karma's e-Newsletter..</p>")) : ($("#newsletter_signup_submit").prop("disabled", !1), 
                $(".text-center").text("Sorry..."), $(".text-inworking").text("Your email is already registered."));
            }
        }), t.preventDefault(), !1;
    });
});