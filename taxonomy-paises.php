<?php get_header(); ?>
<?php $page_data = get_page_by_path('localizaciones'); ?>
<?php $current_parent = get_ancestors( get_queried_object_id(), 'categorias-localizacion' ); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="main-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fadeIn">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="main-banner-text">
                        <h1><?php _e('Localizaciones', 'xsl'); ?></h1>
                        <h2><?php echo single_term_title(); ?></h2>
                    </div>
                    <div class="main-banner-image offset-xl-4 offset-lg-4 offset-md-4 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta($page_data->ID, 'xsl_page_general_banner_image_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'banner_img', false); ?>
                        <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" data-aos="fadeIn" data-aos-delay="150" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                </div>
            </div>
        </section>

        <?php echo get_template_part('templates/templates-filter-locations'); ?>

        <div class="tax-individuals-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fadeIn">
            <div class="container">
                <div class="row">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="tax-individual-item col-4">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('tax_children_small_img', array('class' => 'img-fluid', 'loading' => 'lazy')); ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                    </div>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>


        <div class="tax-other-cats-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container local-tax-children-container">
                <div class="row">
                   <div class="other-cats-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                       <h2><?php _e('Categorias Relacionadas', 'xsl'); ?></h2>
                   </div>
                    <?php $args = array('taxonomy' => 'categorias-localizacion', 'hide_empty' => false,  'parent' => $current_parent[0] ); ?>
                    <?php $array_taxonomies = get_terms($args); ?>
                    <?php if (!empty($array_taxonomies)) : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($array_taxonomies as $taxes) { ?>
                    <?php if ($i < 4) { $class = 'col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12'; $size = 'tax_children_small_img'; } else { $class = 'col-12'; $size = 'tax_children_large_img'; } ?>
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
    </div>
</main>
<?php get_footer(); ?>
