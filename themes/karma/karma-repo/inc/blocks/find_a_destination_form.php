<?php
ob_start();
$destination_pages = karma_get_destination_pages_all();
$bID = 'find_a_destination';
?>
<div id="find_destination_map">
	<div class="container">
		<div class="filter_wrapper">
			<h2 class="map_title">Find by location</h2>
				
			

			</div><!-- .filter_wrapper -->
			<?php //echo '<pre>$tags='.var_export($tags,1).'</pre>';?>
		<script>
			var karmaBrandTrigger = $('.filter_brand .brand_selector');
			var karmaBrandlist = $('.filter_brand .karma_brands');
			karmaBrandTrigger.click(function() {
			    karmaBrandTrigger.toggleClass('active');
			    karmaBrandlist.slideToggle(200);
			});
			karmaBrandlist.click(function() {
			    karmaBrandTrigger.click();
			});
			var resortTypeTrigger = $('.filter_type .type_selector');
			var resortTypeList = $('.filter_type .resort_type');
			resortTypeTrigger.click(function() {
			    resortTypeTrigger.toggleClass('active');
			    resortTypeList.slideToggle(200);
			});
			resortTypeList.click(function() {
			    resortTypeTrigger.click();
			});
		</script>
		
		<!--start-->
		<style>
			.google-maps {
				position: relative;
				padding-bottom: 75%; // This is the aspect ratio
				height: 0;
				overflow: hidden;
			}
			.google-maps iframe {
				position: absolute;
				top: 0;
				left: 0;
				width: 100% !important;
			}
		</style>
		<div class="destination_map">
		<div class="google-maps">
			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1cpNFEnTMs44bnWnqzjyAkwertvw"  width="1000" height="500"></iframe>
		</div>
		</div>
		<!--end-->

	</div><!-- .container -->
</div><!-- #find_destination_map -->
<?php
//include 'enquiry_form.php';
$html = ob_get_contents();
ob_end_clean();
?>