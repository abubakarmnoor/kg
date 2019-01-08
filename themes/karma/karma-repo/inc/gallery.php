<div id="galleryPage" class="galleryPage_gallery_page"><?php
foreach($gallery_images as $image) {

if(trim($image->description) != ''){
$img_title = ' title="'. $image->description .'"';
}else{
$img_title = '';
}		
?>
<li>
<a alt="<?php echo $image->alttext; ?>"<?php echo $img_title; ?> class="image_link" href="<?php echo get_option( 'siteurl' ); ?><?php echo $image->url; ?>">
<div class="gallery_image" style="background:url('<?php echo get_option( 'siteurl' ); ?><?php echo $image->url; ?>') center; background-size: cover;" alt="<?php echo $image->alttext; ?>"<?php echo $img_title; ?>></div>
</a>
</li>
<?php }?>
	
	<div class="paging">
		<?php
		$query_str = get_option( 'siteurl' ).'/gallery/?';
		
		if ($gallery_id) {
			$query_str .= 'id='.$gallery_id.'&';
		}
		for ($i=1;$i<=$page_count;$i++) {
			$class_extra = '';
			if ((isset($_GET['pid']) && $_GET['pid'] == $i) || (!isset($_GET['pid']) && $i == 1)) {
				$class_extra = 'currentPage active';
			}
			echo '<span class="'.$class_extra.' numbers"><a href="'.$query_str.'pid='.$i.'">'.$i.'</a></span>';
		}
		?>		
	</div>
	   
</div><!-- .gallery_page -->
<script>
	$(document).ready(function() {
		$('.galleryPage_gallery_page .image_link').magnificPopup({
		  	type: 'image',
		  	gallery:{
			    enabled:true
			}
		});
	});
</script>