<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
global $post;
$countNews = get_sub_field("number_of_news_post");
$countBlog = get_sub_field("number_of_blog_post");
$blogStyle = get_sub_field("blog_style");
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
			'key'	  	=> 'publish_in_slider',
			'value'	  	=> true,
			'compare' 	=> '=',
		),
	),	
));

$postLists = $query->posts;
foreach($postLists as $post){		
	while(have_rows('area', $post->ID)) {	
		the_row();				
		while (have_rows('blocks')) {		
			the_row();
			$block_name = get_row_layout();			
			$tempExc;
			if ($block_name == 'contained_content') {
				$page_content = get_sub_field('content');
				$tempExc = karma_shortenTextWord($page_content, 180);				
			}
			if($block_name == "banner_slider"){				
				$slide = get_sub_field('slides')[0];
				$imageUrl = $slide['image']['url'];								
			}
			if ($block_name == 'include_in_slider') {
				array_push($carouselPosts,(object) array(
					"date" => strtotime($post->post_date_gmt),
					"stingDate" => $post->post_date_gmt,
					"aDate" => strtotime($post->post_date),
					"title" => get_sub_field('title') == "" ? $post->post_title : get_sub_field('title'),
					"excerpt" => get_sub_field('excerpt') == "" ? '<p>'.$tempExc.'</p>' : get_sub_field('excerpt'),
					"link" => get_sub_field('link') == "" ? get_permalink($post->ID) : get_sub_field('link'),
					"link_text" => get_sub_field("link_text"),
					"thumbnail" => get_sub_field("image_thumbnail") == "" ? $imageUrl : get_sub_field("image_thumbnail"),
					"image_alt" => get_sub_field("image_alt")
				));				
			}
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
echo "masup";
print_r($carouselPosts);
if($blogStyle == "float"){
	$html = '
	<style>
		#floating-blog-ico{
			background: url(https://dev.karmagroup.com/WP/wp-content/uploads/2018/05/read-our-blog-1-12268.png) no-repeat;
			background-size: 100% 100%;
			width: 130px;
			height: 130px;
			position: absolute;						
			opacity: .75;
			box-shadow: 0 0 30px rgba(0, 0, 0, .3);
			border-radius: 500px;
			cursor: pointer;
		}
		.anchor-blog{
			width: 130px;
			height: 130px;
			position: absolute;
			top: 80px;
			right: 115px;	
			z-index: 10;		
		}
		#floating-blog-ico:hover{
			opacity: 1;
			transition: opacity .25s ease;
		} 
		.anchor-blog-btn{
			background-color: #8a6f47;
			padding: 10px;
			color: #fff !important;
			border: 10px solid #fff;
			box-shadow: 0 0 30px rgba(0, 0, 0, .3);
		}
		.anchor-blog-parent{
			padding: 40px 20px;
			text-align: center;
			display: none;
		}
		@media only screen and (max-width: 990px) {
			.anchor-blog {
				display: none;
			}
			.anchor-blog-parent{
				display: block;
			}
		}
	</style>
	<a class="anchor-blog" href="https://karmagroup.com/blog/" target="_blank"><div id="floating-blog-ico"></div></a>
	<script>
	$(document).ready(function(){$(".anchor-blog").parent().css("position","relative");})
	</script>
	';
}

$accordion_class = ' for-accordion';
$html .= '<div class="cf'.$accordion_class.'" id="carousel_cta_section">
			<div class="container wide cf'.$accordion_class.'">
				<div class="carousel_container cf">';
$html .= '<ul class="slides">';
$i = 0;

foreach($carouselPosts as $post){
	$i++;
	if ($accordion_class) {
		$alt_class = 'odd';
		if ($i%2 == 0) {
			$alt_class = 'even';
		}
		$html .= '<div class="accordion-heading '.$alt_class.' cta'.$i.'">
						<div class="icon"><i class="fa" aria-hidden="true"></i></div>
						'.$post->title.'
						<div class="indicator"></div>
					</div>
					<li class="accordion-content '.$alt_class.' cta'.$i.'">';
	} else {
		$html .= '<li>';
	}
	$html .= '<div class="carousel">';
	$link = $post->link;
	$linkText = $post->link_text;
	
	$html .= '<div title="' .$post->title. '" alt="' .$post->title. '" class="image" style="background:url(' .$post->thumbnail. ')  center;background-size: cover"></div>';


	$html .= '<div class="content">';
	$html .= '<h1 id="changeTextSize" class="georgia_font italic">' .$post->title. '</h1>'; //last_h3, no id
	$html .= $post->excerpt;
	$html .= '<a class="button_outline" href="' .$link. '" target="_blank" rel="noopener" title="' .$linkText. '" title="' .$linkText. '" alt="' .$linkText. '" style="margin-bottom: 8px;">' .$linkText. '</a>';

	$html .= '</div></div></li>';
}
$html .= '</ul></div></div>';

if($blogStyle == "float"){
	$html .= '<div class="anchor-blog-parent"><a href="https://karmagroup.com/blog/" class="anchor-blog-btn" target="_blank">READ OUR BLOG</a></div>';
}
$html .= '</div>';
if($blogStyle == "split"){
	$html .= '<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
	$html .= '
	<style>
	.blog-wrapper{
		height: 250px;
		background-size: cover;
		padding: 0 5px;
		border: 2px solid #fff;
		padding: 0;
		text-align: center;
	}
	
	.blog-overlay{
		position: absolute;
		background: #212121b5;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		opacity: 1;
		transition: opacity .25s ease;
		padding: 10px;
	}
	
	a:hover .blog-overlay{
		opacity: 0;
		transition: opacity .25s ease;
	}
	a:hover .btn-read{
		opacity: 1;
		transition: opacity .25s ease;	
	}
	
	.blog-title{
		font-family: Georgia,Times,"Times New Roman",serif !important;
		font-size: 18px;
		font-style: italic;
		color: #fff;
	}
	
	.blog-title img{
		width: 100px;
		height: auto;	
	}
	
	.blog-karma-logo{
		width: 100px;
		height: auto;
		position: absolute;
		bottom: 10px;
		left: 10px;
	}
	
	.btn-read{
		padding: 10px;
		color: #fff;
		font-size: 14px;
		background-color: rgb(141, 114, 73);
		display: inline-block;
		border: 5px solid #fff;	
		margin-top: 100px;
		opacity: 0;
		transition: opacity .25s ease;
	}
	
	.blog-row{
		margin: 0;
	}
	
	.wording-blog{
		font-family: Georgia,Times,"Times New Roman",serif !important;
		font-size: 24px;
		display: block;
		text-align: center;
		font-style: italic;
		margin: 10px 0;
	}
	</style>
	<a href="https://karmagroup.com/blog/" class="wording-blog">READ OUR BLOG</a>
	<section class="row blog-row">';
	for($index = 0; $index < 6; $index++){
		$html .= '
		<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 blog-wrapper" style="background: url('.$blogData[$index]->featured_media_url.') center;">
			<a href="'.$blogData[$index]->link.'" target="_blank">
				<div class="blog-overlay">				
					<p class="blog-title">'.$blogData[$index]->title->rendered.'</p>
					<img class="blog-karma-logo" src="https://dev.karmagroup.com/WP/wp-content/uploads/2016/10/karma-group-logo-white-3.png" alt="karma group logo"/>
				</div>	
				<div class="btn-read">READ ON OUR BLOG</div>
				<img class="blog-karma-logo" src="https://dev.karmagroup.com/WP/wp-content/uploads/2016/10/karma-group-logo-white-3.png" alt="karma group logo"/>		
			</a>
		</div>
		';
	}
	$html .= '</section>';
}
$html .= '<script>
$(document).ready(function() {';
if ($accordion_class) {
$html .= 'if(isMobile() == false) { // only use carousel slider on desktop
';
}
$html .= '$("#carousel_cta_section .carousel_container").flexslider({
animation: "slide",
slideshow: true,
slideshowSpeed: 5000,
controlNav: false,
prevText: " ",
nextText: " ",
minItems: getGridSize(),
maxItems: getGridSize(),
move: getGridSize(),
itemWidth: 210
});

// Chooses how many thumbnails to show depending on screen size.
function getGridSize() {
return ((window.innerWidth || document.documentElement.clientWidth) < 600) ? 1 :
((window.innerWidth || document.documentElement.clientWidth) < 1200) ? 2 : 3;
}';
if ($accordion_class) {
$html .= '
}';
}
$html .= '
// Dynamically tells flexslider how many thumbs to show.
$(window).resize(function() {
var gridSize = getGridSize();
var vars = null;
$("#carousel_cta_section .carousel_container").data("flexslider").vars.minItems = gridSize;
$("#carousel_cta_section .carousel_container").data("flexslider").vars.maxItems = gridSize;
// $("#product_carousel").data("flexslider").vars.move = gridSize;
});
});
</script>';
?>

