<?php
$fields = array(
	'gallery_page' => get_sub_field('gallery_page'),
	'gallery' => get_sub_field('gallery'),
	'video_destination' => get_sub_field('video_destination')	
);
ob_start();
   $gallery_images = array();
   if( isset($fields['gallery_page']) && $fields['gallery_page'] ){
      $gallery_images = karma_getGalleryImages( $fields['gallery_page']->ID );
   }elseif (isset($fields['gallery'][0]['ngg_id'])) {
         $gallery_images = karma_getGalleryImages($fields['gallery'][0]['ngg_id']);
         //print_r($gallery_images);
   }
$gallery_id = $fields['gallery'][0]['ngg_id'];
$images = karma_getGalleryImages($gallery_id);
// Shuffle the files
//shuffle($gallery_images);
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
<style>
 .gocation__view-mobile{
	text-align:  center;
	display: none !important;
}              
@media (max-width: 991px){
	.gocation__view-mobile{
		display: inline-block !important;
	}
}         

@media (max-width: 425px){
	.gocation__view-mobile{
		margin-top: 20px;
	}
}         
</style>
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
					foreach($gallery_images as $image) {
						$counter++;
						if ($counter == 11) break;

if(trim($image->description) != ''){
$img_title = ' title="'. $image->description .'"';
}else{
$img_title = '';
}
	    		        echo '<li>';
							echo '<div class="gallery_container">';
								echo '<a'. $img_title . ' alt="'. $image->alttext . '" class="image_link" href="' . $image->url . '">
										<div class="gallery_image" style="background:url(' . $image->url . ') center; background-size: cover;"></div>
									  </a>';
							echo '</div>';
						echo '</li>';
					} ?>
	
				</ul>
			</div><!-- #gallery_slider -->
		<!-- #gallery_thumb_controls -->
		<?php 
			$gid = $fields['gallery'][0]['ngg_id'];
			$gid_property_name['2'] = 'karma-bavaria'; //BAVARIA
			$gid_property_name['5'] = 'karma-jimbaran'; //JIMBARAN
			$gid_property_name['1'] = 'karma-kandara'; //KANDARA
			$gid_property_name['12'] = 'karma-rottnest'; //ROTTNEST
			$gid_property_name['14'] = 'cay-tre'; //CAY TRE
			$gid_property_name['3'] = 'karma-chakra'; //CHAKRA
			$gid_property_name['4'] = 'karma-haveli'; //HAVELI
			$gid_property_name['9'] = 'karma-mayura'; //MAYURA
			$gid_property_name['11'] = 'karma-reef'; //REEF
			$gid_property_name['24'] = 'karma-st-martins'; //MARTINS
			$gid_property_name['19'] = 'royal-monterio'; //MONTERIO
			$gid_property_name['15'] = 'royal-bella-vista'; //BELLA VISTA / CHIANG MAI
			$gid_property_name['29'] = 'royal-benaulim'; //BENAULIM
			$gid_property_name['21'] = 'royal-phuket'; //ROYAL PHUKET
			$gid_property_name['13'] = 'karma-royal-candidasa'; //ROYAL CANDIDASA
			$gid_property_name['16'] = 'royal-haathi-mahal'; //HAATHI MAHAL / royal-bella-vista
			$gid_property_name['18'] = 'karma-royal-jimbaran'; //ROYAL JIMBARAN
			$gid_property_name['20'] = 'royal-palms'; //ROYAL PALMS
			$gid_property_name['22'] = 'karma-royal-sanur'; //ROYAL SANUR
			$gid_property_name['10'] = 'estate-pelikanos'; //Pelikanos, Mykonos
			$gid_property_name['8'] = 'le-preverger'; //Karma Le Preverger
			$gid_property_name['30'] = 'sanctum-soho'; //Karma Sanctum Soho
			$gid_property_name['31'] = 'sanctum-on-the-green';
			$gid_property_name['32'] = 'royal-residence';
			$gid_property_name['36'] = 'karma-minoan';
			$gid_property_name['38'] = 'karma-borgo-di-colleoli';	
			$gid_property_name['39'] = "karma-manoir";
			$gid_property_name['40'] = 'karma-residence-normande';
                        $gid_property_name['41'] = "karma-exotica";
                        $gid_property_name['42'] = "karma-chang-chiangmai";
			//$link_url = '/gallery/?id='.$fields['gallery'][0]['ngg_id']; // @TODO link to gallery page eg /gallery/karma-kandara/
			$link_url = get_home_url().'/gallery/'.$gid_property_name[$gid];
			?>

			<div class="view_gallery">
				<a title="<?php echo $language[$lang]['location_btn_view_gallery']; ?>" href="<?php echo $link_url ?>"><button class="button_outline gold"><?php echo $language[$lang]['location_btn_view_gallery']; ?></button></a>
				<?php echo (!empty($fields['video_destination']) ? '<a class="button_outline gold gocation__view-mobile" target="_blank" href="' . $fields['video_destination'] . '" title="View Destination Video" onclick="trackOutboundLink('."'".$fields['video_destination']."'".'); return false;">View Video Destination</a>' : ''); ?>				
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
