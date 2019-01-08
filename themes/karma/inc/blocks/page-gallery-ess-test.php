<?php
/**
 * Template Name: Gallery Ess Test
 */
?>

<?php get_header();?>

<?php 
// ini_set( "display_errors", 0); 
?>

<style>
.offers-section {
    padding-top: 100px;
}
#banner_slider_wrapper{	
    height: 0;
    width:0;
    overflow:hidden;
}
#karma #banner .content{
	display:none;
}
.custom-dropdown .esg-dropdown-wrapper .esg-filterbutton span{
    font-size: 12px;    
}

.custom-dropdown .esg-dropdown-wrapper .esg-filterbutton:hover span{
    color: #8d7249;
}

.esg-dropdown-wrapper .filter-button{
	border-bottom: 1px solid #9e9e9e !important;
    padding-bottom: 5px;
}

.custom-dropdown .esg-dropdown-wrapper{
	border-top: 1px solid #9e9e9e;
}

.esg-dropdown-wrapper{
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
.esg-filter-wrapper .eg-search-input{
    border: none;
    padding: 0;
    margin: 0;
}
.eg-search-wrapper{
    border-bottom: 1px solid #9e9e9e;
}

.eg-search-clean{
    display: none;
}
</style>

<div id="type-content">
	<div class="main_content">
        <div class="offers-section">        
	<?php
		$area = 'Main Content';
		$rendered = karma_render_blocks($page_id, array());
		if (isset($rendered[$area])) {
			echo $rendered[$area];
		}
	 ?>
     <article class="esg-filters esg-multiplefilters" style="margin-bottom: 0px; text-align: center; z-index: 70;">
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 100">
            <div class="esg-selected-filterbutton"><span>Destination</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="australia" data-filter="filter-australia"><span>Australia</span></div>
                <div class="filter-button" data-fid="france" data-filter="filter-france"><span>France</span></div>
                <div class="filter-button" data-fid="germany" data-filter="filter-germany"><span>Germany</span></div>
                <div class="filter-button" data-fid="greece" data-filter="filter-greece"><span>Greece</span></div>
                <div class="filter-button" data-fid="india" data-filter="filter-india"><span>India</span></div>
                <div class="filter-button" data-fid="indonesia" data-filter="filter-indonesia"><span>Indonesia</span></div>
                <div class="filter-button" data-fid="italy" data-filter="filter-italy"><span>Italy</span></div>
                <div class="filter-button" data-fid="thailand" data-filter="filter-thailand"><span>Thailand</span></div>
                <div class="filter-button" data-fid="unitedkingdom" data-filter="filter-unitedkingdom"><span>United Kingdom</span></div>
                <div class="filter-button" data-fid="vietnam" data-filter="filter-vietnam"><span>Vietnam</span></div>        
            </div>
            <div class="eg-clearfix"></div>
        </div>
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 99">
            <div class="esg-selected-filterbutton"><span>Karma Resort</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="karmabavaria" data-filter="filter-karmabavaria"><span>Karma Bavaria</span></div>
                <div class="filter-button" data-fid="karmaborgodicolleoli" data-filter="filter-karmaborgodicolleoli"><span>Karma Borgo di Colleoli</span></div>
                <div class="filter-button" data-fid="karmajimbaran" data-filter="filter-karmajimbaran"><span>Karma Jimbaran</span></div>
                <div class="filter-button" data-fid="karmakandara" data-filter="filter-karmakandara"><span>Karma Kandara</span></div>
                <div class="filter-button" data-fid="karmarottnest" data-filter="filter-karmarottnest"><span>Karma Rottnest</span></div>                
            </div>
            <div class="eg-clearfix"></div>
        </div>
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 98">
            <div class="esg-selected-filterbutton"><span>Karma Retreats</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="karmachakra" data-filter="filter-karmachakra"><span>Karma Chakra</span></div>
                <div class="filter-button" data-fid="karmacaytree" data-filter="filter-karmacaytree"><span>Karma Cây Tre</span></div>                
                <div class="filter-button" data-fid="karmaexotica" data-filter="filter-karmaexotica"><span>Karma Exotica</span></div>
                <div class="filter-button" data-fid="karmahaveli" data-filter="filter-karmahaveli"><span>Karma Haveli</span></div>
                <div class="filter-button" data-fid="karmamanoirdesdeuxamants" data-filter="filter-karmamanoirdesdeuxamants"><span>Karma Manoir des Deux Amants</span></div>        
                <div class="filter-button" data-fid="karmamayura" data-filter="filter-karmamayura"><span>Karma Mayura</span></div>            
                <div class="filter-button" data-fid="karmaminoan" data-filter="filter-karmaminoan"><span>Karma Minoan</span></div>                                    
                <div class="filter-button" data-fid="karmareef" data-filter="filter-karmareef"><span>Karma Reef</span></div>
                <div class="filter-button" data-fid="karmaresidencenormande" data-filter="filter-karmaresidencenormande"><span>Karma Residence Normande</span></div>
                <div class="filter-button" data-fid="karmastmartins" data-filter="filter-karmastmartins"><span>Karma St. Martin's</span></div>                
            </div>
            <div class="eg-clearfix"></div>
        </div>
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 97">
            <div class="esg-selected-filterbutton"><span>Karma Royal</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="karmaroyalmonterio" data-filter="filter-karmaroyalmonterio"><span>Karma Royal MonteRio</span></div>
                <div class="filter-button" data-fid="karmaroyalbellavista" data-filter="filter-karmaroyalbellavista"><span>Karma Royal Bella Vista</span></div>
                <div class="filter-button" data-fid="karmaroyalbenaulim" data-filter="filter-karmaroyalbenaulim"><span>Karma Royal Benaulim</span></div>
                <div class="filter-button" data-fid="karmaroyalbootlagoon" data-filter="filter-karmaroyalbootlagoon"><span>Karma Royal Boat Lagoon</span></div>
                <div class="filter-button" data-fid="karmaroyalcandidasa" data-filter="filter-karmaroyalcandidasa"><span>Karma Royal Candidasa</span></div>
                <div class="filter-button" data-fid="karmaroyalhaathimahal" data-filter="filter-karmaroyalhaathimahal"><span>Karma Royal Haathi Mahal</span></div>
                <div class="filter-button" data-fid="karmaroyalresidenceathaathimahal" data-filter="filter-karmaroyalresidenceathaathimahal"><span>Karma Royal Residence at Haathi Mahal</span></div>
                <div class="filter-button" data-fid="karmaroyaljimbaran" data-filter="filter-karmaroyaljimbaran"><span>Karma Royal Jimbaran</span></div>
                <div class="filter-button" data-fid="karmaroyalpalms" data-filter="filter-karmaroyalpalms"><span>Karma Royal Palms</span></div>
                <div class="filter-button" data-fid="karmaroyalsanur" data-filter="filter-karmaexoroyalsanur"><span>Karma Royal Sanur</span></div>
            </div>
            <div class="eg-clearfix"></div>
        </div>
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 96">
            <div class="esg-selected-filterbutton"><span>Karma Estate</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="pelikanos" data-filter="filter-pelikanos"><span>Pelikanos</span></div>
                <div class="filter-button" data-fid="lepreverger" data-filter="filter-lepreverger"><span>Le Preverger</span></div>
                <div class="filter-button" data-fid="chateaudesamary" data-filter="filter-chateaudesamary"><span>Chateau de Samary</span></div>        
            </div>
            <div class="eg-clearfix"></div>
        </div>
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 95">
            <div class="esg-selected-filterbutton"><span>Karma Sanctum</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="karmasanctumsoho" data-filter="filter-karmasanctumsoho"><span>Karma Sanctum Soho</span></div>
                <div class="filter-button" data-fid="karmasanctumonthegreen" data-filter="filter-karmasanctumonthegreen"><span>Karma Sanctum on the Green</span></div>              
            </div>
            <div class="eg-clearfix"></div>
        </div>
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 94">
            <div class="esg-selected-filterbutton"><span>Karma Beach</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="karmabeachkandara" data-filter="filter-karmabeachkandara"><span>Karma Kandara</span></div>
                <div class="filter-button" data-fid="karmabeachreef" data-filter="filter-karmabeachreef"><span>Karma Reef</span></div>              
            </div>
            <div class="eg-clearfix"></div>
        </div>
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 93">
            <div class="esg-selected-filterbutton"><span>Karma Spa</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="karmakandaraspa" data-filter="filter-karmakandaraspa"><span>Karma Kandara</span></div>
                <div class="filter-button" data-fid="karmajimbaranspa" data-filter="filter-karmajimbaranspa"><span>Karma Jimbaran</span></div>
                <div class="filter-button" data-fid="karmamayuraspa" data-filter="filter-karmamayuraspa"><span>Karma Mayura</span></div>
                <div class="filter-button" data-fid="karmaroyaljimbaranspa" data-filter="filter-karmaroyaljimbaranspa"><span>Karma Royal Jimbaran</span></div>
                <div class="filter-button" data-fid="karmaroyalsanurspa" data-filter="filter-karmaroyalsanurspa"><span>Karma Royal Sanur</span></div>
                <div class="filter-button" data-fid="karmaroyalcandidasaspa" data-filter="filter-karmaroyalcandidasaspa"><span>Karma Royal Candidasa</span></div>
                <div class="filter-button" data-fid="karmareefspa" data-filter="filter-karmareefspa"><span>Karma Reef</span></div>
                <div class="filter-button" data-fid="karmaminoan" data-filter="filter-karmaminoan"><span>Karma Minoan</span></div>
                <div class="filter-button" data-fid="karmaroyalhaathimahalspa" data-filter="filter-karmaroyalhaathimahalspa"><span>Karma Royal Haathi Mahal</span></div>
                <div class="filter-button" data-fid="karmaroyalmonterio" data-filter="filter-karmaroyalmonterio"><span>Karma Royal Monterio</span></div>
                <div class="filter-button" data-fid="karmaroyalpalmsspa" data-filter="filter-karmaroyalpalmsspa"><span>Karma Royal Palms</span></div>
                <div class="filter-button" data-fid="karmaroyalbenaulimspa" data-filter="filter-karmaroyalbenaulimspa"><span>Karma Royal Benaulim</span></div>
                <div class="filter-button" data-fid="karmabavariaspa" data-filter="filter-karmabavariaspa"><span>Karma Bavaria</span></div>
                <div class="filter-button" data-fid="karmastmartinspa" data-filter="filter-karmastmartinspa"><span>Karma St. Martins</span></div>        
            </div>
            <div class="eg-clearfix"></div>
        </div>
        <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 92">
            <div class="esg-selected-filterbutton"><span>Wedding and Events</span><i class="eg-icon-down-open"></i></div>
            <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                <div class="filter-button" data-fid="karmajimbaranwedding" data-filter="filter-karmajimbaranwedding"><span>Karma Jimbaran</span></div>
                <div class="filter-button" data-fid="karmakandarawedding" data-filter="filter-karmakandarawedding"><span>Karma Kandara</span></div>              
                <div class="filter-button" data-fid="karmabavariawedding" data-filter="filter-karmabavariawedding"><span>Karma Bavaria</span></div>              
                <div class="filter-button" data-fid="karmastmartinwedding" data-filter="filter-karmastmartinwedding"><span>Karma St Martin’s</span></div>              
                <div class="filter-button" data-fid="karmaleprevergerwedding" data-filter="filter-karmaleprevergerwedding"><span>Karma Le Preverger</span></div>              
                <div class="filter-button" data-fid="karmapelikanoswedding" data-filter="filter-karmapelikanoswedding"><span>Karma Pelikanos</span></div>        
                <div class="filter-button" data-fid="karmareefwedding" data-filter="filter-karmareefwedding"><span>Karma Reef</span></div>                    
                <div class="filter-button" data-fid="karmarottnestwedding" data-filter="filter-karmarottnestwedding"><span>Karma Rottnest</span></div>                    
                <div class="filter-button" data-fid="karmaroyalhaathimahalwedding" data-filter="filter-karmaroyalhaathimahalwedding"><span>Karma Royal Haathi Mahal</span></div>                    
            </div>
            <div class="eg-clearfix"></div>
        </div>
    </article>
         <?php echo do_shortcode('[ess_grid alias="gallery-test"]');
        // include 'inc/blocks/banner_slider.php';
		// echo $html;
		 ?>
        </div>
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function($){
    $('<div style="display:  inline-block;vertical-align:  bottom;text-transform: capitalize;border: 1px solid #9e9e9e;border-radius:  500px;padding: 5px;font-family: "Open Sans",sans-serif;margin-left: 10px;"><span>clear<i class="eg-icon-cancel"></i></span></div>').insertAfter(".eg-search-wrapper");
    $(".custom-dropdown").hover(function(){
        $(this).find(".esg-dropdown-wrapper").css("display","block");
    }, function(){
        $(this).find(".esg-dropdown-wrapper").css("display","none");
    });

    $(document).on("click", ".eg-search-clean", function(e){
        $.each($(".filter-button"), function(index, menu){
            if($(menu).hasClass("selected")){
                $(menu).removeClass("selected");
            }
        })
        return true;
    })

    $(document).on("click", ".filter-button",function(e){
        var selectedFilter = $(this).data("fid");
        var isFound = false;
        var menus = $(".esg-filter-wrapper.dropdownstyle").last().find(".esg-filterbutton");
        // console.log(selectedFilter);
        $.each(menus, function(index, menu){
            // console.log(menu)
            // console.log(index)
            // console.log($(menu).data("fid"));
            console.log(selectedFilter == $(menu).data("fid"))
        if(selectedFilter == $(menu).data("fid")){   
            console.log(menu)     
            $(menu).trigger("click");
            isFound = true;
        } 	
        })
        if(isFound){
        if($(this).hasClass("selected")){
            $(this).removeClass("selected");
        }
        else{
            $(this).addClass("selected");
        }      
        }
    })
})
</script>

<?php get_footer(); ?>



