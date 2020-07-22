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
<link href="/assets/index/sepulturas.css" rel="stylesheet" type="text/css"/>
<script type='text/javascript' src='/wp-includes/js/jquery/ui/core.min.js'></script>
<script type='text/javascript' src='/wp-includes/js/jquery/ui/widget.min.js'></script>
<script type='text/javascript' src='/wp-includes/js/jquery/ui/tabs.min.js'></script>
<script type='text/javascript' src='/wp-content/plugins/js_composer/assets/lib/bower/jquery-ui-tabs-rotate/jquery-ui-tabs-rotate.min.js'></script>

<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding-top:0px;" >
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <div id="sepultura_page" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_row-o-full-height vc_row-o-columns-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp" >
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center;">Sepulturas</h1>
                                        <p style="text-align: center;">Construimos un camino de esperanza<br />
                                            que nos lleva a la vida eterna</p>
                                    </div>
                                </div>
                            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px;margin-bottom: 0px"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 100px" ><span class="vc_empty_space_inner"></span></div>
                            </div></div></div></div><div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px;margin-bottom: 0px"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                                <div class="wpb_tour wpb_content_element  tab-style-one" data-interval="0">
                                    <div class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs vc_clearfix">
                                        <ul class="wpb_tabs_nav ui-tabs-nav vc_clearfix text-big"><li><a href="#tab-1581069322984-2-6">Espacio Familiar – capacidad 5</a></li><li><a href="#tab-1581069323997-3-0">Espacio Doble – capacidad 2</a></li><li><a href="#tab-1581069325944-4-2">Espacio Compartido</a></li><li><a href="#tab-705d4a06-6f9a-1">Mausoleo Horizontal – capacidad 10</a></li><li><a href="#tab-5f28fffb-ef72-2">Mausoleo Vertical - capacidad 10</a></li><li><a href="#tab-1581069327390-6-0">Cinerarios</a></li><li><a href="#tab-1581069326677-5-0">Columbarios</a></li><li><a href="#tab-1581069328134-7-1">Cinerarios – Jardinera</a></li></ul>
                                        <div id="tab-1581069322984-2-6" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582861811299">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;"><strong>Espacio Familiar – capacidad 5 niveles</strong></h2>
                                                    <?php
                                                        echo searchForId('Sepulturas.EspacioFamiliarCapacidad5Niveles', $texts)['Description'];
                                                        ?>                                                    
                                                </div>
                                            </div>
                                            <div  class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="400" height="630" src="/wp-content/uploads/2020/05/actualizado-espacio-familiar-5.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/actualizado-espacio-familiar-5.jpg 400w, /wp-content/uploads/2020/05/actualizado-espacio-familiar-5-190x300.jpg 190w" sizes="(max-width: 400px) 100vw, 400px"  data-dt-location="/sepulturas/attachment/actualizado-espacio-familiar-5/" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div id="tab-1581069323997-3-0" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582861818187">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;"><strong>Espacio Doble – capacidad 2 niveles</strong></h2>
                                                    <?php
                                                        echo searchForId('Sepulturas.EspacioDobleCapacidad2Niveles', $texts)['Description'];
                                                        ?> 
                                                    
                                                   
                                                </div>
                                            </div>
                                            <div  class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/wp-content/uploads/2020/05/espacio-doble-capacidad-2-400x616.jpg" width="400" height="616" alt="espacio-doble-capacidad-2" title="espacio-doble-capacidad-2"  data-dt-location="/sepulturas/attachment/espacio-doble-capacidad-2/" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div id="tab-1581069325944-4-2" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582861823904">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;"><strong>Espacio Compartido</strong></h2>
                                                    <?php
                                                        echo searchForId('Sepulturas.EspacioCompartido', $texts)['Description'];
                                                        ?> 
                                                    </div>
                                            </div>
                                            <div  class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/wp-content/uploads/2020/05/espacio-compartido-400x638.jpg" width="400" height="638" alt="espacio-compartido" title="espacio-compartido"  data-dt-location="/sepulturas/attachment/espacio-compartido/" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div id="tab-705d4a06-6f9a-1" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582861805537">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;"><strong>Mausoleo Horizontal – capacidad <span class="numbers">10 niveles</span></strong></h2>
                                                    <?php
                                                        echo searchForId('Sepulturas.MausoleoHorizontalCapacidad10Niveles', $texts)['Description'];
                                                        ?> 
                                                    </div>
                                            </div>
                                            <div  class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/wp-content/uploads/2020/05/mausuleos-ejemplo-400x568.jpg" width="400" height="568" alt="mausuleos-ejemplo" title="mausuleos-ejemplo"  data-dt-location="/sepulturas/attachment/mausuleos-ejemplo/" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div id="tab-5f28fffb-ef72-2" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582861797998">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;"><strong>Mausoleo Vertical – capacidad <span class="numbers">10 niveles</span></strong></h2>
                                                    <?php
                                                        echo searchForId('Sepulturas.MausoleoVerticalCapacidad10Niveles', $texts)['Description'];
                                                        ?>
                                                </div>
                                            </div>
                                            <div  class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/wp-content/uploads/2020/05/mausuleos-galeria-1-600x386.jpg" width="600" height="386" alt="Mausoleos Familiares" title="Mausoleos Familiares"  data-dt-location="/galeria/attachment/mausuleos-galeria-1/" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div id="tab-1581069327390-6-0" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582861835725">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;"><strong>Cinerarios</strong></h2>
                                                    <?php
                                                        echo searchForId('Sepulturas.Cinerarios', $texts)['Description'];
                                                        ?>
                                                </div>
                                            </div>
                                            <div  class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="400" height="606" src="/wp-content/uploads/2020/05/cinerarios.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/cinerarios.jpg 400w, /wp-content/uploads/2020/05/cinerarios-198x300.jpg 198w" sizes="(max-width: 400px) 100vw, 400px"  data-dt-location="/sepulturas/attachment/cinerarios/" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div id="tab-1581069326677-5-0" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582861830362">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;"><strong>Columbarios</strong></h2>
                                                    <?php
                                                        echo searchForId('Sepulturas.Columbarios', $texts)['Description'];
                                                        ?>
                                                
                                                </div>
                                            </div>
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1590628573445">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/wp-content/uploads/2020/05/columbarios-600x454.jpg" width="600" height="454" alt="Imagen referencial" title="columbarios"  data-dt-location="/sepulturas/attachment/columbarios/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center; font-size: 17px;"><em>Imagen referencial</em></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-1581069328134-7-1" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582861841106">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="109" height="39" src="/wp-content/uploads/2020/02/pe_icons_titles.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="/inicio/attachment/pe_icons_titles/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;"><strong>Cinerarios – Jardinera</strong></h2>
                                                     <?php
                                                        echo searchForId('Sepulturas.CinerariosJardinera', $texts)['Description'];
                                                        ?>
                                                
                                                </div>
                                            </div>
                                            <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1590628640836">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/wp-content/uploads/2020/05/cinerarios-jardineria-600x405.jpg" width="600" height="405" alt="Imagen referencial" title="cinerarios-jardineria"  data-dt-location="/sepulturas/attachment/cinerarios-jardineria/" /></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center; font-size: 17px;"><em>Imagen referencial</em></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_tour_next_prev_nav vc_clearfix"> <span class="wpb_prev_slide"><a href="#prev" title="Pestaña anterior">Pestaña anterior</a></span> <span class="wpb_next_slide"><a href="#next" title="Pestaña siguiente">Pestaña siguiente</a></span></div>
                                    </div>
                                </div>
                            </div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1582844064402 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div>
                                <div class="wpb_text_column wpb_content_element " >
                                    <div class="wpb_wrapper">
                                        <h2 style="text-align: center;">Estamos para ayudarte</h2>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_center   otros-servicioss">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="/servicios/velatorios/" target="_blank"  class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="630" data-large_image_height = "420"     ><img width="630" height="420" src="/wp-content/uploads/2020/02/servicio_velatorios_parque.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/02/servicio_velatorios_parque.jpg 630w, /wp-content/uploads/2020/02/servicio_velatorios_parque-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px"  data-dt-location="/inicio/attachment/servicio_velatorios_parque/" /></a><figcaption class="vc_figure-caption">VELATORIOS</figcaption>
                                                    </figure>
                                                </div>
                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_center   otros-servicioss">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="/servicios/sepelio/" target="_blank"  class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="900" data-large_image_height = "600"     ><img width="900" height="600" src="/wp-content/uploads/2020/05/pe-toldoblanco-11.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/pe-toldoblanco-11.jpg 900w, /wp-content/uploads/2020/05/pe-toldoblanco-11-300x200.jpg 300w, /wp-content/uploads/2020/05/pe-toldoblanco-11-768x512.jpg 768w" sizes="(max-width: 900px) 100vw, 900px"  data-dt-location="/servicios/sepelio/attachment/pe-toldoblanco-11/" /></a><figcaption class="vc_figure-caption">SEPELIOS</figcaption>
                                                    </figure>
                                                </div>
                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_center   otros-servicioss">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="/servicios/necesidad-inmediata/" target="_blank"  class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="600" data-large_image_height = "400"     ><img width="600" height="400" src="/wp-content/uploads/2020/05/necesidad-inmediata-pe-tres.jpeg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/necesidad-inmediata-pe-tres.jpeg 600w, /wp-content/uploads/2020/05/necesidad-inmediata-pe-tres-300x200.jpeg 300w" sizes="(max-width: 600px) 100vw, 600px"  data-dt-location="/necesidad-inmediata-pe-tres/" /></a><figcaption class="vc_figure-caption">NECESIDAD INMEDIATA</figcaption>
                                                    </figure>
                                                </div>
                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_center   otros-servicioss">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="/servicios/cremacion/" target="_blank"  class="vc_single_image-wrapper   vc_box_border_grey rollover" data-large_image_width="630" data-large_image_height = "420"     ><img width="630" height="420" src="/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/crematorio-parque-esperanza-general.jpg 630w, /wp-content/uploads/2020/05/crematorio-parque-esperanza-general-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px"  data-dt-location="/servicios/cremacion/attachment/crematorio-parque-esperanza-general/" /></a><figcaption class="vc_figure-caption">CREMACIÓN</figcaption>
                                                    </figure>
                                                </div>
                                            </div></div></div></div><div class="vc_empty_space"   style="height: 45px" ><span class="vc_empty_space_inner"></span></div>
                            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid slide_comunicate"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element " >
                                    <div class="wpb_wrapper">
                                        <h3 style="text-align: center;">Comunícate con nosotros</h3>
                                    </div>
                                </div>
                                <div class="vc_empty_space"   style="height: 42px" ><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component   icons_contactanos style_1"><div id="Info-box-wrap-8948" class="aio-icon-box top-icon" style=""  ><div class="aio-icon-top"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
                                                                    <div class="aio-icon none "  style="color:#ffffff;font-size:46px;display:inline-block;">
                                                                        <i class="Defaults-phone"></i>
                                                                    </div></div></div></div><div class="aio-icon-header" ><p class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8948 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:23px;","line-height":""}'  style="color:#ffffff;">Teléfono</p></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-8948 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":""}'  style="color:#dbb66d;">(054) 604 848</div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component   icons_contactanos style_1"><div id="Info-box-wrap-7883" class="aio-icon-box top-icon" style=""  ><div class="aio-icon-top"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
                                                                    <div class="aio-icon none "  style="color:#ffffff;font-size:46px;display:inline-block;">
                                                                        <i class="Defaults-map-marker"></i>
                                                                    </div></div></div></div><div class="aio-icon-header" ><p class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-7883 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:23px;","line-height":""}'  style="color:#ffffff;">Dirección</p></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-7883 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":""}'  style="color:#dbb66d;">Calle Peral 573<br />
                                                            Cercado-Arequipa</div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component   icons_contactanos style_1"><div id="Info-box-wrap-3666" class="aio-icon-box top-icon" style=""  ><div class="aio-icon-top"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
                                                                    <div class="aio-icon none "  style="color:#ffffff;font-size:46px;display:inline-block;">
                                                                        <i class="Defaults-clock-o"></i>
                                                                    </div></div></div></div><div class="aio-icon-header" ><p class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-3666 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:23px;","line-height":""}'  style="color:#ffffff;">Horarios</p></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-3666 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":""}'  style="color:#dbb66d;">lunes a viernes de<br />
                                                            8:30am a 6:00pm</div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid contacto-footer dt-default" style="margin-top: 0px;margin-bottom: 0px"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                                <div  class="wpb_single_image wpb_content_element vc_align_left">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="345" height="339" src="/wp-content/uploads/2020/05/parque-logo-opacity.png" class="vc_single_image-img attachment-full" alt="" srcset="/wp-content/uploads/2020/05/parque-logo-opacity.png 345w, /wp-content/uploads/2020/05/parque-logo-opacity-300x295.png 300w" sizes="(max-width: 345px) 100vw, 345px"  data-dt-location="/parque-logo-opacity/" /></div>
                                    </figure>
                                </div>
                                <div class="vc_empty_space"   style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element " >
                                                    <div class="wpb_wrapper">
                                                        <h2 style="text-align: center; font-size: 30px; line-height: 1.4;">Si deseas obtener más información acerca de nuestros servicios, completa el siguiente formulario y te contactaremos</h2>
                                                    </div>
                                                </div>
                                                <div role="form" class="wpcf7" id="wpcf7-f193-p345-o1" lang="es-ES" dir="ltr">
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
                                                                <input id="form_pagina" value="Sepulturas" type="hidden">
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
                                                            
                                                    
                                                </div></div></div></div></div><div class="vc_empty_space"   style="height: 10px" ><span class="vc_empty_space_inner"></span></div>
                            </div></div></div></div>
            </div><!-- #content -->

        </div><!-- .wf-container -->
    </div><!-- .wf-wrap -->
</div><!-- #main -->