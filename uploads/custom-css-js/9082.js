<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
    if( $('body').hasClass('page-id-731') ){
    	$("#banner").bind('vegaswalk', function (e, index, slideSettings) {
          	var defaults = ('<div class="content" style="background:none; padding: 100px 0 100px 0 !important;"><p class="title" style="font-size: 48px;font-style: normal;font-family: Open Sans, sans-serif;font-weight: 300;text-transform: uppercase;margin: 6px 0;color:#ffffff">Welcome to <span style="font-style: italic;text-transform: none;font-family: Georgia,Times,Times New Roman,serif;"></span></p><img src="https://karmagroup.com/wp-content/uploads/2016/09/Karma-Bavaria-logo.png" alt="karma bavaria" title="karma-bavaria-logo"></div>');
          	var anew = ('<div class="content" style="background:none; display: none;"><p class="title" style="font-size: 48px;font-style: normal;font-family: Open Sans, sans-serif;font-weight: 300;text-transform: uppercase;margin: 6px 0;color:#ffffff">Welcome to <span style="font-style: italic;text-transform: none;font-family: Georgia,Times,Times New Roman,serif;"></span></p><img src="https://karmagroup.com/wp-content/uploads/2016/09/Karma-Bavaria-logo.png" alt="karma bavaria" title="karma-bavaria-logo"></div>');
          	if( index == 0 ){
            	$('.vegas-wrapper .content').html( anew );
            }else{
            	$('.vegas-wrapper .content').html( defaults );
            }
        });
    }
});


</script>
<!-- end Simple Custom CSS and JS -->
