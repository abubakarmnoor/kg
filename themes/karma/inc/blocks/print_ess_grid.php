<?php
// error_reporting(~0);
// ini_set('display_errors', 1);
ob_start();
$grid_shortcode = get_sub_field('grid_shortcode')
?>
<div id="contained_content" style="margin: 50px auto;">
    <?php 
        echo do_shortcode($grid_shortcode);     
    ?>
</div>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>
