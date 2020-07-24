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

<link href="/assets/index/cremacion.css" rel="stylesheet" type="text/css"/>

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
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt="" data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                    </figure>
                                </div>
                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center; color: #dbb66d;">Cremación</h1>
                                        <p style="text-align: center; color: #40454a;"><em>Transformación de Esperanza</em></p>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="descripcion-cremacion wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner vc_custom_1591311853228">
                                            <div class="wpb_wrapper">
                                                <?php
                                                        $getinformacion = searchForId('ServiciosCremacion.Texto1', $texts);
                                                        echo $getinformacion['Description'];
                                                        ?>
                                               
                                                <div class="vc_btn3-container  wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_btn3-center">
                                                    <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" style="border-color:#dbb66d; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom anchor-link" href="#mayor-informacion" title="">Mayor información</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner vc_custom_1590179498557">
                                            <div class="wpb_wrapper">
                                                
                                                <div class="owl-carousel gallery-carousel-shortcode gallery-shortcode  dt-gallery-container dt-owl-carousel-call gallery-carousel-shortcode-id-f83fe08c9f1cca3ce90b29a049292d26 meta-info-off dt-arrow-border-on dt-arrow-hover-border-on bullets-small-dot-stroke reposition-arrows dt-icon-bg-off arrows-bg-on disable-arrows-hover-bg arrows-hover-bg-on  hover-fade " data-scroll-mode="1" data-col-num="1" data-wide-col-num="1" data-laptop-col="1" data-h-tablet-columns-num="1" data-v-tablet-columns-num="1" data-phone-columns-num="1" data-col-gap="0" data-speed="600" data-autoplay="true" data-autoplay_speed="4000" data-arrows="false" data-bullet="true" data-next-icon="icon-ar-017-r" data-prev-icon="icon-ar-017-l" data-img-shadow-size="12px" data-img-shadow-spread="3px">
                                                    <div data-post-id="579" data-date="2020-05-26T09:18:22-05:00" data-name="crematorio-parque-esperanza">
                                                        <figure class="post"><a href="/wp-content/uploads/2020/05/crematorio-parque-esperanza.jpg" class="rollover dt-pswp-item layzr-bg" data-large_image_width="620" data-large_image_height="413" data-dt-img-description="" title="crematorio-parque-esperanza"><img class="preload-me owl-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20620%20413&#39;%2F%3E" data-src="/wp-content/uploads/2020/05/crematorio-parque-esperanza.jpg" data-srcset="/wp-content/uploads/2020/05/crematorio-parque-esperanza.jpg 620w" alt="" width="620" height="413"  /><span class="gallery-rollover"></span></a></figure>
                                                    </div>
                                                    <div data-post-id="580" data-date="2020-05-26T10:00:37-05:00" data-name="CREMACIÓN">
                                                        <figure class="post"><a href="/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg" class="rollover dt-pswp-item layzr-bg" data-large_image_width="630" data-large_image_height="420" data-dt-img-description="" title="CREMACIÓN"><img class="preload-me owl-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20630%20420&#39;%2F%3E" data-src="/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg" data-srcset="/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg 630w" alt="" width="630" height="420"  /><span class="gallery-rollover"></span></a></figure>
                                                    </div>
                                                    <div data-post-id="672" data-date="2020-06-04T12:19:15-05:00" data-name="Columbario &lt;br&gt;*Imagen referencial">
                                                        <figure class="post"><a href="/wp-content/uploads/2020/06/galeria-columbario-imagen-referencial.jpg" class="rollover dt-pswp-item layzr-bg" data-large_image_width="951" data-large_image_height="600" data-dt-img-description="" title="Columbario &lt;br&gt;*Imagen referencial"><img class="preload-me owl-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20951%20600&#39;%2F%3E" data-src="/wp-content/uploads/2020/06/galeria-columbario-imagen-referencial.jpg" data-srcset="/wp-content/uploads/2020/06/galeria-columbario-imagen-referencial.jpg 951w" alt="" width="951" height="600"  /><span class="gallery-rollover"></span></a></figure>
                                                    </div>
                                                    <div data-post-id="673" data-date="2020-06-04T12:19:16-05:00" data-name="Cinerarios - Jardinera &lt;br&gt; *Imagen referencial">
                                                        <figure class="post"><a href="/wp-content/uploads/2020/06/galeria-jardinera-imagen-referencial.jpg" class="rollover dt-pswp-item layzr-bg" data-large_image_width="953" data-large_image_height="600" data-dt-img-description="" title="Cinerarios &#8211; Jardinera &lt;br&gt; *Imagen referencial"><img class="preload-me owl-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20953%20600&#39;%2F%3E" data-src="/wp-content/uploads/2020/06/galeria-jardinera-imagen-referencial.jpg" data-srcset="/wp-content/uploads/2020/06/galeria-jardinera-imagen-referencial.jpg 953w" alt="" width="953" height="600"  /><span class="gallery-rollover"></span></a></figure>
                                                    </div>
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
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1582844064402 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-offset-1 vc_col-md-10 vc_col-sm-offset-1">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div id="ult-video-banner-7368763915ee3fed20f900" class=" ult-video-banner ult-vdo-effect ult-vdo-effect-style3 utl-video-banner-item ult-responsive" data-ultimate-target='#ult-video-banner-7368763915ee3fed20f900' data-responsive-json-new='{"width":""}' data-current-time="0" data-placeholder="/wp-content/uploads/2020/05/galeria-cremacion-2.jpg" style="background-image:url(/wp-content/uploads/2020/05/galeria-cremacion-2.jpg);"><video autoplay loop poster="/wp-content/uploads/2020/05/galeria-cremacion-2.jpg"><source src="/wp-content/uploads/2020/06/servicio-de-cremacion-parque-esperanza.m4v" type="video/mp4">Your browser does not support the video tag.</video>
                                                    <div class="ult-video-banner-overlay" data-overlay="" data-overlay-hover=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                        <a href="/servicios/velatorios/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="630" data-large_image_height="420"><img width="630" height="420" src="/wp-content/uploads/2020/02/servicio_velatorios_parque.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/02/servicio_velatorios_parque.jpg 630w, /wp-content/uploads/2020/02/servicio_velatorios_parque-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px"  data-dt-location="/inicio/attachment/servicio_velatorios_parque/" /></a>
                                                        <figcaption class="vc_figure-caption">VELATORIOS</figcaption>
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
                                                        <a href="/servicios/sepelio/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="900" data-large_image_height="600"><img width="900" height="600" src="/wp-content/uploads/2020/05/pe-toldoblanco-11.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/pe-toldoblanco-11.jpg 900w, /wp-content/uploads/2020/05/pe-toldoblanco-11-300x200.jpg 300w, /wp-content/uploads/2020/05/pe-toldoblanco-11-768x512.jpg 768w" sizes="(max-width: 900px) 100vw, 900px"  data-dt-location="/servicios/sepelio/attachment/pe-toldoblanco-11/" /></a>
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
                                                        <a href="/sepulturas/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="630" data-large_image_height="420"><img width="630" height="420" src="/wp-content/uploads/2020/05/serv-sepelios.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/serv-sepelios.jpg 630w, /wp-content/uploads/2020/05/serv-sepelios-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px"  data-dt-location="/servicios/necesidad-futura/attachment/serv-sepelios/" /></a>
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
                                                        <a href="/servicios/necesidad-futura/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="630" data-large_image_height="420"><img width="630" height="420" src="/wp-content/uploads/2020/02/necesidad_futura.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/02/necesidad_futura.jpg 630w, /wp-content/uploads/2020/02/necesidad_futura-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px"  data-dt-location="/inicio/attachment/necesidad_futura/" /></a>
                                                        <figcaption class="vc_figure-caption">NECESIDAD FUTURA</figcaption>
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
                <div id="mayor-informacion" class="vc_row wpb_row vc_row-fluid contacto-footer">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="345" height="339" src="/wp-content/uploads/2020/05/parque-logo-opacity.png" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/parque-logo-opacity.png 345w, /wp-content/uploads/2020/05/parque-logo-opacity-300x295.png 300w" sizes="(max-width: 345px) 100vw, 345px" data-dt-location="/parque-logo-opacity/" /></div>
                                    </figure>
                                </div>
                                <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="text-align: center; font-size: 30px; line-height: 1.4;">Si deseas obtener más información acerca de nuestros servicios, completa el siguiente formulario y te contactaremos</h2>
                                                    </div>
                                                </div>
                                                <div role="form" class="wpcf7" id="wpcf7-f193-p447-o1" lang="es-ES" dir="ltr">
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
                                                                <input id="form_pagina" value="Cremacion" type="hidden">
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
                                <div class="vc_empty_space" style="height: 75px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>