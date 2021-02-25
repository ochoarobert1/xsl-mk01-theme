<?php
/**
* Template Name: Template - Home / Inicio
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
        <section class="home-benefits col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-between">
                    <?php $group_benefits = get_post_meta(get_the_ID(), 'xsl_home_benefits_group', true); ?>
                    <?php $i = 1; ?>
                    <?php foreach ($group_benefits as $benefits_item) { ?>
                    <article class="home-benefits-item col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12" data-aos="fade-in" data-aos-delay="<?php echo (100 * $i); ?>">
                        <picture class="home-benefits-item-image">
                            <a href="<?php echo $benefits_item['link_url']; ?>" title="Icon">
                                <?php $bg_banner = wp_get_attachment_image_src($benefits_item['icon_id'], 'benefits_icon', false); ?>
                                <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $benefits_item['icon_id'], '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($benefits_item['icon_id'], '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                            </a>
                        </picture>
                        <div class="home-benefits-item-wrapper">
                            <?php echo apply_filters('the_content', $benefits_item['description']); ?>
                        </div>
                    </article>
                    <?php $i++; } ?>
                </div>
            </div>
        </section>
        <section class="home-sections col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="home-sections-col-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="container p-0">
                            <div class="row justify-content-between">
                                <?php $sections_group = get_post_meta(get_the_ID(), 'xsl_home_sections_group', true); ?>
                                <?php $i = 1; ?>
                                <?php foreach ($sections_group as $section_item) { ?>
                                <?php if ($section_item['big_item'] == 'on') { $size= 'sections_medium'; $class = 'mini col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'; } else { $size= 'sections_mini'; $class = 'medium col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'; } ?>
                                <article class="home-sections-item home-sections-image <?php echo $class; ?>" data-aos="fade-in" data-aos-delay="<?php echo (100 * $i); ?>">
                                    <div class="home-sections-item-wrapper">
                                        <a href="<?php echo $section_item['link_url']?>" title="<?php echo $section_item['title']?>">
                                            <?php $bg_banner = wp_get_attachment_image_src($section_item['bg_image_id'], $size, false); ?>
                                            <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $section_item['bg_image_id'], '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($section_item['bg_image_id'], '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                                            <h3><?php echo $section_item['title']?></h3>
                                        </a>
                                    </div>
                                </article>
                                <?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                    <div class="home-sections-col-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="container">
                            <div class="row">
                                <?php $sections_text_group = get_post_meta(get_the_ID(), 'xsl_home_sections_text_group', true); ?>
                                <?php $i = 1; ?>
                                <?php foreach ($sections_text_group as $section_item) { ?>
                                <article class="home-sections-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-in" data-aos-delay="<?php echo (100 * $i); ?>">
                                    <div class="home-section-text-wrapper">
                                        <?php echo $section_item['description']; ?>
                                    </div>
                                    <a href="<?php echo $section_item['link_url']; ?>" title="<?php echo $section_item['link_text']; ?>" class="btn btn-md btn-sections-text"><?php echo $section_item['link_text']; ?></a>
                                </article>
                                <?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                    <div class="home-sections-item large home-sections-image col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-in">
                        <div class="home-sections-item-wrapper">
                            <a href="<?php echo get_post_meta(get_the_ID(), 'xsl_big_link_url', true); ?>" title="<?php echo get_post_meta(get_the_ID(), 'xsl_big_title', true); ?>">
                                <?php $bg_banner_id = get_post_meta(get_the_ID(), 'xsl_big_bg_image_id', true); ?>
                                <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                                <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                                <h3><?php echo get_post_meta(get_the_ID(), 'xsl_big_title', true); ?></h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="home-contact-form col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="home-contact-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-in">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'xsl_home_contact_text', true)); ?>
                    </div>
                    <?php get_template_part('templates/templates-contact-form'); ?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
