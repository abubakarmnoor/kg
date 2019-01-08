<?php header('Content-Type: application/json');
/**
 * Template Name: NEWS JSON
 */
?><?php

function limitString($string, $limit = 100) {
    // Return early if the string is already shorter than the limit
    if(strlen($string) < $limit) {return $string;}

    $regex = "/(.{1,$limit})\b/";
    preg_match($regex, $string, $matches);
    return $matches[1];
}

	// echo substr(strip_tags('<b>abcdefghijklm'), 0, 5);


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

				// echo "<pre>";
				// 	print_r($pages);
				// echo "<pre>";

				$json = array();
				$i=0;
				
				foreach ($pages as $page) {

					$subdata = get_post_meta($page->ID);
					// echo $subdata['area_0_blocks_1_content'];

						//echo "<pre>"; print_r($subdata); echo "<pre>";
					$image_url = wp_get_attachment_url($subdata['area_0_blocks_0_slides_0_image'][0]);

					$json[$i]['title'] = $page->post_title;
					$json[$i]['path'] = get_permalink($page->ID);
					$json[$i]['src'] = $image_url;

					$full_content = preg_replace('/\s+?(\S+)?$/', '', $subdata['area_0_blocks_1_content']);

					$snippet = preg_replace('/<[^>]*>/', '', $full_content[0]);
					
					$json[$i]['snippet'] = limitString($snippet);
					
					$json[$i]['content'] = preg_replace('#(<h2[^>]*><a[^>]*>).*?(</a></h2>)#', '', $subdata['area_0_blocks_1_content']);				
					
					
					$link = $subdata['area_0_blocks_1_content'][0];
					preg_match_all('/<a[^>]+href=([\'"])(?<href>.+?)\1[^>]*>/i', $link, $result);
					
					$result = array_reverse($result);
					if (!empty($result)) {
					$json[$i]['link'] = $result['href'][0];
					}
					if(count(explode('.pdf', $json[$i]['link'])) > 1){
					$json[$i]['link_label'] = 'download';
					}else{
					$json[$i]['link_label'] = 'read more';
					}

					$i++;
				}

					//echo "<pre>"; print_r($json); echo "<pre>";

					echo json_encode($json, JSON_PRETTY_PRINT);