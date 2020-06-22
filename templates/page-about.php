<?php
/**
* Template Name: Template - Sobre Nosotros
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
        <section class="about-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-between">
                    <article class="about-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </section>
        <section class="about-projects col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="about-projects-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Proyectos', 'xsl'); ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-text-sections col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <?php $sections_text_group = get_post_meta(get_the_ID(), 'xsl_about_sections_text_group', true); ?>
                    <?php foreach ($sections_text_group as $section_item) { ?>
                    <article class="about-sections-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="about-section-text-wrapper">
                            <?php echo $section_item['description']; ?>
                        </div>
                        <a href="<?php echo $section_item['link_url']; ?>" title="<?php echo $section_item['link_text']; ?>" class="btn btn-md btn-sections-text"><?php echo $section_item['link_text']; ?></a>
                    </article>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
