<?php get_header(); ?>
<?php $blog_page_id = get_option( 'page_for_posts' ); ?>

<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="main-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fadeIn">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="main-banner-text">
                        <?php echo apply_filters('the_content', get_post_meta($blog_page_id, 'xsl_page_general_banner_text', true)); ?>
                    </div>
                    <div class="main-banner-image offset-xl-4 offset-lg-4 offset-md-4 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta($blog_page_id, 'xsl_page_general_banner_image_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'banner_img', false); ?>
                        <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" data-aos="fadeIn" data-aos-delay="150" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                </div>
            </div>
        </section>
        <div class="page-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container p-0">
                <div class="row">
                    <?php if (have_posts()) : ?>
                    <section class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" class="archive-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 <?php echo join(' ', get_post_class()); ?>" role="article">
                            <div class="container p-0">
                                <div class="row">
                                    <header class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <h2 rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
                                        </a>
                                    </header>
                                    <picture class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                        <?php if ( has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_post_thumbnail('sections_medium', $defaultatts); ?>
                                        </a>
                                        <?php else : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <img itemprop="image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.jpg" alt="No img" class="img-fluid" />
                                        </a>
                                        <?php endif; ?>
                                    </picture>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        <div class="pagination col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?php if(function_exists('wp_paginate')) { wp_paginate(); } else { posts_nav_link(); wp_link_pages(); } ?>
                        </div>
                    </section>
                    <?php else: ?>
                    <section class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Disculpe, su busqueda no arrojo ningun resultado', 'xsl'); ?></h2>
                        <h3><?php _e('Dirígete nuevamente al', 'xsl'); ?> <a href="<?php echo home_url('/'); ?>" title="<?php _e('Volver al Inicio', 'xsl'); ?>"><?php _e('inicio', 'xsl'); ?></a>.</h3>
                    </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
