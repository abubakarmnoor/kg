<?php
$fields = array(
	'image_left' => get_sub_field('image_left'),
    'image_right' => get_sub_field('image_right')
);
ob_start();
?>
<style>
#karma .text_image_block_both {
    background: #ffffff;
    background-size: cover
}

#karma .text_image_block_both .left {
    padding: 50px 90px;
    width: 50%;
    display: inline-block;
    margin-left: -3px;
    vertical-align: middle;
    background-position: center !important;
    min-height: 475px
}

#karma .text_image_block_both .right {
    width: 50%;
    display: inline-block;
    margin-left: -3px;
    vertical-align: middle;
    background-position: center !important;
    min-height: 475px
}

@media (max-width:991px) {
	#karma .text_image_block_both .right {
        margin-left: 0
    }
}
</style>
<div class="text_image_block_both">
	<div class="left" style="background: url('<?php  echo $fields['image_left']['sizes']['large']; ?>'); background-size: cover;"></div><!-- .left -->
	<div class="right" style="background: url('<?php  echo $fields['image_right']['sizes']['large']; ?>'); background-size: cover;"></div><!-- .right -->
</div><!-- .text_and_image -->
<?php 
$html = ob_get_contents();
ob_end_clean();
?>