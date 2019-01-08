<?php
//header('Access-Control-Allow-Origin: *');
//header("Access-Control-Allow-Credentials: true");
//header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
//header('Access-Control-Max-Age: 1000');
//header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
//header("Content-Type: application/json;charset=utf-8");

header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
  header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
  header('Access-Control-Allow-Credentials: true');

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// $mysql_server = "localhost";
// $mysql_user_name = "root";
// $mysql_user_pass = "";
// $mysql_databasename = "karmagroup";

$mysql_server = "karma-sites1.cre4y4fpyfn5.ap-southeast-1.rds.amazonaws.com";
$mysql_user_name = "karmagroup";
$mysql_user_pass = 'WuPA!ruwra3u';
$mysql_databasename = "karmaprd";

$link = mysql_connect($mysql_server, $mysql_user_name, $mysql_user_pass) or die("Could not connect to MySQL database");
mysql_select_db($mysql_databasename) or die("Could not select database");

$field = 'exclusive_offers';

$countdata  = mysql_query("SELECT count(*) as total FROM wp_posts 

WHERE post_type = '". $field ."' and post_status = 'publish' 

order by post_date desc") or die(mysql_error());

$rowcount = mysql_fetch_array($countdata);

if($rowcount['total'] >= '1') { // jika data ada

$cekpost = mysql_query("SELECT ID, post_date, post_title, post_name, post_author FROM wp_posts 

WHERE post_type = '". $field ."' and post_status = 'publish' 

order by post_date desc") or die(mysql_error());


$data1 = array();
$data2 = array();

$index = 0;

while ($row = mysql_fetch_array($cekpost)) {


array_push($data1, array('ID' => $row['ID'], 'post_date' => $row['post_date'],'post_title' => $row['post_title'], 'guid' => 'https://karmagroup.com/exclusive_offers/'.$row['post_name'], 'post_author' => $row['post_author'])); 

$cekpost2 = mysql_query("SELECT meta_id, post_id, meta_key, meta_value FROM wp_postmeta

WHERE post_id = '".$row['ID']."' and meta_value !='' and meta_value !='0' order by meta_id desc") or die(mysql_error());

while ($row2 = mysql_fetch_assoc($cekpost2)) {

	if(
		$row2['meta_key']=='_thumbnail_id' ||
	    $row2['meta_key']=='address' ||
	    $row2['meta_key']=='offers_details' || 
	    $row2['meta_key']=='inclusions' ||
	    $row2['meta_key']=='body' ||
	    $row2['meta_key']=='heading' ||
	    $row2['meta_key']=='supporting_images' ||
	    $row2['meta_key']=='book_now_url' ||
	    $row2['meta_key']=='offers_details_0_details_title' ||
	    $row2['meta_key']=='offers_details_0_book_now' ||
	    $row2['meta_key']=='offers_details_0_details_body' ||
	    $row2['meta_key']=='book_now_landing_page' ||
	    $row2['meta_key']=='mobilenumber' || 
	    $row2['meta_key']=='terms_and_conditions'
	   ) {
		
		if($row2['meta_key']=='_thumbnail_id') {

		$cekpost3 = mysql_query("SELECT meta_id, post_id, meta_key, meta_value FROM wp_postmeta

								 WHERE post_id = '".$row2['meta_value']."'") or die(mysql_error());

		$row3 = mysql_fetch_assoc($cekpost3);

								$data1[$index]['hero_image'] = 'https://karmagroup.com/wp-content/uploads/'.preg_replace("/\r\n|\r|\n/",'<br/>',$row3['meta_value']);
		}
		else if($row2['meta_key'] == 'heading'){
			$data1[$index]['offerTitle'] = $row2['meta_value'];
		}
		else if($row2['meta_key'] == 'body'){
			$data1[$index]['description'] = $row2['meta_value'];	
		}
		else if($row2['meta_key'] == 'mobilenumber'){
			$data1[$index]['mobileNumber'] = $row2['meta_value'];
		}
		
		else if($row2['meta_key'] == 'inclusions'){
			$data1[$index]['offerInclusions'] = $row2['meta_value'];	
		}
		else if($row2['meta_key']=='supporting_images') {

			$string = $row2['meta_value'];
			$temp = explode('"',$string);

			$supportimg = 1;
			$count = 1;
			$data1[$index]['offerImages'] = array();
		while($supportimg < count($temp)){

			$cekpost3 = mysql_query("SELECT meta_id, post_id, meta_key, meta_value FROM wp_postmeta

								 WHERE post_id = '".$temp[$supportimg]."'") or die(mysql_error());

			$row3 = mysql_fetch_assoc($cekpost3);

			array_push($data1[$index]['offerImages'], 'https://karmagroup.com/wp-content/uploads/'.$row3['meta_value']);

			$supportimg += 2;
			$count++;
		}

		}
		else if($row2['meta_key']=='address') { 

			$string = $row2['meta_value'];
			$temp  = explode("\n", $string);

			$data1[$index]['address'] = array();
			$addressindex = 0;

		while($addressindex < count($temp)){
			
			$temp[$addressindex] = str_replace('?', '', $temp[$addressindex]);
			if($temp[$addressindex]!='') {
			array_push($data1[$index]['address'], preg_replace("/\r\n|\r|\n/",'',$temp[$addressindex] ));
			}
			$addressindex++;

		}	

		}	
		else {

		$data1[$index][$row2['meta_key']] = preg_replace("/\r\n|\r|\n/",'<br/>',$row2['meta_value']);
		
		}

		}

		//
		// phone number
		//

		if(!isset($data1[$index]['mobileNumber'])) {
			$data1[$index]['mobileNumber'] = '';
		}

}

$index++;

}


function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            	$d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }

    

     return $d;
 }

$content = '{  
   "status":1,
   "message":"Offers found successfully.",
   "offers":'.json_encode(utf8ize($data1)).'}';

echo $content;

}
else {

$content = '{  
   "status":0,
   "message":"Offers not found.",
   "offers":[]}';

echo $content;

}

?>
