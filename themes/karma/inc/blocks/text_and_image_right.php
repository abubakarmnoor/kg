<?php
$fields = array(
	'image' => get_sub_field('image'),
	'text' => get_sub_field('text')
);
ob_start();
?>
<style>
#karma .text_image_block_right {
    background: url(https://karmagroup.com/wp-content/themes/karma/imgs/welcome-booking-bg.jpg);
    background-size: cover
}

#karma .text_image_block_right .left {
    padding: 50px 90px;
    width: 50%;
    display: inline-block;
    margin-left: -3px;
    vertical-align: middle;
    min-height: 475px
}

#karma .text_image_block_right .right {

    padding: 50px 90px;
    width: 50%;
    display: inline-block;
    margin-left: -1.5px;
    vertical-align: middle
}

@media (max-width:991px) {
	#karma .text_image_block_right .right {
        margin-left: 0
    }
}
</style>
<div class="text_image_block_right">
	<div class="left" style="background: url('<?php  echo $fields['image']['sizes']['large']; ?>'); background-size: cover;">		
	</div><!-- .left -->

	<div class="right">	
		<?php echo $fields['text']?>	
	</div><!-- .right -->

</div><!-- .text_and_image -->
<?php 
$html = ob_get_contents();
ob_end_clean();
?>