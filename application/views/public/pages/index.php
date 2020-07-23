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
<link rel='stylesheet' id='ultimate-style-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/style.min.css?ver=3.16.22' type='text/css' media='all' /> 
<link rel='stylesheet' id='ult-slick-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/slick.min.css?ver=3.16.22' type='text/css' media='all' /> 
<link rel='stylesheet' id='ult-icons-css'  href='/assets/Ultimate_VC_Addons/assets/css/icons.css?ver=3.16.22' type='text/css' media='all' /> 
<link rel='stylesheet' id='ultimate-animate-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/animate.min.css?ver=3.16.22' type='text/css' media='all' /> 

<script type='text/javascript' src='/assets/Ultimate_VC_Addons/assets/min-js/ultimate-params.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='/assets/Ultimate_VC_Addons/assets/min-js/slick.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='/assets/Ultimate_VC_Addons/assets/min-js/jquery-appear.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='/assets/Ultimate_VC_Addons/assets/min-js/slick-custom.min.js?ver=3.16.22'></script> 
<link rel='stylesheet' id='ult-background-style-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/background-style.min.css?ver=3.16.22' type='text/css' media='all' /> 
<link href="/assets/index/style.css" rel="stylesheet" type="text/css"/>




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        $count = 0;
        foreach ($list as $item) {
            if ($count == 0) {
                echo '<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>';
            } else {
                echo '<li data-target="#carouselExampleCaptions" data-slide-to="' . $count . '"></li>';
            }
            $count++;
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        $count = 0;
        foreach ($list as $item) {
            if ($count == 0) {
                echo '<div class="carousel-item active">
      <img src="/uploads/banner/' . $item['Imagen_g'] . '" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 57px;line-height: 66px;font-weight: 400;color: rgb(255, 255, 255);letter-spacing: 0px;font-family: Sorts Mill Goudy;">' . utf8_decode($item['Title']) . '</h5>
                    <p style="white-space: nowrap;font-size: 28px;line-height: 36px;font-weight: 400;color: rgb(228, 183, 96);letter-spacing: 0px;font-family: Sorts Mill Goudy;">' . $item['Sumary'] . '</p>
                </div>
    </div>';
            } else {
                echo '<div class="carousel-item">
      <img src="/uploads/banner/' . $item['Imagen_g'] . '" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 57px;line-height: 66px;font-weight: 400;color: rgb(255, 255, 255);letter-spacing: 0px;font-family: Sorts Mill Goudy;">' . utf8_decode($item['Title']) . '</h5>
                    <p style="white-space: nowrap;font-size: 28px;line-height: 36px;font-weight: 400;color: rgb(228, 183, 96);letter-spacing: 0px;font-family: Sorts Mill Goudy;">' . $item['Sumary'] . '</p>
                </div>
    </div>';
            }
            $count++;
        }
        ?>


    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding-top:0px; padding-bottom:0px;">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <div class="vc_row wpb_row vc_row-fluid mini_menu dt-default" style="margin-top: 0px;margin-bottom: 0px">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                    <div class="wpb_wrapper">
                                        <div class="container--redes">
                                            <div class="icon">
                                                <a class="icon-primary" href="/buscador"><i class="Defaults-map-marker"></i></a>	
                                                <div class="container-description">
                                                    <a class="icon-description" href="/buscador" style="width: 300px;" >Encuentra a tu ser querido</a>	
                                                </div>
                                            </div>
                                            <div class="icon">
                                                <a class="icon-primary" href="/blog"><i class="Defaults-star"></i></a>	
                                                <div class="container-description ">
                                                    <a class="icon-description" href="/blog">Blog</a>	
                                                </div>
                                            </div>
                                            <div class="icon">
                                                <a class="icon-primary" href="/contacto/" target="_blank"><i class="Defaults-edit pencil-square-o"></i></a>
                                                <div class="container-description">
                                                    <a class="icon-description" href="/contacto/" target="_blank">Cotización</a>
                                                </div>
                                            </div>
                                            <div class="icon">
                                                <a class="icon-primary" href="https://www.facebook.com/ParquedelaesperanzaPERU/" target="_blank"><i class="Defaults-facebook facebook-f"></i></a>
                                                <div class="container-description">
                                                    <a class="icon-description" href="https://www.facebook.com/ParquedelaesperanzaPERU/">Síguenos en Facebook</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex ult-vc-hide-row vc_row-has-fill" style="left: -337px; position: relative; box-sizing: border-box; width: 1903px; padding-left: 337px; padding-right: 336px;" data-rtl="false" data-row-effect-mobile-disable="true">
                    <div class="upb_row_bg" data-upb_br_animation="" 
                         style="background: rgba(0, 0, 0, 0) -webkit-linear-gradient(rgb(246, 245, 235) 0%, rgb(255, 255, 255) 100%) repeat scroll 0% 0%; 
                         min-width: 1903px; left: 0px; width: 1903px;" data-bg-override="0"></div>

                    <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-2/5"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp amor-familia wpb_start_animation animated">
                                                    <div class="wpb_wrapper">
                                                        <h2>Porque te quiero, te cuido</h2>
                                                        <?php
                                                        $getinformacion = searchForId('Inicio.parrafo1', $texts);
                                                        echo $getinformacion['Description'];
                                                        ?>
                                                    </div>
                                                </div>
                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3/5"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_slideInUp slideInUp vc_custom_1582862045702 wpb_start_animation animated">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <img 
                                                                src="/assets/uploads/amor-de-familia.png" 
                                                                class="vc_single_image-img attachment-full" alt="" 
                                                                srcset="/assets/uploads/amor-de-familia.png 1178w, 
                                                                /assets/uploads/amor-de-familia-300x142.png 300w, 
                                                                /assets/uploads/amor-de-familia-768x362.png 768w, 
                                                                /assets/uploads/amor-de-familia-1024x483.png 1024w" 
                                                                sizes="(max-width: 1178px) 100vw, 1178px" 
                                                                width="1178" height="556"></div>
                                                    </figure>
                                                </div>
                                            </div></div></div></div><div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                            </div></div></div></div>


                <div class="vc_row-full-width vc_clearfix"></div>
                <!-- Row Backgrounds -->
                <div class="upb_grad" data-grad="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F6F5EB), color-stop(100%, #FFFFFF));background: -moz-linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);background: -webkit-linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);background: -o-linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);background: -ms-linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);background: linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);" data-bg-override="0" data-upb-overlay-color="" data-upb-bg-animation="" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="5.7" data-is_old_vc="" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                <div id="almitas_backgorund" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center;">Sonrío cuando miro al cielo</h1>
                                        <p style="text-align: center;">porque sé que me cuidas desde ahí</p>
                                    </div>
                                </div>
                                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                    <div class="wpb_wrapper">
                                        <div class="bg-animation">
                                            <div id='stars'></div>
                                            <div id='stars2'></div>
                                            <div id='stars3'></div>
                                            <div id='stars4'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px;margin-bottom: 0px">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>
                                <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582756798609">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            <img width="109" height="39" 
                                                 src="/assets/uploads/pe_icons_titles.png" 
                                                 class="vc_single_image-img attachment-full" alt="" 
                                                 /></div>
                                    </figure>
                                </div>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1590449465590">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center; color: #dbb66d;">Nuestros Servicios</h1>
                                        <div style="text-align: center; color: #40454a; font-weight: 200;"><?php
                                            $getinformacion =  searchForId('Inicio.NuestrosServicios', $texts);
                                            echo $getinformacion['Description'];
                                            ?></div>
                                    </div>
                                </div>
                                <div id="ult-carousel-4566550565ee3dd0ab0868" class="ult-carousel-wrapper   ult_horizontal" data-gutter="18" data-rtl="false">
                                    <div class="ult-carousel-3749864475ee3dd0ab0840 ">
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">


                                                                                <img width="630" height="420" src="/assets/uploads/home/necesidad_futura.jpg" class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/necesidad_futura.jpg 630w, 
                                                                                     /assets/uploads/home/necesidad_futura-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Necesidad Futura</h2>
                                                                            <?php
                                                                            $getinformacion = searchForId('Inicio.NecesidadFutura', $texts);
                                                                            echo $getinformacion['Description'];
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" style="border-color:#dbb66d; color:#dbb66d;" 
                                                                           class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/necesidad-futura/" title="Necesidad futura">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="600" height="400" src="/assets/uploads/home/necesidad-inmediata-pe-tres.jpeg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/necesidad-inmediata-pe-tres.jpeg 600w, 
                                                                                     /assets/uploads/home/necesidad-inmediata-pe-tres-300x200.jpeg 300w" sizes="(max-width: 600px) 100vw, 600px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Necesidad Inmediata</h2>
                                                                            <?php
                                                                            $getinformacion = searchForId('Inicio.NecesidadInmediata', $texts);
                                                                            echo $getinformacion['Description'];
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/necesidad-inmediata/" title="Necesidad futura">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="630" height="420" 
                                                                                     src="/assets/uploads/home/crematorio-parque-esperanza-general.jpg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/crematorio-parque-esperanza-general.jpg 630w, 
                                                                                     /assets/uploads/home/crematorio-parque-esperanza-general-300x200.jpg 300w" 
                                                                                     sizes="(max-width: 630px) 100vw, 630px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Cremación</h2>
                                                                            <?php
                                                                            $getinformacion = searchForId('Inicio.Cremacion', $texts);
                                                                            echo $getinformacion['Description'];
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" 
                                                                           class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/cremacion/" title="Necesidad futura">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="900" height="600" 
                                                                                     src="/assets/uploads/home/pe-toldoblanco-11.jpg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/pe-toldoblanco-11.jpg 900w, 
                                                                                     /assets/uploads/home/pe-toldoblanco-11-300x200.jpg 300w, 
                                                                                     /assets/uploads/home/pe-toldoblanco-11-768x512.jpg 768w" 
                                                                                     sizes="(max-width: 900px) 100vw, 900px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Sepelio</h2>
                                                                            <?php
                                                                            $getinformacion = searchForId('Inicio.Sepelio', $texts);
                                                                            echo $getinformacion['Description'];
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" 
                                                                           class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/sepelio/" title="Necesidad futura">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="630" height="420" 
                                                                                     src="/assets/uploads/home/servicio_velatorios_parque.jpg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/servicio_velatorios_parque.jpg 630w, 
                                                                                     /assets/uploads/home/servicio_velatorios_parque-300x200.jpg 300w" s
                                                                                     izes="(max-width: 630px) 100vw, 630px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Velatorios</h2>
                                                                            <?php
                                                                            $getinformacion = searchForId('Inicio.Velatorios', $texts);
                                                                            echo $getinformacion['Description'];
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/velatorios/" title="Velatorios">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="650" height="433" 
                                                                                     src="/assets/uploads/home/otros_servicios_parque_esperanza.jpg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/otros_servicios_parque_esperanza.jpg 650w, 
                                                                                     /assets/uploads/home/otros_servicios_parque_esperanza-300x200.jpg 300w" 
                                                                                     sizes="(max-width: 650px) 100vw, 650px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Otros servicios</h2>
                                                                            <p>Usted podrá rendirle un tributo de reconocimiento a su querido y para ello contamos con exclusivas lapidas de granito negro.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/otros-servicios/" title="Otros servicios">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script src="/assets/index/script.js" type="text/javascript"></script>                                
                            </div>
                        </div>
                    </div>
                </div>

                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid ult-vc-hide-row vc_row-has-fill" style="left: -145px; position: relative; box-sizing: border-box; width: 1519px; padding-left: 145px; padding-right: 144px;" data-rtl="false" data-row-effect-mobile-disable="true"><div class="upb_row_bg" data-upb_br_animation="" style="background: rgba(0, 0, 0, 0) -webkit-linear-gradient(rgb(255, 255, 255) 0%, rgb(246, 245, 235) 100%) repeat scroll 0% 0%; min-width: 1519px; left: 0px; width: 1519px;" data-bg-override="0"></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid contacto-footer"><div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="text-align: center; line-height: 1.5; font-size: 30px;">Si deseas obtener más información acerca de nuestros servicios, completa el siguiente formulario y te contactaremos</h2>
                                                    </div>
                                                </div>
                                                <div role="form" class="wpcf7" id="wpcf7-f193-p131-o1" dir="ltr" lang="es-ES">
                                                    <div class="screen-reader-response" aria-live="polite"></div>


                                                    <!--formulario contacto -->
                                                    <div class="formulario-contacto">
                                                        <div class="form-50">
                                                            <span class="wpcf7-form-control-wrap nombre">
                                                                <input type="text" id="form_nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" 
                                                                       aria-required="true" aria-invalid="false" placeholder="*Nombres">
                                                            </span>
                                                        </div>
                                                        <div class="form-50">
                                                            <span class="wpcf7-form-control-wrap apellido">
                                                                <input type="text" id="form_apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Apellidos">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="formulario-contacto">
                                                        <div class="form-50">
                                                            <p>
                                                                <span class="wpcf7-form-control-wrap tel-993">
                                                                    <input type="tel" id="form_telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="*Celular">
                                                                </span>
                                                            </p></div>
                                                        <div class="form-50">
                                                            <span class="wpcf7-form-control-wrap email">
                                                                <input type="email" id="form_email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="*Correo electrónico">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="formulario-contacto">
                                                        <div class="form-100">
                                                            <span class="wpcf7-form-control-wrap mensaje">
                                                                <textarea id="form_mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Mensaje"></textarea>
                                                                <input id="form_pagina" value="Inicio" type="hidden">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-100 terminos">
                                                        <span class="wpcf7-form-control-wrap terminos-condiciones"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required">
                                                                <span class="wpcf7-list-item first last">
                                                                    <label><input type="checkbox" name="terminos-condiciones[]" value="He leído y estoy de acuerdo" id="form_terminos_condiciones">
                                                                        <span class="wpcf7-list-item-label">He leído y estoy de acuerdo</span></label>                                                                                
                                                                </span>                                                                        
                                                            </span>                                                                    
                                                        </span> 
                                                        <span><a href="/politica-privacidad/" target="_blank"> con los términos y condiciones</a>.</span>
                                                    </div>
                                                    <div class="form-100 btn_enviar_of"><button  id="btnEnviar" style="background: #dbb66d !important;
                                                                                                 color: white !important;border-radius: 35px !important;
                                                                                                 font-size: 18px !important;
                                                                                                 letter-spacing: 1px !important;
                                                                                                 font-weight: 500 !important;
                                                                                                 padding: 3px 45px !important;
                                                                                                 background: #fff !important;
                                                                                                 border: 2px solid #dbb66d !important;
                                                                                                 color: #dbb66d !important;">Enviar</button> <span class="ajax-loader"></span></div>
                                                    <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                                    <!-- end formulario contacto-->





                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="vc_row-full-width vc_clearfix"></div>
                <!-- Row Backgrounds -->
                <div class="upb_grad" data-grad="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #FFFFFF), color-stop(100%, #F6F5EB));background: -moz-linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);background: -webkit-linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);background: -o-linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);background: -ms-linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);background: linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);" data-bg-override="0" data-upb-overlay-color="" data-upb-bg-animation="" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="5.7" data-is_old_vc="" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
            </div>
            <!-- #content -->

        </div>
        <!-- .wf-container -->
    </div>
    <!-- .wf-wrap -->
</div>
<!-- #main -->
<script src="/assets/theme/js/ultimate-params.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/slick.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/jquery-appear.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/slick-custom.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/ultimate_bg.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/custom.min.js" type="text/javascript"></script>

