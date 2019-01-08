<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
    if( $('body').hasClass('page-id-713') ){
    	$("#banner").bind('vegaswalk', function (e, index, slideSettings) {
          	$('.vegas-wrapper').replaceWith(function(){
              	return $('<a class="vegas-wrapper" href="https://karmagroup.com/karma-wellness-week/" />').append($(this).contents());
          	});
        });
    }
});
</script>
<!-- end Simple Custom CSS and JS -->
