<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
    if( $('body').hasClass('home') ){
      	$("#banner").bind('vegaswalk', function (e, index, slideSettings) {
          	var defaults = ('<div class="wrap" style="display: none !important;"><h2 class="title" style="color:#ffffff">&nbsp;</h2><p style="color:#ffffff">&nbsp;</p></div>');
          	var apps = ('<div class="content" style="background:none;"><div class="wrap"><div class="blokk"><a target="_blank" href="https://itunes.apple.com/in/app/karma-resorts/id1296156992?mt=8/"><div class="link1"></div></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.karmagroups"><div class="link2"></div></a></div></div></div>');
          	if( index == 0 ){
            	$('.vegas-wrapper .content').html( apps );
            }else{
            	$('.vegas-wrapper > .container > .content').html( defaults );
            }
        });
    }
});

</script>
<!-- end Simple Custom CSS and JS -->
