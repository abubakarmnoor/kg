<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



<div id="type-content" class="type-content">
			
	<div class="main_content">
	<style type="text/css">

	#mainslider_wrapper{
		height: 500px;
		overflow: hidden;
		width: 100%;
	}
	#mainslider{
		width: 1500px;
	}	
	#mainslider img{
		border: 3px solid #f00;
		height: 500px!important;
	}


</style>

<div class="even"><div id="banner_slider_wrapper">
		 <div id="banner" class="banner_slider content_banner vegas-container" style="height: 500px;"><div class="vegas-slide vegas-transition-fade vegas-transition-fade-in vegas-transition-fade-out" style="transition: all 1000ms ease 0s;"><div class="vegas-slide-inner" style="background-image: url(&quot;https://karmagroup.com/wp-content/uploads/2016/08/rottnest-header.jpg&quot;); background-color: transparent; background-position: center center; background-size: cover;"></div></div><div class="vegas-slide vegas-transition-fade vegas-transition-fade-in vegas-transition-fade-out" style="transition: all 1000ms ease 0s;"><div class="vegas-slide-inner" style="background-image: url(&quot;https://karmagroup.com/wp-content/uploads/2016/08/destination-header.jpg&quot;); background-color: transparent; background-position: center center; background-size: cover;"></div></div><div class="vegas-slide vegas-transition-fade vegas-transition-fade-in vegas-transition-fade-out" style="transition: all 1000ms ease 0s;"><div class="vegas-slide-inner" style="background-image: url(&quot;https://karmagroup.com/wp-content/uploads/2016/08/Headline_Image_E.jpg&quot;); background-color: transparent; background-position: center center; background-size: cover;"></div></div><div class="vegas-slide vegas-transition-fade vegas-transition-fade-in vegas-transition-fade-out" style="transition: all 1000ms ease 0s;"><div class="vegas-slide-inner" style="background-image: url(&quot;https://karmagroup.com/wp-content/uploads/2016/08/header-reef-2.jpg&quot;); background-color: transparent; background-position: center center; background-size: cover;"></div></div><div class="vegas-slide vegas-transition-fade vegas-transition-fade-in" style="transition: all 1000ms ease 0s;"><div class="vegas-slide-inner" style="background-image: url(&quot;https://karmagroup.com/wp-content/uploads/2016/08/rottnest-header.jpg&quot;); background-color: transparent; background-position: center center; background-size: cover;"></div></div><div class="vegas-timer vegas-timer-running"><div class="vegas-timer-progress" style="transition-duration: 4900ms;"></div></div><div class="vegas-wrapper" style="overflow: visible; padding: 0px;"><div class="container">
			<div class="content" style="background:none;"><p>&nbsp</p><p>&nbsp</p><br>
			
<p style="color:#ffffff; font-size: 36px;">PAGE NOT FOUND</p></div></div></div></div></div></div><div class="odd"><div id="contained_content" style="margin-top: 50px;">
<div class="container">

<h3 style="text-align: center;">The link you clicked may be broken or the page may have been removed.</h3>
<p style="text-align: center;">Visit the <a href="<?php echo get_option( 'home' ); ?>/">homepage</a> or <a href="<?php echo get_option( 'home' ); ?>/contact-us">contact us</a> about the problem.</p>

<p>&nbsp;</p>    
	</div>
</div>
</div>	</div>

	<div id="blocks_section" style="position: relative; height: 0px;">
		<div class="grid-sizer"></div>
			</div>
		
</div>



<?php get_footer(); ?>