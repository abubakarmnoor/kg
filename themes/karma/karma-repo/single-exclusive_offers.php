<?php
/**
* Template Name: Exclusive Offers Page
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/


get_header(); ?>

<?php
$fields = array(
	'heading' => get_field('heading'),
	'offer_detail_1_title' => get_sub_field('offer_detail_1_title'),
	'terms' => get_field_object('terms_and_conditions'),
	'address' => get_field_object('address'),
	'body' => get_field('body'),
	'bookNowUrl' => get_field('book_now_url')
);?>

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
								<a class="button_outline gold" href="<?php the_sub_field('book_now'); ?>" target="_blank"><?php echo ($post->ID == '7527'|| $post->ID == '8361') ? 'Buchen Sie jetzt' : 'BOOK NOW'; ?></a>
							</div>
				<?php endwhile;  ?>
				<?php endif; ?>
				</div>
				<span><strong><?php echo ($post->ID == '7527' || $post->ID == '8361') ? 'Adresse' : $fields['address']['label']?></strong></span>
				<p class="offer-address">
					<?php echo $fields['address']['value']?>
				</p>
				<span><strong><?php echo ($post->ID == '7527' || $post->ID == '8361') ? 'Allgemeine Geschäftsbedingungen' : $fields['terms']['label']?></strong></span>
				<p class="offer-terms">
					<?php echo $fields['terms']['value']?>
				</div>
				<div class="flex-gallery">
					<?php

					$images = get_field('supporting_images');

					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="offer-image">
							<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
							<p><?php echo $image['caption']; ?></p>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<a id="offers-back-button" class="button_outline gold" href="./exclusive-offers">BACK TO OFFERS</a>
		</div>
		<div class="exclusive-offers">
			<h4>More Exclusive Offers</h4>
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

<?php get_footer(); ?>