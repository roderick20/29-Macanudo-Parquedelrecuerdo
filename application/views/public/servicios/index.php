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

<link href="/assets/index/serviciosindex.css" rel="stylesheet" type="text/css"/>


<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding-top:0px; padding-bottom:0px;">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <div id="seccion-servicios" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_row-o-full-height vc_row-o-columns-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center;">Nuestros servicios</h1>
                                        <p style="text-align: center;">Decide hoy junto a tu familia<br /> y regáleles tranquilidad</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>

                <div class="vc_row wpb_row vc_row-fluid listado_servicios">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 110px">
                                    <span class="vc_empty_space_inner"></span>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   wpb_slideInUp slideInUp wpb_start_animation animated">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="/wp-content/uploads/2020/02/necesidad_futura.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/02/necesidad_futura.jpg 630w, /wp-content/uploads/2020/02/necesidad_futura-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px" data-dt-location="/inicio/attachment/necesidad_futura/" width="630" height="420"></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element   wpb_fadeInUp fadeInUp wpb_start_animation animated">
                                                    <div class="wpb_wrapper">
                                                        <h2><strong>Compra anticipada – Necesidad Futura</strong></h2>
                                                        <?php
                                                        $getinformacion = searchForId('Servicios.CompraAnticipadaNecesidadFutura', $texts);
                                                        echo $getinformacion['Description'];
                                                        ?>
                                                        </div>
                                                </div>
                                                <div class="vc_btn3-container  btn_mas_info   wpb_fadeInUp fadeInUp vc_btn3-inline wpb_start_animation animated">
                                                    <a style="background-color:#ffffff; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom" href="/servicios/necesidad-futura/" title="Necesidad futura">Más información</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1582839747692  vc_custom_1582839747692"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   wpb_slideInUp slideInUp wpb_start_animation animated">
                                                    <div class="wpb_wrapper">
                                                        <h2><strong>Compra inaplazable – Necesidad Inmediata</strong></h2>
                                                        <?php
                                                        $getinformacion = searchForId('Servicios.CompraInaplazableNecesidadInmediata', $texts);
                                                        echo $getinformacion['Description'];
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container  btn_mas_info   wpb_fadeInUp fadeInUp vc_btn3-inline">
                                                    <a style="background-color:#ffffff; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom" href="/servicios/necesidad-inmediata/" title="Necesidad Inmediata">Más información</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   wpb_slideInUp slideInUp wpb_start_animation animated">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="/wp-content/uploads/2020/05/necesidad-inmediata-pe-tres.jpeg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/necesidad-inmediata-pe-tres.jpeg 600w, /wp-content/uploads/2020/05/necesidad-inmediata-pe-tres-300x200.jpeg 300w" sizes="(max-width: 600px) 100vw, 600px" data-dt-location="/necesidad-inmediata-pe-tres/" width="600" height="400"></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1582839747692  vc_custom_1582839747692"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   wpb_slideInUp slideInUp">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg 630w, /wp-content/uploads/2020/05/crematorio-parque-esperanza-general-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px" data-dt-location="/servicios/cremacion/attachment/crematorio-parque-esperanza-general/" width="630" height="420"></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element   wpb_fadeInUp fadeInUp">
                                                    <div class="wpb_wrapper">
                                                        <h2>Cremación</h2>
                                                        <?php
                                                        $getinformacion =  searchForId('Servicios.Cremacion', $texts);
                                                        echo $getinformacion['Description'];
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container  btn_mas_info   wpb_fadeInUp fadeInUp vc_btn3-inline">
                                                    <a style="background-color:#ffffff; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom" href="/servicios/cremacion/" title="Cremación">Más información</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1582839747692  vc_custom_1582839747692"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element   wpb_fadeInUp fadeInUp">
                                                    <div class="wpb_wrapper">
                                                        <h2><strong>Sepelio</strong></h2>
                                                        <?php
                                                        $getinformacion = searchForId('Servicios.Sepelio', $texts);
                                                        echo $getinformacion['Description'];
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container  btn_mas_info   wpb_fadeInUp fadeInUp vc_btn3-inline">
                                                    <a style="background-color:#ffffff; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom" href="/servicios/sepelio/" title="Servicios de Sepelio">Más información</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   wpb_slideInUp slideInUp">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="/wp-content/uploads/2020/05/pe-toldoblanco-11.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/pe-toldoblanco-11.jpg 900w, /wp-content/uploads/2020/05/pe-toldoblanco-11-300x200.jpg 300w, /wp-content/uploads/2020/05/pe-toldoblanco-11-768x512.jpg 768w" sizes="(max-width: 900px) 100vw, 900px" data-dt-location="/servicios/sepelio/attachment/pe-toldoblanco-11/" width="900" height="600"></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1582839747692  vc_custom_1582839747692"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   wpb_slideInUp slideInUp">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="/wp-content/uploads/2020/02/servicio_velatorios_parque.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/02/servicio_velatorios_parque.jpg 630w, /wp-content/uploads/2020/02/servicio_velatorios_parque-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px" data-dt-location="/inicio/attachment/servicio_velatorios_parque/" width="630" height="420"></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element   wpb_fadeInUp fadeInUp">
                                                    <div class="wpb_wrapper">
                                                        <h2>Velatorios</h2>
                                                        <?php
                                                        $getinformacion = searchForId('Servicios.Velatorios', $texts);
                                                        echo $getinformacion['Description'];
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container  btn_mas_info   wpb_fadeInUp fadeInUp vc_btn3-inline">
                                                    <a style="background-color:#ffffff; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom" href="/servicios/velatorios/" title="Velatorios">Más información</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1582839747692  vc_custom_1582839747692"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element   wpb_fadeInUp fadeInUp">
                                                    <div class="wpb_wrapper">
                                                        <h2>Otros servicios</h2>
                                                        <?php
                                                        $getinformacion = searchForId('Servicios.OtrosServicios', $texts);
                                                        echo $getinformacion['Description'];
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container  btn_mas_info   wpb_fadeInUp fadeInUp vc_btn3-inline">
                                                    <a style="background-color:#ffffff; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom" href="/servicios/otros-servicios/" title="Otros servicios">Más información</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center   wpb_slideInUp slideInUp">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="/wp-content/uploads/2020/02/otros_servicios_parque_esperanza.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/02/otros_servicios_parque_esperanza.jpg 650w, /wp-content/uploads/2020/02/otros_servicios_parque_esperanza-300x200.jpg 300w" sizes="(max-width: 650px) 100vw, 650px" data-dt-location="/inicio/attachment/otros_servicios_parque_esperanza/" width="650" height="433"></div>
                                                    </figure>
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




                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1582842202320 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-offset-2 vc_col-md-offset-2">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="600" height="555" src="/wp-content/uploads/2020/02/nido_parque_esperanza_acuarela.png" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/02/nido_parque_esperanza_acuarela.png 600w, /wp-content/uploads/2020/02/nido_parque_esperanza_acuarela-300x278.png 300w" sizes="(max-width: 600px) 100vw, 600px" data-dt-location="/servicios/attachment/nido_parque_esperanza_acuarela/" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-9">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p><span style="font-size: 25px; font-weight: 500;">Cuando la previsión es amor&#8230;</span></p>
                                                        <p><span style="font-size: 16px; line-height: 1.4;">Proveer lo que esté en nuestras manos ayudará a quitar la carga de tomar decisiones en tiempos de presión y vulnerabilidad</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
            </div>
        </div>
    </div>
</div>

