<?php
/**
* Template Name: Exclusive Offers Page
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/


get_header(); ?>

<style>
#karma div.banner-flex-grid h1 {
	margin: 0;
}



@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px)  {
	.banner-flex-grid {
	   background-position: center center;
	}
}

div.content-item {
    padding: 20px 170px 0px;
}
@media (max-width: 1024px){
div.content-item {
    padding: 20px 20px 0px!important;
}}
@media (max-width: 768px){
.banner-title h1 {
    font-size: 34px !important;
}}
</style>

<?php
$fields = array(
	'heading' => get_field('heading'),
	'offer_detail_1_title' => get_sub_field('offer_detail_1_title'),
	'terms' => get_field_object('terms_and_conditions'),
	'address' => get_field_object('address'),
	'body' => get_field('body'),
	'bookNowUrl' => get_field('book_now_url'),
	'open_new_tab' => the_sub_field('open_new_tab')
);
$postId = $post->ID;
?>


<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="banner-flex-grid" style="background-image: url('<?php echo $thumb['0'];?>');">
		<div class="banner-title">
			<h1><?php the_title() ?></h1>
		</div>
</div>
<div class="booking-bar">
	<?php require_once get_template_directory(). '/booking/bookingbar.php';
	echo $booking_html;
	?>
</div>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="flex-grid">
			<div class="content-flex-grid">
				<div class="content-item">
					<h2 class="offer-heading"><strong><?php echo $fields['heading']?></strong></h2>
					<p class="offer-body">
						<?php echo $fields['body'] ?>
					</p>
					<div class="details-flex">
					<?php if( have_rows('offers_details') ): ?>

						<?php while( have_rows('offers_details') ): the_row(); ?>
							<div class="offer-details">
								<h3><?php the_sub_field('details_title'); ?></h3>
								<p><?php the_sub_field('details_body'); ?></p>
								<?php 
								if($post->ID == '12514'){ ?>
									<a class="button_outline gold" id="spawellbeingbutton" href="#" >BOOK NOW</a>
								<?php 
								}
								else{
								?>
									<a class="button_outline gold" href="<?php the_sub_field('book_now'); ?>" <?php echo get_sub_field('open_new_tab') == true ? 'target=_blank rel="noopener"':""; ?>><?php echo ($post->ID == '7527'|| $post->ID == '8361') ? 'Buchen Sie jetzt' : 'BOOK NOW'; ?></a>
								<?php
								}
								?>								
							</div>
				<?php endwhile;  ?>
				<?php endif; ?>
				</div>
				<span><strong><?php echo ($post->ID == '7527' || $post->ID == '8361') ? 'Adresse' : $fields['address']['label']?></strong></span>
				<p class="offer-address">
					<?php echo $fields['address']['value']?>
				</p>				
				<?php 
					if(!empty($fields['terms']['value'])){
						?>							
							<span><strong><?php echo ($post->ID == '7527' || $post->ID == '8361') ? 'Allgemeine Geschäftsbedingungen' : $fields['terms']['label']?></strong></span>
							<p class="offer-terms"><?php echo $fields['terms']['value']?></p>
						<?php
					}
				?>
				</div>
				<div class="flex-gallery">
					<?php

					$images = get_field('supporting_images');

					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="offer-image">
							<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<a id="offers-back-button" class="button_outline gold" href="./exclusive-offers">BACK TO OFFERS</a>
		</div>
		<div class="exclusive-offers">
			<h4>More Exclusive Offers</h4>
			<ul><li><a href="https://karmagroup.com/edm-monthly-offers/resorts-offers/designed-for-lovers-of-relaxation/">Designed for lovers of relaxation</a></li></ul>
			<ul><li><a href="https://karmagroup.com/edm-monthly-offers/resorts-offers/limited-time-offer/">Limited Time Offer</a></li></ul>		
			<ul><li><a href="https://karmagroup.com/edm-monthly-offers/resorts-offers/beach-bums-with-a-birthday-coming-up-this-ones-for-you/">Beach bums with a birthday coming up? This one’s for you!</a></li></ul>
			<?php $offers = new WP_Query(array(
				'post_type' => 'exclusive_offers'
			)); ?>
			<?php while ($offers->have_posts()) : $offers->the_post(); 
			
			    $meta = get_post_meta(get_the_ID());
			    $ex_link = $meta['external_link'][0];
			    if(trim($ex_link) != ''){
			    $link_more = $ex_link;
			    }else{
			    $link_more = get_permalink($event_id);//the_permalink();
			    }
			?>
				<ul>
					<li>
						<a href="<?php echo $link_more; ?>"><?php the_title()?></a>
					</li>
				</ul>
			<?php endwhile; ?>
	
		</div>
	</div>
</main><!-- .site-main -->
</div><!-- .content-area -->
<script>
$(document).ready(function(){
	var resortList = {
            "13943": {
                resortName: "Karma Spa at Karma Kandara",
                tag: "karma-kandara",
                retreatsName: "Holistic Fitness Retreats at Karma Kandara"
            },
            "12285": {
                resortName: "Karma Spa at Karma Kandara",
                tag: "karma-kandara",
                retreatsName: "Slide into Sunday Wellness with Karma"
            },
            "13961": {
                resortName: "Karma Spa at Karma Kandara",
                tag: "karma-kandara",
                retreatsName: "Holistic Yoga Retreats at Karma Kandara"
            },
            "13971": {
                resortName: "Karma Spa at Karma Kandara",
                tag: "karma-kandara",
                retreatsName: "Holistic Detox Retreats at Karma Kandara"
            },
            "18291": {
                resortName: "Karma Spa at Karma Jimbaran",
                tag: "karma-jimbaran",
                retreatsName: "Karma Jimbaran 2, 3, 5 and 7-night Recharge getaways"
            },
            "21994": {
                resortName: "Karma Spa at Karma Kandara",
                tag: "karma-kandara",
                retreatsName: "Ocean ‘Segara’ Spa"
            }
		};
		$('body').on('click', 'a.button_outline:contains("BOOK NOW")', function(e) {            
			var href = $(this).attr('href');
			if(href === "#spa-book"){
				e.preventDefault();
				var id = "<?php echo $postId; ?>";
				console.log(resortList[id]);
            	showSpaAndWellbeingEnquiryForm(resortList[id]);
			}                                    
        });
});
</script>


<?php get_footer(); ?>

