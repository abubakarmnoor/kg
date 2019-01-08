<?php
ob_start();
// header('Content-Disposition: attachment; filename=voucher-'.$_GET['id'].".pdf"); 
// if(!isset($_GET['id']) && $_GET['id'] == ""){
//     header("Location: ".get_site_url().'/rfu');
//     exit;
// }
// echo get_permalink();
$url = explode("/",get_permalink());
$id = $_GET['id'];
$voucher = "voucher-";
$campaign = "london7s-";
$voucherImg = "https://storage.googleapis.com/karmagroup-d66ca.appspot.com/karmagroupcdn/2018/05/9ba1008b-rfu-voucher.jpg";

if($url[3] == "vouchers-london7s"){
    $campaign = "london7s-";
    $voucherImg = "https://dev.karmagroup.com/WP/wp-content/uploads/2018/05/10096538-KG-for-London-7s-2.jpg";
}
elseif($url[3] == "vouchers-feel-good"){
    $campaign = "fg-";
    $voucherImg = "https://storage.googleapis.com/karmagroup-d66ca.appspot.com/karmagroupcdn/2018/07/05e27a56-voucher-feel-good.jpg";
}

$voucher .= $campaign.$id.".pdf";

$urlFetch = "https://karmawarehouse.izenoondemand.com/production/api/trial/getKcMemberbyClubId.php?cid=".$id;
$userData = json_decode(file_get_contents($urlFetch));
// print_r($userData);
?>
<style>
.voucher-download__download-btn{
    text-align: center;
}
.voucher-download__download-btn img{
    max-width: 300px;
    height: auto;
}
</style>
<section class="voucher-download__wrapper" style="text-align: center;margin: 50px auto;">
    <p style="font-size: 24px; margin: 0 auto 10px;">Download voucher</p>
    <p style="font-size: 20px; margin: 0 auto 10px;">Please click image below to download your voucher.</p>
    <a id="download-voucher" class="voucher-download__download-btn" href="<?php echo get_site_url().'/vouchers-download/?voucher='.$voucher; ?>" download="<?php echo $voucher ?>">
    <!-- <a class="voucher-download__download-btn" href="<?php echo 'http://localhost/vouchers-download/?voucher='.$voucher; ?>" download="<?php echo $voucher ?>"> -->
        <img src="<?php echo $voucherImg; ?>" alt="download vouchers" style="max-width: 300px; height: auto;border-radius: 5px;" />
    </a>
    <!-- <p style="font-size: 24px; margin: 0 auto 10px;">Your voucher is in progress</p>     -->
</section>
<script>
$(document).ready(function(){    
    var title = "<?php echo $userData[0]->title_c; ?>";
    var firstname = "<?php echo $userData[0]->firstname; ?>";
    var lastname = "<?php echo $userData[0]->lastname; ?>";
    var dob2 = "<?php echo $userData[0]->birthdate_c; ?>";
    var email = "<?php echo $userData[0]->email; ?>";
    var marital = "<?php echo $userData[0]->marital_status_c ?>";
    var mobilenumber = "<?php echo $userData[0]->mobile_c; ?>";
    var mobilecode = "<?php echo $userData[0]->code; ?>";
    var phone = "<?php echo $userData[0]->code.$userData[0]->mobile_c; ?>";
    var country =  "<?php echo $userData[0]->billing_address_country ?>";
    var postcode =  "<?php echo $userData[0]->billing_address_postalcode ?>";

    var urlWarehouse = 'https://karmawarehouse.izenoondemand.com/production/api/karmaclub/group/karmacluboffer.php?title='+title+'&first_name=' + firstname + '&last_name=' + lastname + '&email=' + email + '&phone=' + phone + '&dob=' + dob2 + '&country=' + country + '&postalcode=' + postcode + '&maritalStatus=' + marital + '&collection_entry_point=london sevens&website=https://karmagroup.com/sevens&promocode=7-RFU&card_downloaded_c=true';
    $('#download-voucher').on('click', function(){
        $.ajax({
            type: "GET",
            url: urlWarehouse,
            success: function(result){
                console.log(result);
            }
        })
    })
})
</script>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>
