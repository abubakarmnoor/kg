<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
    if( $('body').hasClass('home') ){
    	$("#banner").bind('vegaswalk', function (e, index, slideSettings) {
          	var defaults = ('<div class="wrap"><h2 class="title" style="color:#ffffff">WE CREATE... <span>experiences</span> </h2><p style="color:#ffffff">Karma Group is an award-winning international travel and lifestyle brand offering extraordinary experiences in the world’s most beautiful locations.</p><img src="https://karmagroup.com/wp-content/uploads/2016/10/karma-group-logo-white.png" alt="" title="karma-group-logo-white"></div>');
          	var spa = ('<div class="wrap"><h2 class="title" style="color:#ffffff"><a href="https://karmagroup.com/karma-wellness-week/" style="color:#ffffff">EXPERIENCE <span>Karma Wellness Week</span></a></h2><p style="color:#ffffff"><a href="https://karmagroup.com/karma-wellness-week/" style="color:#ffffff">Friday 13th - Sunday 22nd April, 2018</a></p><a href="https://karmagroup.com/karma-wellness-week/" style="color:#ffffff"><img src="https://karmagroup.com/karma-wellness-week/wp-content/themes/karmaspa/images/logo_k_spa.png" alt="10 Days Karma Spa"></a></div>');            
          	if( index == 0 ){
            	$('.vegas-wrapper .content').html( spa );
            }else{              
            	$('.vegas-wrapper .content').html( defaults );
            }
        });
    }
});
</script>
<!-- end Simple Custom CSS and JS -->
