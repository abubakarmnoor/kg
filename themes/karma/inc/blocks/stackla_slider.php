<?php 
$fields = array(
	'content' => get_sub_field('content'),
	'margin' => get_sub_field('margin')
);
ob_start();
$stackla_id = get_sub_field('stackla_id');
$stackla_hash = get_sub_field('stackla_hash');
if($stackla_id == 0 && $stackla_hash == 0){	
	if(get_the_ID()=='731') { // karma+bavaria
		$stackla_id = 14340;
		$stackla_hash = '586f055917a63';
	}
	else if(get_the_ID()=='3143') { // karma+bavaria DE
		$stackla_id = 14340;
		$stackla_hash = '586f055917a63';
	}
	else if(get_the_ID()=='837') { // karma+jimbaran
		$stackla_id = 14341;
		$stackla_hash = '586f0b1291dc5';
	}
	else if(get_the_ID()=='193') { // Karma+Kandara
		$stackla_id = 13934;
		$stackla_hash = '58510ac8a6c1f';
	}
	else if(get_the_ID()=='802') { // ROTTNEST
		$stackla_id = 14342;
		$stackla_hash = '586f0c6389b0a';
	}
	else if(get_the_ID()=='940') { // Karma+Chakra
		$stackla_id = 14343;
		$stackla_hash = '586f0ca0e4e12';
	}			
	else if(get_the_ID()=='782') { // Karma+Haveli
		$stackla_id = 14344;
		$stackla_hash = '586f0cf08947e';
	}
	else if(get_the_ID()=='889') { // karma+mayura
		$stackla_id = 14346;
		$stackla_hash = '586f0db59177d';
	}
	else if(get_the_ID()=='866') { // Karma+Reef
		$stackla_id = 14347;
		$stackla_hash = '586f0deb1d24f';
	}
	else if(get_the_ID()=='914') { // Karma+St.+Martin
		$stackla_id = 14345;
		$stackla_hash = '586f0d99d081e';
	}
	else if(get_the_ID()=='963') { // CAY TRE
		$stackla_id = 14348;
		$stackla_hash = '586f0e3cf3f4a';
	}
	else if(get_the_ID()=='988') { // karma+monterio
		$stackla_id = 14349;
		$stackla_hash = '586f0e858b037';
	}
	else if(get_the_ID()=='1012') { // Royal+Bella+Vista
		$stackla_id = 14350;
		$stackla_hash = '586f0e8a5464a';
	}
	else if(get_the_ID()=='4781') { // Royal Benaulim
		$stackla_id = 18170;
		$stackla_hash = '589299846bebe';
	}	
	else if(get_the_ID()=='1037') { // BOAT LAGOON
		$stackla_id = 14351;
		$stackla_hash = '586f0ee1d5788';
	}
	else if(get_the_ID()=='1058') { // ROYAL CANDIDASA
		$stackla_id = 14353;
		$stackla_hash = '586f0f30cbff0';
	}
	else if(get_the_ID()=='1087') { // HAATHI MAHAL
		$stackla_id = 14357;
		$stackla_hash = '586f0fd738b43';
	}
	else if(get_the_ID()=='1114') { // ROYAL JIMBARAN
		$stackla_id = 14354;
		$stackla_hash = '586f0f359c78f';
	}
	else if(get_the_ID()=='1213') { // ROYAL PALMS
		$stackla_id = 14355;
		$stackla_hash = '586f0fcc53abe';
	}
	else if(get_the_ID()=='1169') { // ROYAL SANUR
		$stackla_id = 14356;
		$stackla_hash = '586f0fd5b9659';
	}
	else if(get_the_ID()=='1141') { // VILLEA
		$stackla_id = 14358;
		$stackla_hash = '586f102ce328b';
	}
	else if(get_the_ID()=='1331') { // PELIKANOS
		$stackla_id = 14359;
		$stackla_hash = '586f1031ec253';
	}
	else if(get_the_ID()=='1285') { // LE PREVERGE
		$stackla_id = 14361;
		$stackla_hash = '586f1080c2443';
	}		
};													

//code stackla
if($stackla_id != 0 && $stackla_hash != 0) {?>
<div style="position: relative;">
    <div class="stackla-widget" data-id="<?php echo $stackla_id; ?>" data-hash="<?php echo $stackla_hash; ?>" data-ct="" data-title="Karma Kandara" data-alias="karmagroup.stackla.com" data-ttl="30" style="width: 100%; overflow: hidden; padding-top: 40px;background-color: #f2e6d6;"></div><div style="position: absolute; bottom: 0; left: 100px; right: 100px; background-color: transparent;height: 400px;"></div>
</div>
<script type="text/javascript">
(function (d, id) {
    if (d.getElementById(id)) return; 
    var t = d.createElement('script');
    t.type = 'text/javascript';
    t.src = '//assetscdn.stackla.com/media/js/widget/fluid-embed.js';
    t.id = id;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(t);
}(document, 'stackla-widget-js'));
</script>
<style>p.stacklapopup-caption-paragraph { font-size:14px !important;}</style>
<?php } 
$html = ob_get_contents();
ob_end_clean();
?>
