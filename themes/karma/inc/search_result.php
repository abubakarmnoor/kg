<?php foreach ($page_list as $page): ?>
	<div class="grid-sizer" style="width: 50%;"></div>
	<div class="item_container">
		<div class="item">

			<?php if($resort_image = get_post_meta($page->ID, 'resort_image', 1)) {
			   	echo '<a href="' . get_permalink($page->ID) . '"><div class="" style="background:url(' . wp_get_attachment_url($resort_image) . ') center; background-size: cover; height: 260px;"></div></a>';
			} 
			?>
			<div class="content">
				<h2><a href="<?php echo get_permalink($page->ID); ?>"><?php echo karma_highlightedMarkup($page->post_title, $query); ?></a></h2>
				<p class="search_text"><?php echo karma_highlightedMarkup(get_post_meta($page->ID, 'meta_description', 1), $query); ?></p>
				<a href="<?php echo get_permalink($page->ID); ?>" class="page_link button_outline gold">View Resort</a>
			</div><!-- .content -->

		</div><!-- .item -->
	</div><!-- .item_container -->
<?php endforeach; ?>