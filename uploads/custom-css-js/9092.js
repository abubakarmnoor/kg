<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
    if( $('body').hasClass('page-id-731') ){
    	$("#banner").bind('vegaswalk', function (e, index, slideSettings) {
          	if( index == 0 ){
            	$('.vegas-wrapper').replaceWith(function(){
              		return $('<a class="vegas-wrapper" href="https://karmagroup.com/karma-wellness-week/" />').append($(this).contents());
          		});
         }else{
            	$('.vegas-wrapper').replaceWith(function(){
              		return $('<div class="vegas-wrapper" />').append($(this).contents());
          		});
            	}
        });
    }
});
</script>
<!-- end Simple Custom CSS and JS -->
