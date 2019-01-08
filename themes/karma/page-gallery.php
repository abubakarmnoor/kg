<?php
/**
 * Template Name: Gallery Page
 */

get_header(); 
$page_id = get_the_ID();

$gid_pid = array();
$gid_pid['7729'] = 2; //BAVARIA
$gid_pid['7731'] = 5; //JIMBARAN
$gid_pid['7734'] = 1; //KANDARA
$gid_pid['7736'] = 12; //ROTTNEST
$gid_pid['7738'] = 14; //CAY TRE
$gid_pid['7740'] = 3; //CHAKRA
$gid_pid['7742'] = 4; //HAVELI
$gid_pid['7744'] = 9; //MAYURA
$gid_pid['7746'] = 11; //REEF
$gid_pid['7748'] = 24; //MARTINS
$gid_pid['7751'] = 19; //MONTERIO
$gid_pid['7753'] = 15; //BELLA VISTA / CHIANG MAI
$gid_pid['7755'] = 29; //BENAULIM
$gid_pid['7757'] = 21; //ROYAL PHUKET
$gid_pid['7759'] = 13; //ROYAL CANDIDASA
$gid_pid['7761'] = 16; //HAATHI MAHAL
$gid_pid['7763'] = 18; //ROYAL JIMBARAN
$gid_pid['7765'] = 20; //ROYAL PALMS
$gid_pid['7767'] = 22; //ROYAL SANUR
$gid_pid['7769'] = 10; //Pelikanos, Mykonos
$gid_pid['7771'] = 8; //Karma Le Preverger
$gid_pid['7773'] = 30; //Karma Sanctum Soho
$gid_pid['8288'] = 31;
$gid_pid['8287'] = 32;
//$gid_pid['10203'] = 33; 
$gid_pid['10616'] = 34; 
$gid_pid['10927'] = 35; 
$gid_pid['11152'] = 36; //minoan
$gid_pid['11786'] = 38;//Borgo Di Colleoli
//manoir
$gid_pid['11566'] = 39;
$gid_pid['11510'] = 39;
//manoir
$gid_pid[''] = 38;
//normande
$gid_pid['11789'] = 40;
//normande
$gid_pid['12140'] = 41;
$gid_pid['21062'] = 42;
?>
<div id="type-location" class="post_type-<?php echo $post->post_type;?>">
	
	<div class="main_content">
	<?php
	/*$area = 'Main Content';
	$rendered = karma_render_blocks($page_id, array());
	if (isset($rendered[$area])) {
		echo $rendered[$area];
	}
	*/
	$gallery_id = false;
	if (isset($_GET['id'])) {
		$gallery_id = $_GET['id'];
	}elseif(isset($gid_pid[$page_id])){
		$gallery_id = $gid_pid[$page_id];
		    }
	$pagenum = 1;
	if(isset($_GET['pid'])) {
		$pagenum = $_GET['pid'];
	}
	$gallery_images = karma_getGalleryImages($gallery_id, $pagenum);
	$page_count = karma_getGalleryPageCount($gallery_id);
	$slide = array('image' => array('url' => $gallery_images[0]->url));
	$fields = array(
	'title' => karma_getGalleryTitle($gallery_id),
	'sub_title' => '',
	'text_content' => 'Gallery',
	'logo' => '',
	'text_color' => '',
	'hide_find_destination' => false,
	'show_background_shadow' => true,
	'slides' => array($slide),
	'include_booking_bar' => false,
	'add_top_padding' => false
			);
	include 'inc/blocks/banner_slider.php';
	echo $html;
	include 'inc/gallery.php';
	?>
	</div>
	
</div><!-- #type -->
<?php get_footer(); ?>
