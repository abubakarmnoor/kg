<div id="resort_search" class="resort_search">
	<div class="container">
		<h2 class="search_result_title">You Searched for: <span style="font-weight: 400;"><?php echo $_GET['query']; ?></span></h2>

			<?php 
				
				$query = $wpdb->_real_escape($_GET['query']);
				$sql = 'SELECT DISTINCT post_id, MATCH (meta_value) AGAINST ("'.$query.'") as relevance 
						FROM wp_postmeta m LEFT JOIN wp_posts p ON m.post_id=p.ID WHERE post_status="publish" AND post_parent in(277,328,522,524) ORDER BY relevance DESC';
				//echo $sql;
				$results = $wpdb->get_results($sql) or die(mysql_error());
				$page_list = array();
				foreach ($results as $result) {
					if ($result->relevance > 0) {
						$page_list[$result->post_id] = get_post($result->post_id);
					}
				}
				if (count($page_list)) { ?>

				<div id="searchResults">
					<?php include 'search_result.php';?>
				</div><!-- #searchResults -->

			<?php } else { 
				// get some random resorts to show
				$sql = 'SELECT ID as post_id FROM wp_posts WHERE post_status="publish" AND post_parent in(277,328,522,524) ORDER BY RAND() LIMIT 5';
				$results = $wpdb->get_results($sql) or die(mysql_error());
				$page_list = array();
				foreach ($results as $result) {
					$page_list[] = get_post($result->post_id);					
				}
				?>
				<p>Unfortunately no results were found. Please search again or view our list of resorts on the dropdown menu above. Here is a selection of our resorts to browse:</p>
				<div id="searchResults">
					<?php include 'search_result.php';?>
				</div><!-- #searchResults -->

			<?php } ?>


	</div><!-- .container -->
</div><!-- #resort_search -->

