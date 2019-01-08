<?php
$countNews = get_sub_field("number_of_news_post");
$countBlog = get_sub_field("number_of_blog_post");
$blogStyle = get_sub_field("blog_style");
$highLights = get_sub_field('highlights_content');
if($countBlog > 0){
	$blogData = json_decode(file_get_contents("https://karmagroup.com/blog/wp-json/wp/v2/posts/?per_page=".$countBlog));
}
$carouselPosts = array();
function my_posts_where( $where ) {
	
	$where = str_replace("meta_key = 'publish_in_slider", "meta_key LIKE '%publish_in_slider", $where);

	return $where;
}

add_filter('posts_where', 'my_posts_where');

function compare($a,$b){
	if($a->date < $b->date){
		return true;
	}
	else{
		return false;
	}
}

$query = new WP_Query(array(
	'post_type' => 'page',
    'post_parent' => 279,
    "posts_per_page" => $countNews,
	'meta_query'	=> array(
		'relation'		=> 'AND',		
		array(
			'key'	  	=> 'include_in_slider',
			'value'	  	=> true,
			'compare' 	=> '=',
		),
	),	
));

$postLists = $query->posts;
foreach($postLists as $post){	
	array_push($carouselPosts,(object) array(
		"date" => strtotime($post->post_date_gmt),
		"stingDate" => $post->post_date_gmt,
		"aDate" => strtotime($post->post_date),
		"title" => get_post_meta($post->ID, 'title', true) == "" ? $post->post_title : get_post_meta($post->ID, 'title', true),
		"excerpt" => '<p>'.get_post_meta($post->ID, 'excerpt', true).'</p>',
		"link" => get_post_meta($post->ID, 'link', true) == "" ? get_permalink($post->ID) : get_post_meta($post->ID, 'link', true),
		"link_text" => get_post_meta($post->ID, "link_text", true),
		"thumbnail" => wp_get_attachment_image_url(get_post_meta($post->ID, "news_image", true), "full"),
		"image_alt" => get_post_meta($post->ID, "image_alt", true)
	));					
	while(have_rows('area', $post->ID)) {					
		the_row();				
		while (have_rows('blocks')) {					
			the_row();
			$block_name = get_row_layout();			
			if($block_name == "banner_slider"){
				$slide = get_sub_field('slides')[0];
				$imageUrl = $slide['image']['url'];					
			}
			if ($block_name == 'contained_content') {									
				$page_content = get_sub_field('content');				
				$tempExc = karma_shortenTextWord($page_content, 180);									
			}				
			if(isset($imageUrl) && $carouselPosts[count($carouselPosts) - 1]->thumbnail == ""){
				$carouselPosts[count($carouselPosts) - 1]->thumbnail = $imageUrl;
			}									
		}
		if(isset($tempExc) && $carouselPosts[count($carouselPosts) - 1]->excerpt == "<p></p>"){
			$carouselPosts[count($carouselPosts) - 1]->excerpt = '<p>'.$tempExc.'</p>';			
		}		
	} 
};

if($blogStyle == "combine"){
	if(isset($blogData)){
		foreach($blogData as $blog){	
			array_push($carouselPosts,(object) array(
				"date" => strtotime($blog->date_gmt),
				"stingDate" => $blog->date_gmt,
				"aDate" => strtotime($blog->date),
				"title" => $blog->title->rendered,
				"excerpt" => $blog->excerpt->rendered,
				"link" => $blog->link,
				"link_text" => "Read on Karma Group Blog",
				"thumbnail" => $blog->featured_media_url,
				"image_alt" => "Karma Group Blog".$blog->title->rendered
			));
		}
	}	
}

usort($carouselPosts, "compare");
if(count($highLights) > 0){
	for($i = count($highLights) - 1; $i >= 0; $i--){
		if(!empty($highLights[$i])){
			array_unshift($carouselPosts, (object) $highLights[$i]);
		}		
	}	
}
ob_start();
$accordion_class = ' for-accordion';
$i = 0;
?>
<div class="cf for-accordion" id="carousel_cta_section">
    <div class="container wide cf for-accordion">
        <div class="carousel_container cf">
            <ul class="slides">
            <?php 
            foreach($carouselPosts as $post){
                $i++;
                if ($accordion_class) {
                    $alt_class = 'odd';
                    if ($i%2 == 0) {
                        $alt_class = 'even';
                    }?>
                    <div class="accordion-heading <?php echo $alt_class; ?> cta<?php echo $i; ?>">
						<div class="icon"><i class="fa" aria-hidden="true"></i></div>
						<?php echo $post->title; ?>
						<div class="indicator"></div>
					</div>
					<li class="accordion-content <?php echo $alt_class; ?> cta<?php echo $i; ?>">
            <?php }
                else{ ?>
                    <li>
                <?php }?>
                    <div class="carousel">
                        <div title="<?php echo $post->title ?>" alt="<?php echo $post->title ?>" class="image" style="background:url(<?php echo $post->thumbnail; ?>) center;background-size: cover"></div>
                        <div class="content">
                            <h1 id="changeTextSize" class="georgia_font italic">
                                <?php echo $post->title ?>
                            </h1>
                            <?php echo $post->excerpt; ?>
                            <a class="button_outline" href="<?php echo $post->link; ?>" title="<?php echo $post->link_text; ?>" alt="<?php echo $post->link_text; ?>" style="margin-bottom: 8px;">
                                <?php echo $post->link_text; ?>
                            </a>
                        </div>
                    </div>
                </li>
            <?php
            }
            ?>
            </ul>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    if(isMobile() == false) { // only use carousel slider on desktop
        $("#carousel_cta_section .carousel_container").flexslider({
            animation: "slide",
            slideshow: true,
            slideshowSpeed: 5000,
            animationSpeed: 600,
            move: 1,
            animationLoop: true,
            controlNav: false,
            pauseOnHover: true,
            prevText: " ",
            nextText: " ",
            minItems: getGridSize(),
            maxItems: getGridSize(),
            itemWidth: 210
        });

        // Chooses how many thumbnails to show depending on screen size.
        function getGridSize() {
        return ((window.innerWidth || document.documentElement.clientWidth) < 600) ? 1 :
            ((window.innerWidth || document.documentElement.clientWidth) < 1200) ? 2 : 3;
        }
        $(window).resize(function() {
            var gridSize = getGridSize();
            var vars = null;
            $("#carousel_cta_section .carousel_container").data("flexslider").vars.minItems = gridSize;
            $("#carousel_cta_section .carousel_container").data("flexslider").vars.maxItems = gridSize;        
        });
    }
})
</script>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>
