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
    @media only screen and (max-width: 639px) {
        .esg-container .tp-esg-item {
            position: relative !important;
            margin-bottom: 10px !important;
            margin-top: 10px !important;
            top: 0 !important;
        }
    }
    #eg-16-post-id-15674 .esg-entry-cover{
        visibility: hidden;
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
                <div class="esg-selected-filterbutton"><span>Karma Resort</span><i class="eg-icon-down-open"></i></div>
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
                <div class="esg-selected-filterbutton"><span>Karma Estate</span><i class="eg-icon-down-open"></i></div>
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
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 93;">
                <div class="filter-button esg-selected-filterbutton" data-fid="85" style="width: auto; border-bottom: none !important;"><span>Karma Spa</span></div>                
            </div>
            <div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 92;">
                <div class="filter-button esg-selected-filterbutton" data-fid="109" data-filter="filter-weddingandevents" style="width: auto; border-bottom: none !important;"><span>Weddings & Events</span></div>
            </div>
<div class="esg-filter-wrapper dropdownstyle esg-fgc-4 custom-dropdown" style="margin-left: 2.5px; margin-right: 2.5px;z-index: 92;">
    <div class="filter-button esg-selected-filterbutton" data-fid="149" data-filter="filter-videos" style="width: auto; border-bottom: none !important;"><span>Videos</span></div>
</div>
        </article>
            <?php 
                echo do_shortcode('[ess_grid alias="gallery-temp-6"]');
            ?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    jQuery(document).ready(function($){
        function resize(){
            setTimeout(function(){
                var small = $("li.eg-karma-gallery-wrapper[data-cobblesh='1']")[0];
                var smallEntryMedia = $("li.eg-karma-gallery-wrapper[data-cobblesh='1'] .esg-entry-media")[0];
                var smallHeight = parseInt($(small).css("height").split("px")[0]);                
                var smallPadding = parseInt($(smallEntryMedia).css("padding-bottom").split("px")[0]);
                var css = "li.eg-karma-gallery-wrapper[data-cobblesh='2'][data-cobblesw='2'], li.eg-karma-gallery-wrapper[data-cobblesh='2'][data-cobblesw='3'], li.eg-karma-gallery-wrapper[data-cobblesh='1'][data-cobblesw='2'], li.eg-karma-gallery-wrapper[data-cobblesh='1'][data-cobblesw='3'] {height: " + smallHeight + "px !important;} li.eg-karma-gallery-wrapper[data-cobblesh='2'][data-cobblesw='2'] .esg-entry-media, li.eg-karma-gallery-wrapper[data-cobblesh='2'][data-cobblesw='3'] .esg-entry-media, li.eg-karma-gallery-wrapper[data-cobblesh='1'][data-cobblesw='2'] .esg-entry-media, li.eg-karma-gallery-wrapper[data-cobblesh='1'][data-cobblesw='3'] .esg-entry-media {padding-bottom: " + smallPadding +"px !important;} .esg-overflowtrick, .esg-overflowtrick >ul {height: auto !important;}";                
                var head = document.head || document.getElementsByTagName('head')[0];
                var newStyle = document.createElement('style');

                newStyle.type = 'text/css';
                if (newStyle.styleSheet){
                // This is required for IE8 and below.
                newStyle.styleSheet.cssText = css;
                } else {
                    newStyle.appendChild(document.createTextNode(css));
                }

                head.appendChild(newStyle);                
            }, 500);
        }

        if($(window).innerWidth() <= 639){
            resize();
        }
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
            
            currentFilter = "";
            return true;
        })
        var currentFilter = "";
        
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
        })
        
        $(document).on("focusout", "input.eg-search-input", function(e){
            if(currentFilter != ""){
                $("div.esg-filterbutton[data-fid='" + currentFilter + "']").trigger("click"); //ess button
                $("div.filter-button[data-fid='" + currentFilter + "']").removeClass("selected"); //custom button
            }
            if($('.esg-layout-even').hasClass("first-second-page")){
                $('.esg-layout-even').removeClass('first-second-page');
            }
        })   
        $("#eg-16-post-id-15674 .esg-entry-media-wrapper").remove();
        // $("#eg-16-post-id-15674 .esg-entry-cover").remove();        
        // $("#eg-16-post-id-15674 .esg-media-cover-wrapper").append('<iframe id="borgo-player" allow="autoplay; encrypted-media" src="https://www.youtube.com/embed/zOWJqNPeifU?autoplay=1&controls=0&loop=1&playlist=zOWJqNPeifU&showinfo=0&origin=https://karmagroup.com" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'); 
        $("#eg-16-post-id-15674 .esg-media-cover-wrapper").append('<div id="borgo-player" class="custom-yt"></div>');        
        // var tag = document.createElement('script');
        // tag.src = "https://www.youtube.com/player_api";
        // var firstScriptTag = document.getElementsByTagName('script')[0];
        // firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);                
        
    })  
    </script>
   <div id="ytplayer" class="custom-yt"></div>

    <script>
    // Load the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Replace the 'ytplayer' element with an <iframe> and
    // YouTube player after the API code downloads.
    var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('borgo-player', {
          height: '100%',
          width: '100%',
          videoId: 'MYq2UOGJyQI',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          },
          playerVars: {
            'controls': 0,           
            'showinfo': 0,
            'rel': 0,
            'loop': 1
          },
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
        player.mute()
      }
      function onPlayerStateChange(event) {
        if (player.getPlayerState() == 0) {
            player.playVideo(); 
        }
      }      
    </script>
    <?php get_footer(); ?>



