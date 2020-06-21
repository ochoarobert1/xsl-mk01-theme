<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="main-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="main-banner-text">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'xsl_page_general_banner_text', true)); ?>
                    </div>
                    <div class="main-banner-image offset-xl-4 offset-lg-4 col-8">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'xsl_page_general_banner_image_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                </div>
            </div>
        </section>
        <section class="home-benefits col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <?php $group_benefits = get_post_meta(get_the_ID(), 'xsl_home_benefits_group', true); ?>
                    <?php foreach ($group_benefits as $benefits_item) { ?>
                    <?php var_dump($benefits_item); ?>
                    <?php } ?>
                </div>
            </div>

        </section>
    </div>
</main>
<?php get_footer(); ?>
