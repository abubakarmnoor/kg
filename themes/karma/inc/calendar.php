<div id="events_calendar">
	<div class="container">
		<form id="filter_event_date" action="" method="get">
			<select name="filter_month" onChange="this.form.submit();">
				<option value="">Filter by Month...</option>
				<?php 
				for ($i=1;$i<=12;$i++) { 
					$month = date('F',strtotime('1970-'.str_pad($i, 2, '0', STR_PAD_LEFT).'-01'));
					?>
					<option <?php echo ($_GET['filter_month'] === $month ? 'selected="selected"' : '' );?> 
					value="<?php echo $month;?>"><?php echo $month;?></option>
				<?php } ?>
			</select>
		</form>
	
<div class="events cf">
<?php
$args = array('numberposts'	=> -1,
				'post_type'		=> 'page');
$args['meta_key'] = 'news_category';
$args['meta_value']	= 'Events';
$args['meta_compare'] = 'LIKE';
$args['exclude'] = karma_get_calendar_page_id();
$pages = get_posts($args);
$display_count = 0;

if(count($pages) > 0) {
 foreach ($pages as $page):
	$title = $page->post_title;
	$url = get_permalink($page->ID);
	$thumb = wp_get_attachment_image_url(get_post_meta($page->ID, 'news_image',1), 'full');
	$pageCreated = date('F j, Y', strtotime($page->post_date));
	if (isset($_GET['filter_month']) && $_GET['filter_month'] != date('F', strtotime($page->post_date))) {
		continue;
	}
	$display_count++;
	// need to get news article desc from acf field Main Content > Contained Content > content
	if( have_rows('area', $page->ID) ) {
    	while( have_rows('area', $page->ID) ) {
    		the_row();
    		while (have_rows('blocks')) {
    			the_row();
	   			$block_name = get_row_layout();
				if ($block_name == 'contained_content') {
			        $page_content = get_sub_field('content');
			        $description = karma_shortenTextWord($page_content, 300);
				}
    		}
		} 
	}
	$news_categories = get_post_meta($page->ID, 'news_category');
?>

		
	<div class="event">
		<img src="<?php echo $thumb;?>" alt="<?php echo $title; ?>">
		<div class="lower_content">
			<div class="title"><?php echo $title; ?></div>
			<div class="description"><p><?php echo $description; ?></p></div>
			<a href="<?php echo $url; ?>" class="button_outline blue" title="View <?php echo $title; ?>">View Event</a>
		</div>
	</div>
<?php endforeach; 	
}

if ($display_count == 0) {
	echo "<strong><br><br>No events to display</strong><br>Please try searching a different month.";
} 
		?>
		</div>
	</div>
</div>
