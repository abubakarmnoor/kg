
	var _slidesSrc = [];
  var videoURL = 0;
  
  /**
   * Determine the mobile operating system.
   * This function returns one of 'iOS', 'Android', 'Windows Phone', or 'unknown'.
   *
   * @returns {String}
   */
  function isMobileOperatingSystem() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

        // Windows Phone must come first because its UA also contains "Android"
      if (/windows phone/i.test(userAgent)) {
          return 1;
      }

      if (/android/i.test(userAgent)) {
          return 1;
      }

      // iOS detection from: http://stackoverflow.com/a/9039885/177710
      if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
          return 1;
      }

      return 0;
  }
  
	for (var i = 0, len = slides.length; i < len; i++) {
    if( typeof slides[i] === 'object' && 'video' in slides[i] ){
      _slidesSrc.push({
        video: slides[i]['video']
      });
      videoURL = slides[i]['video']['src'][0];
      
      // We show controls only for phone and mobile
      var controls = isMobileOperatingSystem() ? 'controls' : '';
      
      $('.banner_slider').addClass( 'has-video vegas-container' );
      $('.banner_slider').wrapInner('<div class="vegas-wrapper" style="overflow: visible; padding: 0px;"></div>');
      $('.banner_slider').append('<div class="vegas-slide vegas-transition-fade vegas-transition-fade-in"><video autoplay loop muted '+ controls +' webkit-playsinline="true" playsinline="true" class="vegas-video" id="videoresorts"  style=""><source src="'+ videoURL +'"></video></div>');
      
      //Maintain video height
      function adjustVideoHeight(){
        var newHeight = ( $(window).width() / 16 ) * 9;
        newHeight = parseInt(newHeight);
        $('.banner_slider').css( 'max-height', newHeight + 'px' );
      }
      $(window).on('resize', function() {
        adjustVideoHeight();
      });
      adjustVideoHeight();
      
      hasVideo = true;
      // We break the loop as we only accept 1 video on header
      break;
      
    }else{
      _slidesSrc.push({
        src: slides[i],
        fade: 1000
      });
    }
	}
  
  if( !videoURL ){
  
    $.vegas.isVideoCompatible = function () {
      return true;
    }
    
    var bannerSlider = $('.banner_slider');

    bannerSlider.vegas({
      slides: _slidesSrc
    });
    
  }

