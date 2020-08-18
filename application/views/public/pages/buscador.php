<link href="/assets/index/buscador.css" rel="stylesheet" type="text/css"/>
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
                                    <div class="tarjeta" style="background-color: #F6F5EB;padding: 30px;">
                                        <?php
                                        $getFormRegister = array('id' => 'frmBuscador', 'method' => 'post');
                                        echo form_open('/do_buscador', $getFormRegister);
                                        ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <input type="text" id="nombre" name="nombre" placeholder="Nombres y/o apellidos" class="form-control form-control-lg" style="color: #495057;background-color: #fff;border: 1px solid #888888;border-radius: 0.3rem;font-size: 1.05rem;padding: 0.5rem 1rem;">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <button type="submit" class="btn btn-md btn-block btn-enviar-form" style="background-color: #0E226C;color: white;" name ="action" value="sepelios">
                                                    <i aria-hidden="true" class="far fa-clock"></i> Sepelios del día
                                                </button>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="submit" class="btn btn-md btn-block btn-enviar-form" style="background-color: #0E226C;color: white;" name ="action" value="tumbas">
                                                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i> Ubicación
                                                </button>
                                            </div>
                                        </div>
                                        <?php echo form_close(); ?>
                                        <br><br>
                                        <div class="table-responsive">  
                                            <?php
                                            if (isset($list)) {
                                                if ($type == 'tumbas') {
                                                    ?>
                                                    <table class="table table-striped" style="font-size: 0.8rem;">
                                                        <thead>
                                                            <tr style="background-color: #D2B16E;color: white;">
                                                                <th>Nombres y Apellidos</th>
                                                                <th>Plataforma</th>
                                                                <th>Código de Lapida</th>
                                                                <th>Ubicación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                                    
                                                            <?php
                                                            if (isset($list)) {
                                                                foreach ($list as $item) {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $item["NombreCompleto"]; ?><br>
                                                                            <?php echo $item["FechaNacimiento"]; ?> - <?php echo $item["FechaDefuncion"]; ?> </td>
                                                                        <td><?php echo $item["Plataforma"]; ?></td>
                                                                        <td><?php echo $item["Ubicacion"]; ?></td>
                                                                        <td>
                                                                            <a href="<?php echo base_url(); ?>ubicacion?NombreCompleto=<?php echo $item["NombreCompleto"]; ?>&FechaNacimiento=<?php echo $item["FechaNacimiento"]; ?>&FechaDefuncion=<?php echo $item["FechaDefuncion"]; ?>&Plataforma=<?php echo $item["Plataforma"]; ?>&Ubicacion=<?php echo $item["Ubicacion"]; ?>&IdPlataforma=<?php echo $item["IdPlataforma"]; ?>" class="ubicacion" >Ver Ubicación</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <table class="table table-striped" style="font-size: 0.8rem;">
                                                        <thead>
                                                            <tr style="background-color: #D2B16E;color: white;">
                                                                <th>Nombres y Apellidos</th>
                                                                <th>Plataforma</th>
                                                                <th>Fecha Sepelio / Hora Inhumación</th>
                                                                <th>Ubicación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                                    
                                                            <?php
                                                            if (isset($list)) {
                                                                foreach ($list as $item) {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $item["NombreCompleto"]; ?> </td>
                                                                        <td><?php echo $item["Plataforma"]; ?> </td>
                                                                        <td><?php echo $item["FechaSepelio"]; ?> / <?php echo $item["HoraInhumacion"]; ?></td>
                                                                        <td>
                                                                            <a href="<?php echo base_url(); ?>ubicacion?NombreCompleto=<?php echo $item["NombreCompleto"]; ?>
                                                                               &FechaSepelio=<?php echo $item["FechaSepelio"]; ?>
                                                                               &HoraInhumacion=<?php echo $item["HoraInhumacion"]; ?>
                                                                               &Plataforma=<?php echo $item["Plataforma"]; ?>
                                                                               &Ubicacion=<?php echo $item["Ubicacion"]; ?>
                                                                               &IdPlataforma=<?php echo $item["IdPlataforma"]; ?>" class="ubicacion" >Ver Ubicación</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                    <?php
                                                }
                                            }
                                            ?>
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
                    </div>
            </div>
        </div>
    </div>
</div>

