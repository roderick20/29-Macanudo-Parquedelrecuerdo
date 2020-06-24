
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
<!--                        <span class="fancy-categories">
                            <a href="http://www.parquedelaesperanza.com/category/memoriales/" rel="category tag">Memoriales</a>
                        </span>-->
                        <img class="preload-me lazy-load is-loaded" src="/uploads/post/<?php echo $item['UniqueId']; ?>_g.jpg" title="6" alt="" 
                             style="will-change: auto;width: 100%" srcset="/uploads/post/<?php echo $item['UniqueId']; ?>_g.jpg" width="1160" height="580">
                    </div>
                    <br>
                    <div class="entry-content">
                        <?php echo $item['Description']; ?>
                    </div>
                    <!--nav class="navigation post-navigation" role="navigation">
                        <h2 class="screen-reader-text">Navegación entre publicaciones</h2>
                        <div class="nav-links">
                            <a class="nav-previous" href="http://www.parquedelaesperanza.com/duelo/ayudar-a-un-amigo-en-pena/" rel="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="meta-nav" aria-hidden="true">Anterior</span>
                                <span class="screen-reader-text">Publicación anterior:</span>
                                <span class="post-title h4-size">Ayudar a un amigo en pena</span>
                            </a>
                            <span class="nav-next disabled"></span>
                        </div>
                    </nav-->
                </article>
            </div>
        </div>
    </div>
</div>