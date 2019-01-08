<div id="news_list" class="news_list">
	<div class="search_filter">
		<div class="container wide">
			<p>Filter by your karma taste</p>
			<form action="" method="get"><!-- up 08/06/2016 22:57 -->
				<a href="<?php echo get_option( 'siteurl' ); ?>/news-events/" style="<?php echo (empty($_GET['category']) ? 'color: #87714d;' : 'color: #54565b;'); ?>" title="Show All">Show All</a>
				<?php
				$args = array('numberposts'	=> -1,
								'post_type'		=> 'page');
				$args['exclude'] = karma_get_calendar_page_id();
				if (isset($_GET['category'])) {
					$args['meta_key'] = 'news_category';
					$args['meta_value']	= $_GET['category'];
					$args['meta_compare'] = 'LIKE';
				} else {
					$args['post_parent'] = karma_get_news_parent_id(); 
				}
				$pages = get_posts($args);
				$newsCategory = array('News','Events','Awards','Press','Music');
				$counter = 0;
				foreach ($newsCategory as $category) {
				$count = $counter++;

				if (isset($_GET['category']) && $_GET['category'] == $category) {
						echo '<input class="selected" id="category_option_' . $count . '" type="checkbox" name="category" value="' . $category . '" onChange="this.form.submit()">';
						echo '<label title="'.$category.'" style="color: #87714d;" class="selected" for="category_option_' . $count . '">' . $category . '</label>';
					} else {
						echo '<input id="category_option_' . $count . '" type="checkbox" name="category" value="' . $category . '" onChange="this.form.submit()">';
						echo '<label title="'.$category.'" for="category_option_' . $count . '">' . $category . '</label>';
					}
				}
				?>
				<a href="<?php echo get_option( 'siteurl' ); ?>/news-events/calendar" style="color: #54565b;" title="Calendar" >Calendar</a>
			</form>
		</div><!-- .container -->
	</div><!-- .search_filter -->

	<div class="page_list container wide">
	<?php
	if (isset($_GET['pg'])) {
		$pg = $_GET['pg'];
	} else {
		$pg = 1;
	}
	$page_limit = 8;
	$start = (isset($_GET['pg']) && $_GET['pg'] > 1) ? (($_GET['pg']-1) * $page_limit)+1 : 1;
	$end = isset($_GET['pg']) ? $_GET['pg'] * $page_limit : $page_limit;
	if(count($pages) > 0) {
		$i = 0;
		 foreach ($pages as $page):
		 	$i++;
		 	if ($i < $start || $i > $end) {
		 		continue;
		 	}
			$title = $page->post_title;
			$url = get_permalink($page->ID);
			$thumb = wp_get_attachment_image_url(get_post_meta($page->ID, 'news_image',1), 'full');
			$pageCreated = date('F j, Y', strtotime($page->post_date));
			
			// need to get news article desc from acf field Main Content > Contained Content > content
			if( have_rows('area', $page->ID) ) {
     			while( have_rows('area', $page->ID) ) {
     				the_row();
     				while (have_rows('blocks')) {
     					the_row();
		     			$block_name = get_row_layout();
						if ($block_name == 'contained_content') {
					        $page_content = get_sub_field('content');
					        $description = karma_shortenTextWord($page_content, 180);
						}
     				}
				} 
			}
			
			$news_categories = get_post_meta($page->ID, 'news_category');
	?>
		<div class="news_item cf">
			<div class="left_content left">
				<div class="article_image" style="background: url('<?php echo $thumb ?>') no-repeat;"></div>
			</div><!-- .left_content -->
			<div class="right_content right">
				<?php
                                        if($page->ID == 8531){
                                        ?>
                                                <a class="title" title="<?php echo $title ?>  href="https://karmagroup.com/charity/christel-house-update/"><?php echo $title ?></a>
                                        <?php
                                        }
                                        else{
                                        ?>
                                                <a class="title" title="<?php echo $title ?>" href="<?php echo $url ?>"><?php echo $title ?></a>
                                        <?php
                                        }
                                ?>
				<!-- <span class="published"><?php echo $pageCreated; ?></span> -->
				<div class="description">
					<?php echo $description ?>
				</div>
				<?php
                                        if($page->ID == 8531){
                                        ?>
                                                <a href="https://karmagroup.com/charity/christel-house-update/" title="Read Article" class="button_outline black">Read Article</a>
                                        <?php
                                        }
                                        else{
                                        ?>
                                                <a href="<?php echo $url ?>" title="Read Article" class="button_outline black">Read Article</a>
                                        <?php
                                        }
                                ?>

			</div><!-- .left_content -->
		</div>
		<?php endforeach; 
		} else {
			echo "<strong>No news or events to display</strong><br>Please try searching a different category.";
		} ?>
	</div><!-- .page_list.container -->

	<?php if (count($pages) > $page_limit): 
			if (isset($_GET['category'])) {
				$cat_link = 'category='.$_GET['category'].'&';
			}
	?>
		<div id="pagination">
			<div class="container wide">
				<div class="ccm-spacer"></div>
				<div class="ccm-pagination">
					<span class="ccm-page-left">
					<?php if (isset($_GET['pg']) && $_GET['pg'] > 1) { ?>
						<a href="<?php echo get_option( 'siteurl' ); ?>/news-events/?<?php echo $cat_link;?>pg=<?php echo $pg-1;?>" title="Previous">Previous</a>
					<?php } else {
						echo '<span class="ltgray" title="Previous">Previous</span>';
					}?>
					</span>
					<?php 
					for ($i=1;$i < (count($pages)/$page_limit)+1;$i++) {
						if ($i == $pg) {
							echo '<span class="currentPage active numbers" title="page '.$i.'"><strong>'.$i.'</strong></span>';
						} else {
							echo '<span class=" numbers"><a href="'.get_option( 'siteurl' ).'/news-events/?'.$cat_link.'pg='.$i.'" title="page '.$i.'">'.$i.'</a></span>';
						}
					}?>
					<span class="ccm-page-right">
					<?php 
					if (count($pages) > $end ) {
						//echo 'count($pages)=['.count($pages).']';
						//echo '$page_limit=['.$page_limit.']';
						//echo '$start='.$start.'$end='.$end;						
						?>
						<a href="<?php echo get_option( 'siteurl' ); ?>/news-events/?<?php echo $cat_link;?>pg=<?php echo $pg+1;?>" title="Next" >Next</a>						
					<?php } else {
						echo '<span class="ltgray" title="Next">Next</span>';
					}?>
					</span>
				</div>
			</div><!-- .container -->
		</div>
	<?php endif; ?>


</div><!-- end .news_list -->
