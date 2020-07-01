<?php
/**
* Template Name: Template - Servicios
*
* @package xsl
* @subpackage xsl-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php echo get_template_part('templates/templates-banner'); ?>
        <section class="services-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-between">
                    <article class="services-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </section>
        <section class="service-items-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <?php $group_service = get_post_meta(get_the_ID(), 'xsl_services_item_group', true); ?>
                    <?php foreach ($group_service as $service_item) { ?>
                    <article class="service-item col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                        <picture class="service-item-image">
                            <?php $bg_banner = wp_get_attachment_image_src($service_item['icon_id'], 'benefits_icon', false); ?>
                            <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $service_item['icon_id'], '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($service_item['icon_id'], '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                        </picture>
                        <div class="service-item-wrapper">
                            <?php echo apply_filters('the_content', $service_item['title']); ?>
                        </div>
                    </article>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="services-text-sections col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="services-text-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'xsl_services_post_text', true)); ?>
                        <?php $link_url = get_post_meta(get_the_ID(), 'xsl_services_link_url', true); ?>
                        <?php $link_text = get_post_meta(get_the_ID(), 'xsl_services_link_text', true); ?>
                        <a href="<?php echo $link_url; ?>" title="<?php echo $link_text; ?>" class="btn btn-md btn-sections-text"><?php echo $link_text; ?></a>

                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
