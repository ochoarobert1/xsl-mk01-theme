<?php get_header(); ?>
<?php $page_data = get_page_by_path('localizaciones'); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="main-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fadeIn">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="main-banner-text">
                        <?php echo apply_filters('the_content', get_post_meta($page_data->ID, 'xsl_page_general_banner_text', true)); ?>
                    </div>
                    <div class="main-banner-image offset-xl-4 offset-lg-4 offset-md-4 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta($page_data->ID, 'xsl_page_general_banner_image_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'banner_img', false); ?>
                        <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" data-aos="fadeIn" data-aos-delay="150" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                </div>
            </div>
        </section>

        <div class="local-taxonomies-filter-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="local-taxonomies-filter-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php _e('Pais', 'xsl'); ?></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">España</a>
                                    <a class="dropdown-item" href="#">Baleares</a>
                                    <a class="dropdown-item" href="#">Islas Canarias</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Otros Paises</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php _e('Categorías', 'xsl'); ?></a>
                                <div class="dropdown-menu">
                                    <?php $args = array('taxonomy' => 'categorias-localizacion', 'hide_empty' => false, 'parent' => 0); ?>
                                    <?php $array_categories = get_terms($args); ?>
                                    <?php if (!empty($array_categories)) : ?>
                                    <?php $i = 1; ?>
                                    <?php foreach ($array_categories as $item) { ?>
                                    <a class="dropdown-item <?php echo $class; ?>" id="<?php echo $item->slug; ?>-tab" data-toggle="tab" href="#<?php echo $item->slug; ?>" role="tab" aria-controls="<?php echo $item->slug; ?>" aria-selected="true"><?php echo $item->name; ?></a>
                                    <?php $i++; } ?>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php _e('Tipo', 'xsl'); ?></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Apartamentos</a>
                                    <a class="dropdown-item" href="#">Fincas</a>
                                    <a class="dropdown-item" href="#">Ocio y Restauración</a>
                                    <a class="dropdown-item" href="#">Oficina</a>
                                    <a class="dropdown-item" href="#">Palacio</a>
                                    <a class="dropdown-item" href="#">Villa</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Calles y Plazas</a>
                                    <a class="dropdown-item" href="#">Carreteras</a>
                                    <a class="dropdown-item" href="#">Lagos</a>
                                    <a class="dropdown-item" href="#">Montañas</a>
                                    <a class="dropdown-item" href="#">Playas</a>
                                    <a class="dropdown-item" href="#">Paisajes</a>
                                    <a class="dropdown-item" href="#">Pueblos</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Hoteles</a>
                                    <a class="dropdown-item" href="#">Otros</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="local-taxonomies-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $args = array('taxonomy' => 'categorias-localizacion', 'hide_empty' => false, 'parent' => 0); ?>
            <?php $array_categories = get_terms($args); ?>
            <?php if (!empty($array_categories)) : ?>

            <div class="container">
                <div class="row">
                    <div class="local-taxonomies-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="tab-content" id="localTabContent">
                            <?php $i = 1; ?>
                            <?php foreach ($array_categories as $item) { ?>
                            <?php if ($i == 1) { $class = 'show active'; } else { $class = ''; } ?>
                            <div class="tab-pane fade <?php echo $class; ?>" id="<?php echo $item->slug; ?>" role="tabpanel" aria-labelledby="<?php echo $item->slug; ?>-tab">
                                <div class="container local-tax-children-container">
                                    <?php $current_parent = $item->term_id; ?>
                                    <div class="row">
                                        <?php $args = array('taxonomy' => 'categorias-localizacion', 'hide_empty' => false,  'parent' => $current_parent ); ?>
                                        <?php $array_taxonomies = get_terms($args); ?>
                                        <?php if (!empty($array_taxonomies)) : ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($array_taxonomies as $taxes) { ?>
                                        <?php if ($i < 4) { $class = 'col-6'; $size = 'tax_children_small_img'; } else { $class = 'col-12'; $size = 'tax_children_large_img'; } ?>
                                        <div class="local-children-tax-item <?php echo $class; ?>">
                                            <div class="local-children-tax-item-wrapper">
                                                <?php $tax_bg_id = get_term_meta( $taxes->term_id, 'showcase-taxonomy-image-id', true); ?>
                                                <?php $bg_banner = wp_get_attachment_image_src($tax_bg_id, $size, false); ?>
                                                <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $tax_bg_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($tax_bg_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" data-aos="fadeIn" data-aos-delay="150" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                                                <a class="local-children-tax-item-link" href="<?php echo get_term_link($taxes); ?>">
                                                    <h3><?php echo $taxes->name; ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                        <?php if ($i == 3) { $i = 0; } ?>
                                        <?php $i++; } ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
