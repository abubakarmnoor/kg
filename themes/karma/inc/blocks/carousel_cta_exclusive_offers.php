<style type="text/css"> #carousel_cta_section{display: none;} #carousel_cta_section.exclusive_offers{display: block!important;} </style>
<!-- <style type="text/css"> #carousel_cta_section.exclusive_offers{display: none!important;} </style> -->


<?php
global $post;
$fields = array(
        'items_per_slide' => get_sub_field('items_per_slide'),
        'slides' => get_sub_field('slides'),
);
$accordion_class = ' for-accordion';

$html = '<span id="carousel_cta_section_EO"></span><div class="cf'.$accordion_class.' exclusive_offers" id="carousel_cta_section">
                        <div class="container wide cf'.$accordion_class.'">
                                <div class="carousel_container cf">';
$html .= '<ul class="slides">';
$i = 0;
foreach ($fields['slides'] as $slide) {
        $i++;
        if ($accordion_class) {
                $alt_class = 'odd';
                if ($i%2 == 0) {
                        $alt_class = 'even';
                }
                $html .= '<div class="accordion-heading '.$alt_class.' cta'.$i.'">
                                                <div class="icon"><i class="fa '.$slide['icon_code'].'" aria-hidden="true"></i></div>
                                                '.$slide['title'].'
                                                <div class="indicator"></div>
                                        </div>
                                        <li class="accordion-content '.$alt_class.' cta'.$i.'">';
        } else {
                $html .= '<li>';
        }

        $html .= '<div class="carousel">';
        $link = $slide['link_url'];

        if (!empty($slide['external_link'])) {
                $link = $slide['external_link'];
        }
        if (empty($slide['link_text'])) {
                $slide['link_text'] = 'Click Here';
        }
        if (!empty($slide['image'])) {
                // @todo link
                //$html .= '<div class="image" style="background:url(' .$slide['image']['sizes']['medium']. ')  center;background-size: cover"></div>';
                $html .= '<div title="' .$slide['title']. '" alt="' .$slide['title']. '" class="image" style="background:url(' .$slide['image']['url']. ')  center;background-size: cover"></div>';
                //print_r($slide['image']);
        }
        $html .= '<div class="content">';
        if (!empty($slide['title'])) {
                $html .= '<h3 class="georgia_font italic">' .$slide['title']. '</h3>';
        }
        if (!empty($slide['description'])) {
                $html .= $slide['description'];
        }
        if (!empty($link)) {
                $html .= '<a class="button_outline" href="' .$link. '" title="' .$slide['link_text']. '" title="' .$slide['link_text']. '" alt="' .$slide['link_text']. '" style="margin-bottom: 8px;">' .$slide['link_text']. '</a>';
        }

            if (!empty($slide['spa_booking_request'])) {
            $html .= ' &nbsp; <a class="button_outline open_spa_bookingr_request_form" title="' .$slide['spa_booking_request']. '" alt="' .$slide['spa_booking_request']. '" data-rel="' . $slide['spa_booking_request'] . '">BOOK NOW</a>';
            }

        $html .= '</div></div></li>';
}
$html .= '</ul></div></div></div>
                        <script>
                        $(document).ready(function() {';
                                if ($accordion_class) {
                                        $html .= 'if(isMobile() == false) { // only use carousel slider on desktop
                                                        ';
                                }
                            $html .= '$("#carousel_cta_section .carousel_container").flexslider({
                                animation: "slide",
                                slideshow: true,
                                slideshowSpeed: 5000,
                                controlNav: false,
                                prevText: " ",
                                nextText: " ",
                                minItems: getGridSize(),
                                maxItems: getGridSize(),
                                move: getGridSize(),
                                itemWidth: 210
                            });

                            // Chooses how many thumbnails to show depending on screen size.
                            function getGridSize() {
                              return ((window.innerWidth || document.documentElement.clientWidth) < 600) ? 1 :
                              ((window.innerWidth || document.documentElement.clientWidth) < 1200) ? 2 : 3;
                            }';
                            if ($accordion_class) {
                                        $html .= '
                            }';
                            }
                                $html .= '
                                // Dynamically tells flexslider how many thumbs to show.
                                $(window).resize(function() {
                                    var gridSize = getGridSize();
                                    var vars = null;
                                    $("#carousel_cta_section .carousel_container").data("flexslider").vars.minItems = gridSize;
                                    $("#carousel_cta_section .carousel_container").data("flexslider").vars.maxItems = gridSize;
                                    // $("#product_carousel").data("flexslider").vars.move = gridSize;
                                });
                        });
                        </script>';
?> 
