
<div class="page-title title-center breadcrumbs-off breadcrumbs-mobile-off breadcrumbs-bg page-title-responsive-enabled">
    <div class="wf-wrap">
        <div class="page-title-head hgroup"><h1 class="entry-title"><?php echo $item['Title']; ?></h1></div>			
    </div>
</div>
<?php
                                                $meses = array(
                                                    "Ene",
                                                    "Feb",
                                                    "Mar",
                                                    "Abr",
                                                    "May",
                                                    "Jun",
                                                    "Jul",
                                                    "Ago",
                                                    "Sep",
                                                    "Oct",
                                                    "Nov",
                                                    "Dic");
                                                ?>
<div id="main" class="sidebar-none sidebar-divider-vertical">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <article id="post-313" class="vertical-fancy-style post-313 post type-post status-publish format-standard has-post-thumbnail category-memoriales category-4 description-off">
                    <div class="post-thumbnail">
                        <div class="fancy-date">
                            <a title="6:47 pm" href="#" rel="nofollow">
                                <span class="entry-month"><?php echo $meses[intval(substr($item['Created'], 5, 2))]; ?></span>
                                <span class="entry-date updated"><?php echo intval(substr($item['Created'], 8, 2)); ?></span>
                                <span class="entry-year"><?php echo substr($item['Created'], 0, 4); ?></span>
                            </a>
                        </div>

                        <img class="preload-me lazy-load is-loaded" src="/uploads/post/<?php echo $item['UniqueId']; ?>_g.jpg" title="6" alt="" 
                             style="will-change: auto;width: 100%" srcset="/uploads/post/<?php echo $item['UniqueId']; ?>_g.jpg" width="1160" height="580">
                    </div>
                    <br>
                    <div class="entry-content">
                        <?php echo $item['Description']; ?>
                    </div>
                    
                </article>
            </div>
        </div>
    </div>
</div>