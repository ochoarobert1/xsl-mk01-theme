<?php get_header(); ?>
<?php the_post(); ?>
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

        <?php echo get_template_part('templates/templates-filter-locations'); ?>

        <div class="single-localizations-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="single-localization-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php the_title(); ?></h2>
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <?php $gallery = get_post_meta(get_the_ID(), 'xsl_local_gallery', true); ?>
                                <?php foreach ((array)$gallery as $attachment_ID => $attachment_data) {?>
                                <?php $image = wp_get_attachment_image_src($attachment_ID, 'gallery_big', false); ?>
                                <div class="swiper-slide" style="background-image:url(<?php echo $image[0]; ?>);"></div>
                                <?php } ?>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-special"></div>
                            <div class="swiper-button-prev swiper-button-special"></div>
                        </div>

                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <?php $gallery = get_post_meta(get_the_ID(), 'xsl_local_gallery', true); ?>
                                <?php foreach ((array)$gallery as $attachment_ID => $attachment_data) {?>
                                <?php $image = wp_get_attachment_image_src($attachment_ID, 'gallery_small', false); ?>
                                <div class="swiper-slide" style="background-image:url(<?php echo $image[0]; ?>);"></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="single-localization-related col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $array_related = new WP_Query(array('post_type' => 'localizaciones', 'posts_per_page' => '3', 'order' => 'DESC', 'orderby' => 'date', 'posts__not_in' => array(get_the_ID()))); ?>
                        <?php if ($array_related->have_posts()) : ?>
                        <div class="row">
                            <?php while ($array_related->have_posts()) : $array_related->the_post(); ?>
                            <div class="single-local-related-item col">
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('local_img', array('class' => 'img-fluid', 'loading' => 'lazy')); ?>
                                </a>
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php get_footer(); ?>
