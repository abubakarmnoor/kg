<?php
    /**
     * Template Name: Gallery Ess Dev
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
        border-bottom: 1px solid #999;
    }

    .eg-search-clean{
        display: none;
    }

    .clear__button{
        display: inline-block;
        /* vertical-align: bottom; */
        text-transform: capitalize;
        border: 1px solid #999;
        border-radius: 500px;
        padding: 5px;
        color: #999;
        margin-left: 10px;
        cursor: pointer;
        font-size: 11px;
        margin-top: 10px;
    }

    .clear__button:hover{
        color: #8d7249;
        border-color: #8d7249;
        transition: all .25s ease;
    }
    .myportfolio-container.karma-skin .esg-filter-wrapper.dropdownstyle{
        display: none;
    }
    .esg-overflowtrick{
        margin : 10px auto;
    }
    </style>

    <div id="type-content">
        <div class="main_content">
            <div class="offers-section">        
        <?php
            $area = 'Main Content';
            $rendered = karma_render_blocks($page_id, array());
            $gallery = get_sub_field("shortcode");
            echo $gallery;
            if (isset($rendered[$area])) {
                echo $rendered[$area];
            }
        ?>
        <article class="esg-filters esg-multiplefilters" style="margin-bottom: 0px; text-align: center; z-index: 70;">
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 100">
                <div class="esg-selected-filterbutton"><span>Destination</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="89" data-filter="filter-australia"><span>Australia</span></div>
                    <div class="filter-button" data-fid="95" data-filter="filter-france"><span>France</span></div>
                    <div class="filter-button" data-fid="83" data-filter="filter-germany"><span>Germany</span></div>
                    <div class="filter-button" data-fid="75" data-filter="filter-greece"><span>Greece</span></div>
                    <div class="filter-button" data-fid="66" data-filter="filter-india"><span>India</span></div>
                    <div class="filter-button" data-fid="63" data-filter="filter-indonesia"><span>Indonesia</span></div>
                    <div class="filter-button" data-fid="120" data-filter="filter-italy"><span>Italy</span></div>
                    <div class="filter-button" data-fid="74" data-filter="filter-thailand"><span>Thailand</span></div>
                    <div class="filter-button" data-fid="106" data-filter="filter-unitedkingdom"><span>United Kingdom</span></div>
                    <div class="filter-button" data-fid="99" data-filter="filter-vietnam"><span>Vietnam</span></div>        
                </div>
                <div class="eg-clearfix"></div>
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 99">
                <div class="esg-selected-filterbutton"><span>Karma Resorts</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="84" data-filter="filter-karmabavaria"><span>Karma Bavaria</span></div>
                    <div class="filter-button" data-fid="121" data-filter="filter-karmaborgodicolleoli"><span>Karma Borgo di Colleoli</span></div>
                    <div class="filter-button" data-fid="73" data-filter="filter-karmajimbaran"><span>Karma Jimbaran</span></div>
                    <div class="filter-button" data-fid="65" data-filter="filter-karmakandara"><span>Karma Kandara</span></div>
                    <div class="filter-button" data-fid="91" data-filter="filter-karmarottnest"><span>Karma Rottnest</span></div>                
                </div>
                <div class="eg-clearfix"></div>
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 98">
                <div class="esg-selected-filterbutton"><span>Karma Retreats</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="77" data-filter="filter-karmachakra"><span>Karma Chakra</span></div>
                    <div class="filter-button" data-fid="98" data-filter="filter-karmacaytree"><span>Karma Cây Tre</span></div>                
                    <div class="filter-button" data-fid="70" data-filter="filter-karmaexotica"><span>Karma Exotica</span></div>
                    <div class="filter-button" data-fid="72" data-filter="filter-karmahaveli"><span>Karma Haveli</span></div>
                    <div class="filter-button" data-fid="122" data-filter="filter-karmamanoirdesdeuxamants"><span>Karma Manoir des Deux Amants</span></div>        
                    <div class="filter-button" data-fid="82" data-filter="filter-karmamayura"><span>Karma Mayura</span></div>            
                    <div class="filter-button" data-fid="90" data-filter="filter-karmaminoan"><span>Karma Minoan</span></div>                                    
                    <div class="filter-button" data-fid="87" data-filter="filter-karmareef"><span>Karma Reef</span></div>
                    <div class="filter-button" data-fid="125" data-filter="filter-karmaresidencenormande"><span>Karma Residence Normande</span></div>
                    <div class="filter-button" data-fid="107" data-filter="filter-karmastmartins"><span>Karma St. Martin`s</span></div>                
                </div>
                <div class="eg-clearfix"></div>
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 97">
                <div class="esg-selected-filterbutton"><span>Karma Royal</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="103" data-filter="filter-karmaroyalmonterio"><span>Karma Royal MonteRio</span></div>
                    <div class="filter-button" data-fid="68" data-filter="filter-karmaroyalbellavista"><span>Karma Royal Bella Vista</span></div>
                    <div class="filter-button" data-fid="123" data-filter="filter-karmaroyalbenaulim"><span>Karma Royal Benaulim</span></div>
                    <div class="filter-button" data-fid="79" data-filter="filter-karmaroyalbootlagoon"><span>Karma Royal Boat Lagoon</span></div>
                    <div class="filter-button" data-fid="78" data-filter="filter-karmaroyalcandidasa"><span>Karma Royal Candidasa</span></div>
                    <div class="filter-button" data-fid="88" data-filter="filter-karmaroyalhaathimahal"><span>Karma Royal Haathi Mahal</span></div>
                    <div class="filter-button" data-fid="128" data-filter="filter-karmaroyalresidenceathaathimahal"><span>Karma Royal Residence at Haathi Mahal</span></div>
                    <div class="filter-button" data-fid="102" data-filter="filter-karmaroyaljimbaran"><span>Karma Royal Jimbaran</span></div>
                    <div class="filter-button" data-fid="101" data-filter="filter-karmaroyalpalms"><span>Karma Royal Palms</span></div>
                    <div class="filter-button" data-fid="108" data-filter="filter-karmaexoroyalsanur"><span>Karma Royal Sanur</span></div>
                </div>
                <div class="eg-clearfix"></div>
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 96">
                <div class="esg-selected-filterbutton"><span>Karma Estates</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="113" data-filter="filter-pelikanos"><span>Pelikanos</span></div>
                    <div class="filter-button" data-fid="112" data-filter="filter-lepreverger"><span>Le Preverger</span></div>
                    <div class="filter-button" data-fid="chateaudesamary" data-filter="filter-chateaudesamary"><span>Chateau de Samary</span></div>        
                </div>
                <div class="eg-clearfix"></div>
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 95">
                <div class="esg-selected-filterbutton"><span>Karma Sanctum</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="119" data-filter="filter-karmasanctumsoho"><span>Karma Sanctum Soho</span></div>
                    <div class="filter-button" data-fid="126" data-filter="filter-karmasanctumonthegreen"><span>Karma Sanctum on the Green</span></div>              
                </div>
                <div class="eg-clearfix"></div>
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 93;">
                <div class="filter-button esg-selected-filterbutton" data-fid="93" style="width: auto; border-bottom: none !important;"><span>Karma Beach</span></div>
                <!-- <div class="esg-selected-filterbutton"><span>Karma Beach</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="131" data-filter="filter-karmabeachkandara"><span>Karma Beach Bali</span></div>
                    <div class="filter-button" data-fid="94" data-filter="filter-karmabeachreef"><span>Karma Beach Gili Meno</span></div>              
                </div>
                <div class="eg-clearfix"></div> -->
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 93;">
                <div class="filter-button esg-selected-filterbutton" data-fid="85" style="width: auto; border-bottom: none !important;"><span>Karma Spa</span></div>
                <!-- <div class="esg-selected-filterbutton"><span>Karma Spa</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="104" data-filter="filter-karmakandaraspa"><span>Karma Kandara</span></div>
                    <div class="filter-button" data-fid="86" data-filter="filter-karmajimbaranspa"><span>Karma Jimbaran</span></div>
                    <div class="filter-button" data-fid="132" data-filter="filter-karmamayuraspa"><span>Karma Mayura</span></div>
                    <div class="filter-button" data-fid="105" data-filter="filter-karmaroyaljimbaranspa"><span>Karma Royal Jimbaran</span></div>
                    <div class="filter-button" data-fid="129" data-filter="filter-karmaroyalsanurspa"><span>Karma Royal Sanur</span></div>
                    <div class="filter-button" data-fid="karmaroyalcandidasaspa" data-filter="filter-karmaroyalcandidasaspa"><span>Karma Royal Candidasa</span></div>
                    <div class="filter-button" data-fid="karmareefspa" data-filter="filter-karmareefspa"><span>Karma Reef</span></div>
                    <div class="filter-button" data-fid="135" data-filter="filter-karmaminoan"><span>Karma Minoan</span></div>
                    <div class="filter-button" data-fid="karmaroyalhaathimahalspa" data-filter="filter-karmaroyalhaathimahalspa"><span>Karma Royal Haathi Mahal</span></div>
                    <div class="filter-button" data-fid="137" data-filter="filter-karmaroyalmonterio"><span>Karma Royal Monterio</span></div>
                    <div class="filter-button" data-fid="karmaroyalpalmsspa" data-filter="filter-karmaroyalpalmsspa"><span>Karma Royal Palms</span></div>
                    <div class="filter-button" data-fid="karmaroyalbenaulimspa" data-filter="filter-karmaroyalbenaulimspa"><span>Karma Royal Benaulim</span></div>
                    <div class="filter-button" data-fid="140" data-filter="filter-karmabavariaspa"><span>Karma Bavaria</span></div>
                    <div class="filter-button" data-fid="karmastmartinspa" data-filter="filter-karmastmartinspa"><span>Karma St. Martin`s</span></div>        
                </div>
                <div class="eg-clearfix"></div> -->
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 92;">
                <div class="filter-button esg-selected-filterbutton" data-fid="109" data-filter="filter-weddingandevents" style="width: auto; border-bottom: none !important;"><span>Weddings & Events</span></div>
                <!-- <div class="esg-selected-filterbutton"><span>Wedding and Events</span><i class="eg-icon-down-open"></i></div>
                <div class="esg-dropdown-wrapper" style="box-shadow: grey 2px 2px 8px 0px">                
                    <div class="filter-button" data-fid="115" data-filter="filter-karmajimbaranwedding"><span>Karma Jimbaran</span></div>
                    <div class="filter-button" data-fid="110" data-filter="filter-karmakandarawedding"><span>Karma Kandara</span></div>              
                    <div class="filter-button" data-fid="114" data-filter="filter-karmabavariawedding"><span>Karma Bavaria</span></div>              
                    <div class="filter-button" data-fid="142" data-filter="filter-karmastmartinwedding"><span>Karma St. Martin`s</span></div>              
                    <div class="filter-button" data-fid="karmaleprevergerwedding" data-filter="filter-karmaleprevergerwedding"><span>Le Preverger</span></div>              
                    <div class="filter-button" data-fid="karmapelikanoswedding" data-filter="filter-karmapelikanoswedding"><span>Pelikanos</span></div>        
                    <div class="filter-button" data-fid="karmareefwedding" data-filter="filter-karmareefwedding"><span>Karma Reef</span></div>                    
                    <div class="filter-button" data-fid="karmarottnestwedding" data-filter="filter-karmarottnestwedding"><span>Karma Rottnest</span></div>                    
                    <div class="filter-button" data-fid="117" data-filter="filter-karmaroyalhaathimahalwedding"><span>Karma Royal Haathi Mahal</span></div>                    
                </div>
                <div class="eg-clearfix"></div> -->
            </div>
<div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 92;">
    <div class="filter-button esg-selected-filterbutton" data-fid="149" data-filter="filter-videos" style="width: auto; border-bottom: none !important;"><span>Videos</span></div>
</div>
        </article>
            <?php echo do_shortcode('[ess_grid alias="test-grid"]');
            // include 'inc/blocks/banner_slider.php';
            // echo $html;
            ?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    jQuery(document).ready(function($){
        $('<div class="clear__button" id="clear-btn"><span>clear<i class="eg-icon-cancel"></i></span></div>').insertAfter(".eg-search-wrapper");
        $(".custom-dropdown").hover(function(){
            $(this).find(".esg-dropdown-wrapper").css("display","block");
        }, function(){
            $(this).find(".esg-dropdown-wrapper").css("display","none");
        });    

        $(document).on("click", "#clear-btn", function(e){        
            $(".eg-search-clean").trigger("click");    
            $.each($(".filter-button"), function(index, menu){
                if($(menu).hasClass("selected")){
                    $(menu).removeClass("selected");
                }
            })
            if($(".message-filter").length > 0){
                $(".message-filter").remove();
                $(".esg-overflowtrick").css("display","block");
                $(".esg-pagination").parent().css("display", "block");
            }
            // if(!$('.esg-layout-even').hasClass("first-second-page")){
            //     $('.esg-layout-even').addClass('first-second-page');
            // }
            currentFilter = "";
            return true;
        })
        var currentFilter = "";
        // if(currentFilter == ""){
        //     $('.esg-layout-even').addClass('first-second-page');
        // }
        var notFoundDiv = '<div class="message message-filter" style="text-align:  center;margin: 25px 0;font-size: 36px;">No Image Found</div>';
        $(document).on("click", ".filter-button",function(e){    
            $(".eg-search-clean").trigger("click");    
            var selectedFilter = $(this).data("fid");  
            var isFound = false;
            var menus = $(".esg-filter-wrapper.dropdownstyle").last().find(".esg-filterbutton");          
            var selectedButton = this;        
            $.each(menus, function(index, menu){            
                if(selectedFilter == $(menu).data("fid")){                                   
                    isFound = true;    
                    currentFilter = selectedFilter;                            
                    $(menu).trigger("click");                                
                } 	
            })            
            
            if(!isFound){
                currentFilter = "";
                if($(".message-filter").length == 0){
                    $(notFoundDiv).insertAfter($(".esg-clear-no-height").first());
                    $(".esg-overflowtrick").css("display","none");
                    $(".esg-pagination").parent().css("display", "none");
                }            
            }
            else if(isFound){
                if($(".message-filter").length > 0){
                    $(".message-filter").remove();
                    $(".esg-overflowtrick").css("display","block");
                    $(".esg-pagination").parent().css("display", "block");
                }           
            }    
            $(".filter-button.selected").removeClass("selected");
            $(this).addClass("selected");
            // if($('.esg-layout-even').hasClass("first-second-page")){
            //     $('.esg-layout-even').removeClass('first-second-page');
            // }
        })

        // $(document).on('click', '.esg-pagination-button', function() {        
        //     var button = this;
        //     if(currentFilter == ""){
        //         setTimeout(function(){
        //             console.log($(button))
        //             if( $(button).html() == '1' || $(button).html() == '2' ){
        //                 $('.esg-layout-even').addClass('first-second-page');
        //                 console.log('add');
        //             }else{
        //                 $('.esg-layout-even').removeClass('first-second-page');
        //                 console.log('remove');
        //             }
        //         }, 500); //change 500 to your needs
        //     }
        // });

        $(document).on("focusout", "input.eg-search-input", function(e){
            if(currentFilter != ""){
                $("div.esg-filterbutton[data-fid='" + currentFilter + "']").trigger("click"); //ess button
                $("div.filter-button[data-fid='" + currentFilter + "']").removeClass("selected"); //custom button
            }
            if($('.esg-layout-even').hasClass("first-second-page")){
                $('.esg-layout-even').removeClass('first-second-page');
            }
        })   
    })
    </script>

    <?php get_footer(); ?>



