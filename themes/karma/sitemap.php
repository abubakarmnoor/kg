<?php
/**
 * Template Name: Sitemap
 */

get_header();
?>

<style type="text/css">
	.sitemap{
		padding-top: 150px;
		width: 800px;
		margin:  auto;
		display: table;
	}
	.sitemap b{
		margin-bottom: 5px;
		display: table;
	}
	.sitemap a{
		color: #000!important;
	}
	.sitemap ul{
		list-style: disc;
		margin-bottom: 20px;
	}
	.sitemap ul li{
		margin: 5px 20px;
	}
	.sitemap .sub{
		margin: 20px 30px;
	}	
</style>
<div id="type-content">
			
	<div class="main_content sitemap">

	<h1>Sitemap</h1>
	<div><b><a href="<?php echo get_option('home'); ?>">Home</a></b></div>
	<div><b><a href="<?php echo get_option('home'); ?>/about-karma">About Karma</a></b></div>
	<div><b><a href="<?php echo get_option('home'); ?>/exclusive-offers">Exclusive Offer</a></b></div>
	<div><b><a href="<?php echo get_option('home'); ?>/membership">Membership</a></b></div>
	<div><b>Destinations</b></div>
	<?php
	$area = 'Main Content';
	$rendered = karma_render_blocks($page_id, array());
	if (isset($rendered[$area])) {
		echo $rendered[$area];
	}

		//Karma Resort
		$pages = get_pages(array('parent' => 277, 'orderby' => 'title', 'order' => 'ASC'));
		echo '<ul class="sub"><div><b>Karma Resort</b></div>';
		foreach ($pages as $page) {
			if (!get_post_meta($page->ID, 'exclude_from_nav', 1)) {
				echo '<li><a href="'. get_permalink($page->ID) .'">'. $page->post_title .'</a></li>';
			}
		}
		echo '</ul>';

		//Karma Retreat
		$pages = get_pages(array('parent' => 328, 'orderby' => 'title', 'order' => 'ASC'));
		echo '<ul class="sub"><div><b>Karma Retreat</b></div>';
		foreach ($pages as $page) {
			if (!get_post_meta($page->ID, 'exclude_from_nav', 1)) {
				echo '<li><a href="'. get_permalink($page->ID) .'">'. $page->post_title .'</a></li>';
			}
		}
		echo '</ul>';

		//Karma Royal
		$pages = get_pages(array('parent' => 522, 'orderby' => 'title', 'order' => 'ASC'));
		echo '<ul class="sub"><div><b>Karma Royal</b></div>';
		foreach ($pages as $page) {
			if (!get_post_meta($page->ID, 'exclude_from_nav', 1)) {
				echo '<li><a href="'. get_permalink($page->ID) .'">'. $page->post_title .'</a></li>';
			}
		}
		echo '</ul>';

		//Karma Estate
		$pages = get_pages(array('parent' => 524, 'orderby' => 'title', 'order' => 'ASC'));
		echo '<ul class="sub"><div><b> Karma Estate</b></div>';
		foreach ($pages as $page) {
			if (!get_post_meta($page->ID, 'exclude_from_nav', 1)) {
				echo '<li><a href="'. get_permalink($page->ID) .'">'. $page->post_title .'</a></li>';
			}
		}
		echo '</ul>';				

		//Karma Experience
		$pages = get_pages(array('parent' => 3591, 'orderby' => 'title', 'order' => 'ASC'));
		echo '<ul><div><b>Karma Experience</b></div>
				<li><a href="'. get_option('home') .'/inspiration">Inspiration</a></li>
				<li><a href="'. get_option('home') .'/karma-beach">Karma Beach</a></li>
				<li><a href="'. get_option('home') .'/karma-spa">karma Spa</a></li>
				<li><a href="'. get_option('home') .'/karma-boutique">Karma Boutique</a></li>
		</ul>';

		//NEWS & EVENTS
		$pages = get_pages(array('parent' => 279, 'orderby' => 'title', 'order' => 'ASC'));
		echo '<ul><div><b>News & Events</b></div>';
		foreach ($pages as $page) {
			if (!get_post_meta($page->ID, 'exclude_from_nav', 1)) {
				echo '<li><a href="'. get_permalink($page->ID) .'">'. $page->post_title .'</a></li>';
			}
		}
		echo '</ul>';


		//Contact Us
		$pages = get_pages(array('parent' => 3591, 'orderby' => 'title', 'order' => 'ASC'));
		echo '<ul><div><b>Contact Us</b></div>
				<li><a href="'. get_option('home') .'/careers">Careers</a></li>
				<li><a href="'. get_option('home') .'/media">Media</a></li>
				<li><a href="'. get_option('home') .'/socialmedia">Karma Social</a></li>
				<li><a href="'. get_option('home') .'/gds">GDS Code</a></li>
		</ul>';

		//BLOG
		// $pages = get_pages(array('parent' => 279, 'orderby' => 'title', 'order' => 'ASC'));
		// echo '<ul><div><b>News & Events</b></div>';
		// foreach ($pages as $page) {
		// 	if (!get_post_meta($page->ID, 'exclude_from_nav', 1)) {
		// 		echo '<li><a href="'. get_permalink($page->ID) .'">'. $page->post_title .'</a></li>';
		// 	}
		// }
		// echo '</ul>';	
	?>	
	</div>
	
</div><!-- #type -->


<?php get_footer(); ?>
