<?php
$fields = array(
	'gallery' => get_sub_field('gallery')	
);
ob_start();

$gallery_id = $fields['gallery'][0]['ngg_id'];
$images = karma_getGalleryImages($gallery_id);
// Shuffle the files
shuffle($images);
$bID = 'gallery_block';


//MULTILANGUAGES
$language['en']['location_btn_view_gallery'] = 'View Gallery';
$language['de']['location_btn_view_gallery'] = 'Ansicht Galerie';
//CEK LANGUAGE
$lang = 'en';
if(!isset($_GET['lang'])){

    $lang = 'en';
}else{

    $lang = $_GET['lang'];
}
//////////////////////////////////////////////
?>
<div id="accordion-gallery" class="accordion">
	<div class="accordion-heading">
		<div class="icon"><i class="fa fa-picture-o fa-lg"></i></div>
		Gallery
		<div class="indicator"></div>
	</div>
	<div id="gallery" class="left accordion-content">
		<div class="container wide">
			<div class="gallery_block_slider gallery_block_slider_<?php echo $bID; ?>">
				<ul class="slides cf">
				    <?php
				    $counter = 0;
					foreach($images as $image) {
						$counter++;
						if ($counter == 11) break;

if(trim($image->description) != ''){
$img_title = ' title="'. $image->description .'"';
}else{
$img_title = '';
}
	    		        echo '<li>';
							echo '<div class="gallery_container">';
								echo '<a'. $img_title . ' alt="'. $image->alttext . '" class="image_link" href="' .get_option( 'siteurl' ).'/'. $image->url . '">
										<div class="gallery_image" style="background:url(' .get_option( 'siteurl' ).'/'. $image->url . ') center; background-size: cover;"></div>
									  </a>';
							echo '</div>';
						echo '</li>';
					} ?>
	
				</ul>
			</div><!-- #gallery_slider -->
	
			<div class="view_gallery">
				<a title="<?php echo $language[$lang]['location_btn_view_gallery']; ?>" href="<?php echo get_option( 'siteurl' ); ?>/gallery?id=<?php echo $gallery_id;?>"><button class="button_outline gold"><?php echo $language[$lang]['location_btn_view_gallery']; ?></button></a>
			</div>
		
		</div>
	</div><!-- .gallery -->
</div><!-- .accordion -->

<script>
	$(window).load(function() {
	  	$('.gallery_block_slider_<?php echo $bID; ?>').flexslider({	  		
	      	animation: "slide",
	    	slideshow: true,
		    slideshowSpeed: 5000, 
		    // controlNav: false,
		    prevText: " ",
		    nextText: " ",
		    // move: getGridSize(),
		    move: 1,
		    itemWidth: 210,
		    minItems: getGridSize(),
    		maxItems: getGridSize(),
		});

		// Dynamically tells flexslider how many thumbs to show.
		$(window).resize(function() {
		    var gridSize = getGridSize();
		    var vars = null;
		      
		    $('.gallery_block_slider_<?php echo $bID; ?>').data('flexslider').vars.minItems = gridSize;
		    $('.gallery_block_slider_<?php echo $bID; ?>').data('flexslider').vars.maxItems = gridSize;
		});

		$('.gallery_block_slider_<?php echo $bID; ?> .gallery_container .image_link').magnificPopup({
		  	type: 'image',
		  	gallery:{
			    enabled:true
			}
		});

	});
</script>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>