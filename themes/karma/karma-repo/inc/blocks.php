<?php

/** BLOCK HTML RENDER  (in loop) */

function _karma_render_block($block_name) {
	$func_name = 'karma_render_' .$block_name;
	if (!function_exists($func_name)) {
		return false;
	}
	return call_user_func_array($func_name, array());
}

function karma_render_location_page_nav() {
	include 'blocks/location_page_nav.php';
	return $html;
}

function karma_render_make_a_reservation() {
	include 'blocks/make_a_reservation.php';
	return $html;
}

function karma_render_conference() {
    include 'blocks/conference.php';
	return $html;
	}

function karma_render_gallery() {
	include 'blocks/gallery.php';
	return $html;
}

function karma_render_hotelresort_search() {
	include 'blocks/hotelresort_search.php';
	return $html;
}

function karma_render_find_a_destination_form() {
	include 'blocks/find_a_destination_form.php';
	return $html;
}

function karma_render_karma_music() {
	include 'blocks/karma_music.php';
	return $html;
}

function karma_render_karma_curator_specialties() {
	include 'blocks/karma_curator_specialties.php';
	return $html;
}

function karma_render_simple_text_banner() {
	include 'blocks/simple_text_banner.php';
	return $html;
}

function karma_render_contact_block() {
	include 'blocks/contact_block.php';
	return $html;
}

function karma_render_contained_content() {
	include 'blocks/contained_content.php';
	return $html;
}

function karma_render_cta_banner() {
	include 'blocks/cta_banner.php';
	return $html;
}

function karma_render_location() {
	include 'blocks/location.php';
	return $html;
}

function karma_render_banner_slider() {
	include 'blocks/banner_slider.php';
	return $html;
}

function karma_render_accommodation() {
	include 'blocks/accommodation.php';
	return $html;
}

function karma_render_weddings() {
	include 'blocks/weddings.php';
	return $html;
}

function karma_render_cuisine() {
	include 'blocks/cuisine.php';
	return $html;
}

function karma_render_text_and_image() {
	include 'blocks/text_and_image.php';
	return $html;
}

function karma_render_two_column() {
	include 'blocks/two_column.php';
	return $html;
}

function karma_render_carousel_cta() {
	include 'blocks/carousel_cta.php';
	return $html;
}

function karma_render_carousel_cta_exclusive_offers() {
    include 'blocks/carousel_cta_exclusive_offers.php';
    return $html;
}

function karma_render_intro_text_and_book_online() {
	include 'blocks/intro_text_and_book_online.php';
	return $html;
}

function karma_render_testimonial_slider() {
	include 'blocks/testimonial_slider.php';
	return $html;
}

function karma_render_flexslider_banner_slider() {
	include 'blocks/flexslider_banner_slider.php';
	return $html;
}

function karma_render_services() {
	include 'blocks/services.php';
	return $html;
}

function karma_render_grid_block_page_link() {
	$fields = array(
		'height' => get_sub_field('height'),
		'background_image' => get_sub_field('background_image'),
		'link_url' => get_sub_field('link_url'),
		'link_text' => get_sub_field('link_text'),
		'title_color' => get_sub_field('title_color'),
	);
	// default height
	if (!$fields['height'] || ($fields['height'] && (int) $fields['height'] < 1)) {
		$fields['height'] = 350;
	}
	$html = '<a class="page-link-block" href="' .$fields['link_url']. '" title="'. $fields['background_image']['title'] .'" alt="'. $fields['background_image']['alttext'] .'">
				 <div class="grid_block page_link" style="height:' .$fields['height']. 'px';
	$html .= ';background:' .($fields['background_image'] ? 'url(' .$fields['background_image']['sizes']['large']. ')' : '#ccc');
	$html .= ';background-position: center">';
	$html .= '<h3 class="title" style="color:' .$fields['title_color']. '">' .$fields['link_text']. '</h3></div></a>';
	return $html;
}

function karma_render_grid_block_latest_news() {
	$html = '<div class="grid_block" style="height: '.(!empty($field_1_textbox_text) ? htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET) : '350px').'; background: #f3f4f4;">
			 <h3 class="title dark_blue_text">News &amp; Events</h3>
			 <div class="grid_block_news">';
		$args = array('posts_per_page' => 1,
					  'post_type' => 'page',
					  'post_parent' => karma_get_news_parent_id());
		$posts = get_posts($args); // get latest news post
		foreach ($posts as $post) {
			if( have_rows('area', $post->ID) ) {
     			while( have_rows('area', $post->ID) ) {
     				the_row();
     				while (have_rows('blocks')) {
     					the_row();
		     			$block_name = get_row_layout();
						if ($block_name == 'contained_content') {
					        $page_content = get_sub_field('content');
						}
     				}
				} 
			}
			$html .= '<br /><h2 class="georgia_font italic">' . karma_limit_text($post->post_title, 10) . '</h2> 
						<!-- <p>' . karma_limit_text($page_content, 15) . '</p> --><br /><br />
						<a class="button_outline gold" href="' . get_permalink($post->ID) . '" title="View Article">View Article</a>';
		}		
	$html .= '</div><!-- .grid_block_news -->
			  </div><!-- .grid_block -->';
	return $html;
}

function karma_render_grid_block_custom() {
	$fields = array(
		'height' => get_sub_field('height'),
		'background_image' => get_sub_field('background_image'),
		'text' => get_sub_field('text'),
	);
	$html = '<div class="grid_block"';
	if (!$fields['height'] || $fields['height'] && (int) $fields['height'] < 1) {
		$fields['height'] = 350;
	}
	$html .= ' style="height:' .$fields['height']. 'px';
	if ($fields['background_image']) {
		if (!is_array($fields['background_image'])) {
			$image = wp_get_attachment_image_src($fields['background_image'], 'large');
			$fields['background_image'] = $image ? $image[0] : false;
		} else {
			$fields['background_image'] = $fields['background_image']['sizes']['large'];
		}
	}
	$html .= ';background:' .($fields['background_image'] ? 'url(' .$fields['background_image']. ')' : '#333');
	$html .= ';backround-position: center;">';
	$html .= $fields['text']. '</div>';
	return $html;
}

function karma_render_twitter_carousel() {
	$html = '<div id="social_section">
	    <div id="twitter" class="left">
	        <div class="container">
	    		<div class="right">
	                <div class="twitter_logo">
	                    <img src="'.get_template_directory_uri().'/imgs/icons/twitter-bird-icon.png" alt="Twitter Bird">
	                </div>
	                <div class="twitter_follow">
	                    <p>Follow us on twitter</p>
	                    <span class="username"><a href="https://twitter.com/karmaresorts" target="_blank" title="Follow Karma on Twitter">@KarmaResorts</a></span>
	                </div>
	            </div>
	            <div class="left">
	                <h3><div id="tweets"></div></a></h3>
	            </div>
	        </div><!-- .container -->
	    </div><!-- #twitter -->
	    <div id="instagram" class="right">
	        <div class="insta_section">
	            <div class="insta_slider flexslider">
	                <ul class="slides" id="instafeed">
	                    <li class="follow_slide">Follow us on instagram<br><a href="https://www.instagram.com/karmaresorts/" target="_blank" title="Follow Karma on Instagram"><span>@KarmaResorts</span></a></li>
	                </ul>
	            </div><!-- /.insta_slider -->
	        </div>
	    </div>
	</div><!-- #social_section -->
	<script>
	$(function() {
	    var feed = new Instafeed({
	        get: "user",
	        userId: 348650379,
	        clientId: "749dffcb23994193b0910792c97dac86",
	        template: "<li><a href=\'{{link}}\' target=\'_blank\'><img src=\'{{image}}\' /></a></li>",
	        resolution: "standard_resolution",
	        limit: 10
	    });
	    feed.run();
	});
	</script>';
	return $html;
}

?>
