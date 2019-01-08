<?php
ob_start();
?>
<style>
#auto-subscribe{text-align: center;}
.thanks-wrapper{
    max-width: 370px !important;
    background: #f2e6d6;
    padding: 10px;
    margin: 25px auto;
    display: none;
}
.thanks-wrapper.open{
    display: block;
}
</style>
<?php
if(!isset($_GET['firstname']) || !isset($_GET['lastname']) || !isset($_GET['email']) || !isset($_GET['country'])){
    header("Location: https://karmagroup.com/newsletter/");
    exit;
}
$inboxURL = "https://mx9.inboxgateway.com/form-process.php";
$params = array(
    "key" => 297,
    "uid" => 0,
    "sid" => 0,
    "hosted" => 0,
    "field-1427866079" => "Karma Group",
    "field-1427866111" => "Digital",
    "field-1427866217" => "Web",
    "field-1427866260" => "All",
    "field-1428569141" => "Stackla Newsletter",
    "field-1450837999" => "cfb005bf-ac11-698b-7475-55f90545dadf",
    "field-1427865019-1" => urlencode($_GET['firstname']),
    "field-1427865019-2" => urlencode($_GET["lastname"]),
    "field-1456130004" => urlencode($_GET['email']),
    "field-1450770516" => urlencode($_GET['country'])
);
$iter = new CachingIterator(new ArrayIterator($params));
$serializeParams = "";
foreach($iter as $key => $value){
    $serializeParams .= $key."=".$value;    
    if($iter->hasNext()) {
        $serializeParams .= "&";
    }
}

$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $inboxURL);
curl_setopt($ch,CURLOPT_POST, count($params));
curl_setopt($ch,CURLOPT_POSTFIELDS, $serializeParams);

//execute post
$result = curl_exec($ch);

// var_dump($result);

//close connection
curl_close($ch);
?>
<section id="auto-subscribe">
    <h1 id="wording">Karma Group Newsletter</h1>
    <div class="thanks-wrapper open">
        <div id="message_status" style="display: block; font-size: 20px; text-align: center; font-family: opensans; border: 2px solid rgb(141, 114, 73); border-radius: 4px; padding: 10px; color: rgb(255, 255, 255); background-color: rgb(141, 114, 73); font-style: italic;">
            Thank you for signing up.
        </div>
    </div>
    <div class="container wide row subtitle" style="text-align: center; font-family: georgia;font-style: italic; font-size: 12px; padding: 10px;">
        Follow us on Instagram:<br><a href="https://www.instagram.com/karmabeachclubs"><span style="font-size: 17px;font-style: normal;"><b>@karmabeachclubs</b></span></a>
    </div>
    <!-- Stackla Widget Embed Code (start) -->
    <div class="stackla-widget" data-alias="karmagroup.stackla.com" data-ct="" data-hash="59080963e4ebd" data-id="21970" data-title="Web Final Karma Beach" data-ttl="30" style="width: 100%; overflow: hidden;"></div>
    <script type="text/javascript">
    (function (d, id) {
        var t, el = d.scripts[d.scripts.length - 1].previousElementSibling;
        if (el) el.dataset.initTimestamp = (new Date()).getTime();
        if (d.getElementById(id)) return;
        t = d.createElement('script');
        t.src = '//assetscdn.stackla.com/media/js/widget/fluid-embed.js';
        t.id = id;
        (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(t);
    }(document, 'stackla-widget-js'));
    </script>
    <!-- Stackla Widget Embed Code (end) -->
</section>
<script>
$(document).ready(function(){
    
})
</script>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>
