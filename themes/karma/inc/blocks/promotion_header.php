<?php ob_start();
$kgLogo = get_sub_field("karmagroup_logo");
$kgUrl = get_sub_field("karmagroup_link");
$promotionLogo = get_sub_field("promotion_logo");
$promotionUrl = get_sub_field("promotion_link");

?>
<script>
$("header").remove();
</script>
<style>
#karma header .logo{
    width: 100%;
    text-align: center;
}
@media screen and (max-width: 480px){
    #karma header .logo {
        max-width: unset
    }
    #karma .logo-promotion{
        width: 100px;
        height: auto;
    }
}
</style>
<header class="fixed-header">
        <div class="container cf">
            
            <div class="logo">
                <a href="<?php echo $kgUrl ?>"><img class="logo-promotion" src="<?php echo $kgLogo ?>" alt="Karma Group Logo" title="Karma Group – Luxury Hotels and Resorts"></a>
                <a href="<?php echo $promotionUrl ?>"><img class="logo-promotion" src="<?php echo $promotionLogo ?>" alt="Karma Group Logo" title="Karma Group – Luxury Hotels and Resorts"></a>
            </div>		    

        </div><!-- .container -->
</header>

<?php 
$html = ob_get_contents();
ob_end_clean();
?>
