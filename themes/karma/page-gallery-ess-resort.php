    <?php
    /**
     * Template Name: Gallery Ess Resort
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
    .esg-layout-even .esg-cc{
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: table;
        height: 100%;
    }

    .esg-layout-even .esg-cc .esg-center{
        display: table-cell;
        vertical-align: middle;
    }

    .eg-karma-gallery-element-1{
        color: #ffffff !important;
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
            ob_start();
            the_content();
            $content_output = ob_get_clean();
            echo $content_output;
            // $args = array(
            //     'post_type' => 'gallery_ess',
            //     'cat' => "90",
            // );
            // $query = new WP_Query( $args );
            // echo "<pre>";
            // print_r($query);
            // echo "</pre>";
        ?>                  
            </div>
        </div>
    </div>

    <script type="text/javascript">
    jQuery(document).ready(function($){
        $('<div class="clear__button" id="clear-btn"><span>clear<i class="eg-icon-cancel"></i></span></div>').insertAfter(".eg-search-wrapper");
        $(".eg-search-wrapper").parent().css("margin-top", "50px");
        $(".eg-search-wrapper").parent().css("margin-bottom", "50px");
    //     if($(window).innerWidth() <= 639){
    //         resize();
    //     }
    //    
    //     $(".custom-dropdown").hover(function(){
    //         $(this).find(".esg-dropdown-wrapper").css("display","block");
    //     }, function(){
    //         $(this).find(".esg-dropdown-wrapper").css("display","none");
    //     });    
        $(document).on("resize",".esg-overflowtrick",function(){
            alert("resize")
        })
        $(document).on("click", "#clear-btn", function(e){        
            $(".eg-search-clean").trigger("click");    
            return true;
        })
    //     var currentFilter = "";
    //     // if(currentFilter == ""){
    //     //     $('.esg-layout-even').addClass('first-second-page');
    //     // }
    //     var notFoundDiv = '<div class="message message-filter" style="text-align:  center;margin: 25px 0;font-size: 36px;">No Image Found</div>';
    //     $(document).on("click", ".filter-button",function(e){    
    //         $(".eg-search-clean").trigger("click");    
    //         var selectedFilter = $(this).data("fid");  
    //         var isFound = false;
    //         var menus = $(".esg-filter-wrapper.dropdownstyle").last().find(".esg-filterbutton");          
    //         var selectedButton = this;        
    //         $.each(menus, function(index, menu){            
    //             if(selectedFilter == $(menu).data("fid")){                                   
    //                 isFound = true;    
    //                 currentFilter = selectedFilter;                            
    //                 $(menu).trigger("click");                                
    //             } 	
    //         })            
            
    //         if(!isFound){
    //             currentFilter = "";
    //             if($(".message-filter").length == 0){
    //                 $(notFoundDiv).insertAfter($(".esg-clear-no-height").first());
    //                 $(".esg-overflowtrick").css("display","none");
    //                 $(".esg-pagination").parent().css("display", "none");
    //             }            
    //         }
    //         else if(isFound){
    //             if($(".message-filter").length > 0){
    //                 $(".message-filter").remove();
    //                 $(".esg-overflowtrick").css("display","block");
    //                 $(".esg-pagination").parent().css("display", "block");
    //             }           
    //         }    
    //         $(".filter-button.selected").removeClass("selected");
    //         $(this).addClass("selected");
    //         // if($('.esg-layout-even').hasClass("first-second-page")){
    //         //     $('.esg-layout-even').removeClass('first-second-page');
    //         // }
    //     })

    //     // $(document).on('click', '.esg-pagination-button', function() {        
    //     //     var button = this;
    //     //     if(currentFilter == ""){
    //     //         setTimeout(function(){
    //     //             console.log($(button))
    //     //             if( $(button).html() == '1' || $(button).html() == '2' ){
    //     //                 $('.esg-layout-even').addClass('first-second-page');
    //     //                 console.log('add');
    //     //             }else{
    //     //                 $('.esg-layout-even').removeClass('first-second-page');
    //     //                 console.log('remove');
    //     //             }
    //     //         }, 500); //change 500 to your needs
    //     //     }
    //     // });

    //     $(document).on("focusout", "input.eg-search-input", function(e){
    //         if(currentFilter != ""){
    //             $("div.esg-filterbutton[data-fid='" + currentFilter + "']").trigger("click"); //ess button
    //             $("div.filter-button[data-fid='" + currentFilter + "']").removeClass("selected"); //custom button
    //         }
    //         if($('.esg-layout-even').hasClass("first-second-page")){
    //             $('.esg-layout-even').removeClass('first-second-page');
    //         }
    //     })   
    })
    </script>

    <?php get_footer(); ?>



