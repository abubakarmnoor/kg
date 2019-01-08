<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/*German Version*/
jQuery(document).ready(function( $ ){
    if( $('body').hasClass('page-id-3143') ){
    	$("#banner").bind('vegaswalk', function (e, index, slideSettings) {
          	var defaultsde = ('<div class="content" style="background:none;"><p class="title" style="font-size: 48px;font-style: normal;font-family: Open Sans, sans-serif;font-weight: 300;text-transform: uppercase;margin: 6px 0;color:#ffffff">WILLKOMMEN IM <span style="font-style: italic;text-transform: none;font-family: Georgia,Times,Times New Roman,serif;"></span> </p><img src="https://karmagroup.com/wp-content/uploads/2016/09/Karma-Bavaria-logo.png" alt="karma bavaria" title="karma-bavaria-logo"></div>');
          	var anewde = ('<div class="content" style="background:none; display: none;"><p class="title" style="font-size: 48px;font-style: normal;font-family: Open Sans, sans-serif;font-weight: 300;text-transform: uppercase;margin: 6px 0;color:#ffffff">WILLKOMMEN IM <span style="font-style: italic;text-transform: none;font-family: Georgia,Times,Times New Roman,serif;"></span> </p><img src="https://karmagroup.com/wp-content/uploads/2016/09/Karma-Bavaria-logo.png" alt="karma bavaria" title="karma-bavaria-logo"></div>');
          	if( index == 0 ){
            	$('.vegas-wrapper .content').html( anewde );
            }else{
            	$('.vegas-wrapper .content').html( defaultsde );
            }
        });
    }
});</script>
<!-- end Simple Custom CSS and JS -->
