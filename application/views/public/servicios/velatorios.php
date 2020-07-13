<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function searchForId($id, $array1) {
    foreach ($array1 as &$array) {
        foreach ($array as $key => $val) {
            if ($key == 'Category' && $val == $id) {
                return $array;
            }
        }
    }
    return null;
}
?>



<style type="text/css" id="wp-custom-css">
li.menu-item.menu-item-353 .menu-text, li.menu-item.menu-item-691 .menu-text{
font-weight: 600;
}		</style>
<style type="text/css" data-type="vc_custom-css">.slide_comunicate{
background-image: url(http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/cielo_azul_parque_esperanza.jpg);
}
.ult_tabcontent.ult-responsive.style1{
height: auto !important;
}
.ult_tabitemname {
position: relative !important;
}
figcaption.vc_figure-caption{
background: rgba(25, 37, 49, 0.48);
position: absolute;
width: 100%;
bottom: 0;
color: white;
}
.wpb_single_image.otros-servicioss{
position: relative;
}
.contacto-footer img{
position: absolute;
right: -60px;
width: 140px;
top: 0;
}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1582844064402{background-color: #f9f6ef !important;}.vc_custom_1590180629868{background-color: #f9f6ef !important;}.vc_custom_1582845182817{margin-bottom: 8px !important;}.vc_custom_1590180359899{padding-top: 39px !important;padding-right: 20px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>



<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding-bottom:0px;">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <div class="vc_row wpb_row vc_row-fluid vc_column-gap-30 vc_row-o-content-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1582845182817">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt="" data-dt-location="http://www.parquedelaesperanza.com/inicio/attachment/pe_icons_titles/" /></div>
                                    </figure>
                                </div>
                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center; color: #dbb66d;">Velatorios</h1>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner vc_custom_1590180359899">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                    
                                                    <?php
                                                        echo searchForId('ServiciosVelatorios.Texto1', $texts)['Description'];
                                                        ?>
                                                    
                                                    
<!--                                                    <div class="wpb_wrapper">
                                                        <p>Parque de la Esperanza cuenta con cómodos y acogedores espacios para despedir a su ser querido.</p>
                                                        <p>Contamos con dos salones velatorios, Esperanza y San Juan con moderno diseño, cafetería, y equipo especializado que se hará cargo de cada detalle que necesite.</p>
                                                        <p>&#8211; Velatorio Esperanza</p>
                                                        <p>&#8211; Velatorio San Juan</p>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <style type="text/css" data-type="the7_shortcodes-inline-css">
                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a {
                                                        width: 36px;
                                                        height: 36px;
                                                        border-radius: 500px;
                                                    }

                                                    .dt-arrow-border-on.gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a:not(:hover):before {
                                                        border-width: 0px;
                                                    }

                                                    .dt-arrow-hover-border-on.gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a:hover:after {
                                                        border-width: 0px;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a.owl-prev {
                                                        top: 50%;
                                                        transform: translateY(calc(-50% + 0px));
                                                        left: -43px;
                                                    }

                                                    @media all and (-ms-high-contrast: none) {
                                                        .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a.owl-prev {
                                                            transform: translateY(-50%);
                                                            margin-top: 0px;
                                                        }
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a.owl-prev i {
                                                        padding: 0px 0px 0px 0px;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a.owl-next {
                                                        top: 50%;
                                                        transform: translateY(calc(-50% + 0px));
                                                        right: -43px;
                                                    }

                                                    @media all and (-ms-high-contrast: none) {
                                                        .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a.owl-next {
                                                            transform: translateY(-50%);
                                                            margin-top: 0px;
                                                        }
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a.owl-next i {
                                                        padding: 0px 0px 0px 0px;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav i {
                                                        font-size: 18px;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a:not(:hover) i,
                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a:not(:hover) i:before {
                                                        color: #ffffff;
                                                        background: none;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a:hover i,
                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-nav a:hover i:before {
                                                        color: rgba(255, 255, 255, 0.75);
                                                        background: none;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-dots {
                                                        top: calc(100% + 20px);
                                                        left: 50%;
                                                        transform: translateX(calc(-50% + 0px));
                                                    }

                                                    @media all and (-ms-high-contrast: none) {
                                                        .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-dots {
                                                            transform: translateX(-50%);
                                                            margin-left: 0px;
                                                        }
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-dot {
                                                        width: 10px;
                                                        height: 10px;
                                                        margin: 0 8px;
                                                    }

                                                    .bullets-ubax.gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .owl-dot.active span {
                                                        border-color: ;
                                                    }

                                                    @media screen and (max-width: 778px) {
                                                        .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.hide-arrows .owl-nav a {
                                                            display: none;
                                                        }
                                                    }

                                                    @media screen and (max-width: 778px) {
                                                        .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.reposition-arrows .owl-nav .owl-prev {
                                                            top: 50%;
                                                            transform: translateY(calc(-50% + 0px));
                                                            left: 10px;
                                                        }
                                                        .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.reposition-arrows .owl-nav .owl-next {
                                                            top: 50%;
                                                            transform: translateY(calc(-50% + 0px));
                                                            right: 10px;
                                                        }
                                                    }

                                                    @media screen and (max-width: 778px) and all and (-ms-high-contrast: none) {
                                                        .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.reposition-arrows .owl-nav .owl-prev {
                                                            transform: translateY(-50%);
                                                            margin-top: 0px;
                                                        }
                                                    }

                                                    @media screen and (max-width: 778px) and all and (-ms-high-contrast: none) {
                                                        .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.reposition-arrows .owl-nav .owl-next {
                                                            transform: translateY(-50%);
                                                            margin-top: 0px;
                                                        }
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d figure,
                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .rollover,
                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d img,
                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d .gallery-rollover {
                                                        border-radius: 0px;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.enable-bg-rollover .gallery-rollover {
                                                        background: ;
                                                        background: -webkit-linear-gradient();
                                                        background: linear-gradient();
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.enable-img-shadow figure {
                                                        box-shadow: "";
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.enable-img-shadow .owl-stage-outer {
                                                        padding: 4px 0;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.enable-bg-rollover.hover-scale figure .rollover:after {
                                                        background: ;
                                                        background: -webkit-linear-gradient();
                                                        background: linear-gradient();
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.gallery-shortcode .gallery-zoom-ico {
                                                        width: 44px;
                                                        height: 44px;
                                                        line-height: 44px;
                                                        border-radius: 100px;
                                                        margin: -22px 0 0 -22px;
                                                        border-width: 0px;
                                                    }

                                                    .dt-icon-bg-on.gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.gallery-shortcode .gallery-zoom-ico {
                                                        background: rgba(255, 255, 255, 0.3);
                                                        -webkit-box-shadow: none;
                                                        box-shadow: none;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.gallery-shortcode .gallery-zoom-ico>span:before {
                                                        font-size: 32px;
                                                        line-height: 44px;
                                                    }

                                                    .gallery-carousel-shortcode.gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d.gallery-shortcode .gallery-zoom-ico>span {
                                                        color: #ffffff;
                                                        background: none;
                                                    }
                                                </style>
                                                <div class="owl-carousel gallery-carousel-shortcode gallery-shortcode  dt-gallery-container dt-owl-carousel-call gallery-carousel-shortcode-id-75c9050bc230bf875fa7797537b14c3d meta-info-off dt-arrow-border-on dt-arrow-hover-border-on bullets-small-dot-stroke reposition-arrows dt-icon-bg-off arrows-bg-on disable-arrows-hover-bg arrows-hover-bg-on  hover-fade " data-scroll-mode="1" data-col-num="1" data-wide-col-num="1" data-laptop-col="1" data-h-tablet-columns-num="1" data-v-tablet-columns-num="1" data-phone-columns-num="1" data-col-gap="0" data-speed="600" data-autoplay="true" data-autoplay_speed="4000" data-arrows="false" data-bullet="true" data-next-icon="icon-ar-017-r" data-prev-icon="icon-ar-017-l" data-img-shadow-size="12px" data-img-shadow-spread="3px">
                                                    <div data-post-id="488" data-date="2020-02-28T12:21:40-05:00" data-name="velatorio_ejemplo2">
                                                        <figure class="post"><a href="http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/velatorio_ejemplo2.jpg" class="rollover dt-pswp-item layzr-bg" data-large_image_width="900" data-large_image_height="675" data-dt-img-description="" title="velatorio_ejemplo2"><img class="preload-me owl-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20899%20506&#39;%2F%3E" data-src="http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/velatorio_ejemplo2-899x506.jpg" data-srcset="http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/velatorio_ejemplo2-899x506.jpg 899w, http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/velatorio_ejemplo2-900x506.jpg 900w" alt="" width="899" height="506"  /><span class="gallery-rollover"></span></a></figure>
                                                    </div>
                                                    <div data-post-id="487" data-date="2020-02-28T12:21:30-05:00" data-name="velatorio_ejemplo1">
                                                        <figure class="post"><a href="http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/velatorio_ejemplo1.jpg" class="rollover dt-pswp-item layzr-bg" data-large_image_width="900" data-large_image_height="675" data-dt-img-description="" title="velatorio_ejemplo1"><img class="preload-me owl-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20899%20506&#39;%2F%3E" data-src="http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/velatorio_ejemplo1-899x506.jpg" data-srcset="http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/velatorio_ejemplo1-899x506.jpg 899w, http://www.parquedelaesperanza.com/wp-content/uploads/2020/02/velatorio_ejemplo1-900x506.jpg 900w" alt="" width="899" height="506"  /><span class="gallery-rollover"></span></a></figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1582844064402 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h2 style="text-align: center;">Estamos para ayudarte</h2>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   otros-servicioss">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="http://www.parquedelaesperanza.com/servicios/velatorios/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="600" data-large_image_height="400"><img width="600" height="400" src="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/necesidad-inmediata-pe-tres.jpeg" class="vc_single_image-img attachment-full" alt="" srcset="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/necesidad-inmediata-pe-tres.jpeg 600w, http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/necesidad-inmediata-pe-tres-300x200.jpeg 300w" sizes="(max-width: 600px) 100vw, 600px"  data-dt-location="http://www.parquedelaesperanza.com/necesidad-inmediata-pe-tres/" /></a>
                                                        <figcaption class="vc_figure-caption">NECESIDAD INMEDIATA</figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   otros-servicioss">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="http://www.parquedelaesperanza.com/servicios/sepelio/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="900" data-large_image_height="600"><img width="900" height="600" src="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/pe-toldoblanco-11.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/pe-toldoblanco-11.jpg 900w, http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/pe-toldoblanco-11-300x200.jpg 300w, http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/pe-toldoblanco-11-768x512.jpg 768w" sizes="(max-width: 900px) 100vw, 900px"  data-dt-location="http://www.parquedelaesperanza.com/servicios/sepelio/attachment/pe-toldoblanco-11/" /></a>
                                                        <figcaption class="vc_figure-caption">SEPELIOS</figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   otros-servicioss">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="http://www.parquedelaesperanza.com/sepulturas/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="630" data-large_image_height="420"><img width="630" height="420" src="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/serv-sepelios.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/serv-sepelios.jpg 630w, http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/serv-sepelios-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px"  data-dt-location="http://www.parquedelaesperanza.com/servicios/necesidad-futura/attachment/serv-sepelios/" /></a>
                                                        <figcaption class="vc_figure-caption">SEPULTURAS</figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   otros-servicioss">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="http://www.parquedelaesperanza.com/servicios/cremacion/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="630" data-large_image_height="420"><img width="630" height="420" src="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg 630w, http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/crematorio-parque-esperanza-general-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px"  data-dt-location="http://www.parquedelaesperanza.com/servicios/cremacion/attachment/crematorio-parque-esperanza-general/" /></a>
                                                        <figcaption class="vc_figure-caption">CREMACIÓN</figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid slide_comunicate">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h3 style="text-align: center;">Comunícate con nosotros</h3>
                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="aio-icon-component   icons_contactanos style_1">
                                                    <div id="Info-box-wrap-9148" class="aio-icon-box top-icon" style="">
                                                        <div class="aio-icon-top">
                                                            <div class="ult-just-icon-wrapper  ">
                                                                <div class="align-icon" style="text-align:center;">
                                                                    <div class="aio-icon none " style="color:#ffffff;font-size:46px;display:inline-block;">
                                                                        <i class="Defaults-phone"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="aio-icon-header">
                                                            <p class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-9148 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:23px;","line-height":""}' style="color:#ffffff;">Teléfono</p>
                                                        </div>
                                                        <!-- header -->
                                                        <div class="aio-icon-description ult-responsive" data-ultimate-target='#Info-box-wrap-9148 .aio-icon-description' data-responsive-json-new='{"font-size":"desktop:20px;","line-height":""}' style="color:#dbb66d;">(054) 604 848</div>
                                                        <!-- description -->
                                                    </div>
                                                    <!-- aio-icon-box -->
                                                </div>
                                                <!-- aio-icon-component -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="aio-icon-component   icons_contactanos style_1">
                                                    <div id="Info-box-wrap-8684" class="aio-icon-box top-icon" style="">
                                                        <div class="aio-icon-top">
                                                            <div class="ult-just-icon-wrapper  ">
                                                                <div class="align-icon" style="text-align:center;">
                                                                    <div class="aio-icon none " style="color:#ffffff;font-size:46px;display:inline-block;">
                                                                        <i class="Defaults-map-marker"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="aio-icon-header">
                                                            <p class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-8684 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:23px;","line-height":""}' style="color:#ffffff;">Dirección</p>
                                                        </div>
                                                        <!-- header -->
                                                        <div class="aio-icon-description ult-responsive" data-ultimate-target='#Info-box-wrap-8684 .aio-icon-description' data-responsive-json-new='{"font-size":"desktop:20px;","line-height":""}' style="color:#dbb66d;">Calle Peral 573<br /> Cercado-Arequipa
                                                        </div>
                                                        <!-- description -->
                                                    </div>
                                                    <!-- aio-icon-box -->
                                                </div>
                                                <!-- aio-icon-component -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="aio-icon-component   icons_contactanos style_1">
                                                    <div id="Info-box-wrap-3449" class="aio-icon-box top-icon" style="">
                                                        <div class="aio-icon-top">
                                                            <div class="ult-just-icon-wrapper  ">
                                                                <div class="align-icon" style="text-align:center;">
                                                                    <div class="aio-icon none " style="color:#ffffff;font-size:46px;display:inline-block;">
                                                                        <i class="Defaults-clock-o"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="aio-icon-header">
                                                            <p class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3449 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:23px;","line-height":""}' style="color:#ffffff;">Horarios</p>
                                                        </div>
                                                        <!-- header -->
                                                        <div class="aio-icon-description ult-responsive" data-ultimate-target='#Info-box-wrap-3449 .aio-icon-description' data-responsive-json-new='{"font-size":"desktop:20px;","line-height":""}' style="color:#dbb66d;">lunes a viernes de<br /> 8:30am a 6:00pm</div>
                                                        <!-- description -->
                                                    </div>
                                                    <!-- aio-icon-box -->
                                                </div>
                                                <!-- aio-icon-component -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid contacto-footer dt-default" style="margin-top: 0px;margin-bottom: 0px">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="345" height="339" src="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/parque-logo-opacity.png" class="vc_single_image-img attachment-full" alt="" srcset="http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/parque-logo-opacity.png 345w, http://www.parquedelaesperanza.com/wp-content/uploads/2020/05/parque-logo-opacity-300x295.png 300w" sizes="(max-width: 345px) 100vw, 345px" data-dt-location="http://www.parquedelaesperanza.com/parque-logo-opacity/" /></div>
                                    </figure>
                                </div>
                                <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="text-align: center; font-size: 30px; line-height: 1.4;">Si deseas obtener más información acerca de nuestros servicios, completa el siguiente formulario y te contactaremos</h2>
                                                    </div>
                                                </div>
                                                <div role="form" class="wpcf7" id="wpcf7-f193-p460-o1" lang="es-ES" dir="ltr">
                                                    <div class="screen-reader-response" aria-live="polite"></div>
                                                    <form action="/servicios/velatorios/#wpcf7-f193-p460-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="193" />
                                                            <input type="hidden" name="_wpcf7_version" value="5.1.9" />
                                                            <input type="hidden" name="_wpcf7_locale" value="es_ES" />
                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f193-p460-o1" />
                                                            <input type="hidden" name="_wpcf7_container_post" value="460" />
                                                            <input type="hidden" name="g-recaptcha-response" value="" />
                                                        </div>
                                                        <div class="formulario-contacto">
                                                            <div class="form-50">
                                                                <span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Nombres" /></span>
                                                            </div>
                                                            <div class="form-50">
                                                                <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Apellidos" /></span></div>
                                                        </div>
                                                        <div class="formulario-contacto">
                                                            <div class="form-50">
                                                                <p><span class="wpcf7-form-control-wrap tel-993"><input type="tel" name="tel-993" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="*Celular" /></span>
                                                                </p>
                                                            </div>
                                                            <div class="form-50">
                                                                <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="*Correo electrónico" /></span></div>
                                                        </div>
                                                        <div class="formulario-contacto">
                                                            <div class="form-100">
                                                                <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Mensaje"></textarea></span></div>
                                                        </div>
                                                        <div class="form-100 terminos"><span class="wpcf7-form-control-wrap terminos-condiciones"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="terminos-condiciones[]" value="He leído y estoy de acuerdo" /><span class="wpcf7-list-item-label">He leído y estoy de acuerdo</span></label>
                                                            </span>
                                                            </span>
                                                            </span> <span><a href="http://www.parquedelaesperanza.com/politica-privacidad/" target="_blank"> con los términos y condiciones</a>.</span>
                                                        </div>
                                                        <div class="form-100 btn_enviar_of"><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></div>
                                                        <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #content -->

        </div>
        <!-- .wf-container -->
    </div>
    <!-- .wf-wrap -->
</div>
<!-- #main -->