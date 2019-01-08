<?php
$fields = array(
        'slider_background_image' => get_sub_field('slider_background_image'),
        'title' => get_sub_field('title'),
        'description' => get_sub_field('description'),
        'slides' => get_sub_field('slides')
);
$bID = 'services_' . strip_tags(strtolower(str_replace(array(' ', ',', ''), array('', '', ''), get_sub_field('title'))));
ob_start();

//$unik =
//echo"<h1>UD UNIK: ". rand(5, 15) ."</h1>>";
?>
<div id="accordion-services" class="accordion" style="background: url('<?php echo $fields['slider_background_image']['sizes']['large'];?>') center;">
        <div class="accordion-heading">
                <div class="icon"><i class="fa fa-star" aria-hidden="true"></i></div>
                Amenities
                <div class="indicator"></div>
        </div>
        <div id="services" class="accordion-content">
                <div id="services_slider2" class="services_slider services_slider_<?php echo $bID; ?>">
                        <div class="top_section" style="<?php echo (!empty($fields['slider_background_image']) ? "background: url('".$fields['slider_background_image']['sizes']['large']."') center; background-size: cover;" : "") ?>">
                                <div class="container wide">
                                        <div class="left">
                                                        <h3 style="color:#FFF;"><?php echo $fields['title'];?></h3>
                                                        <div style="color: #FFF;"><?php echo $fields['description'];?></div>
                                        </div><!-- .left -->
                                        <div class="right">										
                                                <div class="slide_controls slide_controls_<?php echo $bID; ?>">
                                                        <?php
                                                        $page_id = get_the_ID();
                                                        $left_slides = $right_slides = array();
                                                        $i = 0;
                                                        foreach ($fields['slides'] as $slide) {
															$i++;															
															if($page_id == '914' || $page_id == '193') {
																if ($i <= 6) {
																		$left_slides[] = $slide;
																} else {
																		$right_slides[] = $slide;
																}
															}
															else{
																if ($i <= 5) {
																		$left_slides[] = $slide;
																	} else {
																		$right_slides[] = $slide;
																	}
																}
														}
                                                        echo '<div class="left">';
                                                        foreach ($left_slides as $slide) {
                                                                echo '<li><a href="#" title="'.$slide['title'].'"><span>&rsaquo; </span>'.$slide['title'].'</a></li>';
                                                        }
                                                        echo '</div>';
                                                        echo '<div class="right">';
                                                        foreach ($right_slides as $slide) {
                                                                echo '<li><a href="#" title="'.$slide['title'].'"><span>&rsaquo; </span>'.$slide['title'].'</a></li>';
                                                        }
                                                        echo '</div>';
                                                        ?>
                                                </div><!-- .slider_btns -->
                                        </div><!-- .right -->
                                </div><!-- .container.wide -->
                        </div><!-- .top_section -->
                        <div class="bottom_section" style="background:#87714d;">
                                <div class="container wide cf">
                                        <div class="slider">
                                                <ul class="slides">
                                                        <?php foreach ($fields['slides'] as $slide) {?>
                                                        <li>
                                                                <div class="left" style="background:#87714d;">
                                                                        <h3 class="title"><?php  echo $slide['title']; ?></h3>
                                                                                <?php  echo $slide['description'];?>
                                                                </div><!-- .left -->
                                                                <?php  if (!empty($slide['image'])): ?>
                                                                        <div class="right">
                                                                                <div class="image" style="background: url('<?php  echo $slide['image']['sizes']['large']; ?>') center;" alt="<?php  echo $slide['title']; ?>" title="<?php echo $slide['title'] ?>"></div>
                                                                        </div><!-- .right -->
                                                                <?php  endif; ?>
                                                        </li>
                                                        <?php }?>
                                                </ul>
                                        </div><!-- .slider -->
                                </div><!-- .container -->
                        </div><!-- .bottom_section -->
                </div><!-- .accomodation_cuisine_slider -->
        </div><!-- #services -->
</div><!-- .accordion -->
<script>
$(document).ready(function() {
        $('.services_slider_<?php echo $bID; ?> .slider' ).flexslider({
                prevText: " ",
                nextText: " ",
                manualControls: ".slide_controls_<?php echo $bID; ?> a",
                slideshowSpeed: 4000,
                before: function(){scrollToAmenities()},
                touch: false
        });
});
</script>
<?php
$html = ob_get_contents();
ob_end_clean();
?>
