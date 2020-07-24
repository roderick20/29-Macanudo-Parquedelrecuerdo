<link href="/assets/index/ubicacion.css" rel="stylesheet" type="text/css"/>


<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="img_modal" src="/assets/map/mapa_virgen_del_rosario_2.jpeg" alt="" class="img-fluid"/>
            </div>      
        </div>
    </div>
</div>


<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding-top:0px;" >
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <div id="contacto_form_page" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_row-o-full-height vc_row-o-columns-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element " >
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center;">Encuentra a tu ser querido</h1>
                                        <p style="text-align: center;">Si deseas conocer la ubicación de la sepultura de un familiar o amigo, consulta ingresando los datos de la persona en lo siguiente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <section class="titulo-pagina titulo-blog">

                    <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px;margin-bottom: 0px">
                        <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1 vc_col-md-offset-1">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space"   style="height: 100px" >
                                        <span class="vc_empty_space_inner"></span>
                                    </div>

                                    <div id="pdf" class="tarjeta" style="background-color: #F6F5EB;padding: 30px;">
                                        <div class="row">
                                            <div class="col-9">
                                                <p style="color:#dbb66d;font-weight: 700;font-size: 1.1rem">Nombre del Difunto:</p>
                                                <p><?php echo $NombreCompleto ?></p>

                                                <p style="color:#dbb66d;font-weight: 700;font-size: 1.1rem">Nombre de la Plataforma:</p>
                                                <p><?php echo $Plataforma ?></p>
                                                <p style="color:#dbb66d;font-weight: 700;font-size: 1.1rem">Ubicación:</p>
                                                <p><?php echo $Ubicacion ?></p>
                                            </div>
                                            <div class="col-3">
                                                <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                   onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                   style="border-color: rgb(219, 182, 109); color: rgb(219, 182, 109); 
                                                   background-color: transparent;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                   href="/buscador/" title="Regresar a buscador" tabindex="-1">Regresar</a>

                                                <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                   onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                   style="border-color: rgb(219, 182, 109); color: rgb(219, 182, 109); 
                                                   background-color: transparent;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                   id="imprimir"  title="Imprimir" tabindex="-1">Imprimir</a>

                                            </div>
                                        </div>
                                        <img src="/assets/map/mapa_<?php echo $IdPlataforma ?>.jpeg" alt="" style="width: 100%"/>
                                        <br><br>
                                    </div>
                                    <div style="display: none;">
                                        <div id="pdf2" class="tarjeta" style="background-color: #F6F5EB;padding: 30px;">
                                            <div class="row">
                                                <div class="col-9">
                                                    <p style="color:#dbb66d;font-weight: 700;font-size: 1.1rem">Nombre del Difunto:</p>
                                                    <p><?php echo $NombreCompleto ?></p>

                                                    <p style="color:#dbb66d;font-weight: 700;font-size: 1.1rem">Nombre de la Plataforma:</p>
                                                    <p><?php echo $Plataforma ?></p>
                                                    <p style="color:#dbb66d;font-weight: 700;font-size: 1.1rem">Ubicación:</p>
                                                    <p><?php echo $Ubicacion ?></p>
                                                </div>
                                                <div class="col-3">
                                                </div>
                                            </div>
                                            <img src="/assets/map/mapa_<?php echo $IdPlataforma ?>.jpeg" alt="" style="width: 100%"/>
                                            <br><br>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space"   style="height: 80px" >
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1582859218039 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space"   style="height: 40px" >
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="aio-icon-component    style_1">
                                                        <div id="Info-box-wrap-3161" class="aio-icon-box top-icon" style=""  >
                                                            <div class="aio-icon-top">
                                                                <div class="ult-just-icon-wrapper  ">
                                                                    <div class="align-icon" style="text-align:center;">
                                                                        <div class="aio-icon circle "  style="color:#ffffff;background:#dbb66d;font-size:40px;display:inline-block;">
                                                                            <i class="Defaults-map-marker"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="aio-icon-header" >
                                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-3161 .aio-icon-title'  
                                                                    data-responsive-json-new='{"font-size":"desktop:28px;","line-height":""}'  style="color:#dbb66d;">Visita nuestras oficinas</h3>
                                                            </div> <!-- header -->
                                                            <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-3161 .aio-icon-description'  
                                                                 data-responsive-json-new='{"font-size":"desktop:18px;","line-height":""}'  style="">Calle Peral 573, Cercado-Arequipa</p>
                                                                <p>Camposanto: Av. José Olaya 4ta. Cuadra, Cerro Colorado
                                                            </div> <!-- description -->
                                                        </div> <!-- aio-icon-box -->
                                                    </div> <!-- aio-icon-component -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="aio-icon-component    style_1">
                                                        <div id="Info-box-wrap-2644" class="aio-icon-box top-icon" style=""  >
                                                            <div class="aio-icon-top">
                                                                <div class="ult-just-icon-wrapper  ">
                                                                    <div class="align-icon" style="text-align:center;">
                                                                        <div class="aio-icon circle "  style="color:#ffffff;background:#dbb66d;font-size:40px;display:inline-block;">
                                                                            <i class="Defaults-clock-o"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="aio-icon-header" >
                                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-2644 .aio-icon-title'  
                                                                    data-responsive-json-new='{"font-size":"desktop:28px;","line-height":""}'  style="color:#dbb66d;">Horarios de atención</h3>
                                                            </div> <!-- header -->
                                                            <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-2644 .aio-icon-description'  
                                                                 data-responsive-json-new='{"font-size":"desktop:18px;","line-height":""}'  style="">Oficinas: lunes a viernes de 8:30am a 5:00pm</p>
                                                                <p>Camposanto: Lunes a Domingo 9:00 a.m. a 5:00 p.m.
                                                            </div> <!-- description -->
                                                        </div> <!-- aio-icon-box -->
                                                    </div> <!-- aio-icon-component -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="aio-icon-component    style_1">
                                                        <div id="Info-box-wrap-5286" class="aio-icon-box top-icon" style=""  >
                                                            <div class="aio-icon-top">
                                                                <div class="ult-just-icon-wrapper  ">
                                                                    <div class="align-icon" style="text-align:center;">
                                                                        <div class="aio-icon circle "  style="color:#ffffff;background:#dbb66d;font-size:40px;display:inline-block;">
                                                                            <i class="Defaults-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="aio-icon-header" >
                                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-5286 .aio-icon-title'  
                                                                    data-responsive-json-new='{"font-size":"desktop:28px;","line-height":""}'  style="color:#dbb66d;">Teléfono
                                                                </h3>
                                                            </div> <!-- header -->
                                                            <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-5286 .aio-icon-description'  
                                                                 data-responsive-json-new='{"font-size":"desktop:18px;","line-height":""}'  style="">(054) 604 848</p>
                                                                <p>Usted y su familia pueden contactarse telefónicamente las 24 horas del día.
                                                            </div> <!-- description -->
                                                        </div> <!-- aio-icon-box -->
                                                    </div> <!-- aio-icon-component -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                        <div class="seccion_mapa wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner"><div class="wpb_wrapper">
                                    <div class="wpb_gmaps_widget wpb_content_element" >
                                        <div class="wpb_wrapper">
                                            <div class="wpb_map_wraper">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.8595535369286!2d-71.56753658478175!3d-16.381115342023527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a0c63663ccd%3A0x636a8d9be737da86!2sCementerio%20Parque%20de%20la%20Esperanza!5e0!3m2!1ses!2spe!4v1582858352596!5m2!1ses!2spe" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
            </div><!-- #content -->
        </div><!-- .wf-container -->
    </div><!-- .wf-wrap -->
</div><!-- #main -->
<script src="/assets/index/ubicacion.js" type="text/javascript"></script>
