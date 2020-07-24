<link href="/assets/index/blog.css" rel="stylesheet" type="text/css"/>

<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding-top:0px;">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <div id="nuestro_blog_parque" data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_row-o-full-height vc_row-o-columns-middle vc_row-o-content-middle vc_row-flex" style="left: -337px; position: relative; box-sizing: border-box; width: 1903px; padding-left: 337px; padding-right: 336px; min-height: 67.9245vh;">
                    <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center;">Nuestro blog</h1>
                                        <p style="text-align: center;">
                                            La esperanza nos brinda la fortaleza<br>
                                            para salir adelante
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 100px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
                    <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper"><!-- vc_grid start -->
                                <div class="vc_grid-container-wrapper vc_clearfix">
                                    <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid" data-initial-loading-animation="fadeIn">
                                        <!--<div class="vc_grid vc_row vc_grid-gutter-30px vc_pageable-wrapper vc_hook_hover" data-vc-pageable-content="true">-->
                                        <div class="row" data-vc-pageable-content="true">
                                            <!--<div class="vc_pageable-slide-wrapper vc_clearfix" data-vc-grid-content="true">-->
                                            <?php
                                            $meses = array(
                                                "enero",
                                                "febrero",
                                                "marzo",
                                                "abril",
                                                "mayo",
                                                "junio",
                                                "julio",
                                                "agosto",
                                                "septiembre",
                                                "octubre",
                                                "noviembre",
                                                "diciembre");
                                            ?>
                                            <?php foreach ($list as $item) { ?>
                                                <div class="vc_grid-item vc_clearfix vc_col-sm-6 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                    <div class="vc_grid-item-mini vc_clearfix ">
                                                        <div class="vc_gitem-animated-block "></div>
                                                        <div class="vc_gitem-zone vc_gitem-zone-c">
                                                            <div class="vc_gitem-zone-mini">
                                                                <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                    <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                        <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                            <h2 style="text-align: left"><?php echo $item['Title']; ?></h2>
                                                                        </div>
                                                                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                                                            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                                                                            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                                                        </div>
                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                <a href="/post/<?php echo $item['Slug']; ?>" 
                                                                                   class="vc_gitem-link vc_single_image-wrapper vc_box_border_grey" title="Honra y recuerda">
                                                                                    <img class="vc_single_image-img " src="/uploads/post/<?php echo $item['UniqueId']; ?>_p.jpg" alt="6" title="6" 
                                                                                         width="700" height="540"></a>
                                                                            </figure>
                                                                        </div>
                                                                        <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_date">
                                                                            <p style="text-align: left">
                                                                                <?php echo intval(substr($item['Created'], 8, 2)); ?>
                                                                                <?php echo $meses[intval(substr($item['Created'], 5, 2))]; ?>, <?php echo substr($item['Created'], 0, 4); ?>
                                                                            </p>
                                                                        </div>
                                                                        <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_excerpt">
                                                                            <p style="text-align: justify">
                                                                            <?php echo $item['Sumary']; ?>
                                                                            </p>
                                                                        </div>	
                                                                        <div class="vc_btn3-container  btn-leermas vc_btn3-inline">
                                                                            <a style="background-color:rgb(255,255,255);background-color:rgba(255,255,255,0.01); color:#d2b16e;" 
                                                                               class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom" a="" 
                                                                               href="/post/<?php echo $item['Slug']; ?>" title="Leer más →">Leer más →</a>
                                                                        </div>
                                                                    </div>
                                                                </div>	
                                                            </div>
                                                        </div>
                                                    </div>                                                       
                                                </div>  
                                            <?php } ?>                                             
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