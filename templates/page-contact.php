<?php
/**
* Template Name: Template - Contacto
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
        <section class="contact-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-between">
                    <article class="contact-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </section>
        <section class="contact-page-form-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <?php echo get_template_part('templates/templates-contact-form'); ?>
                </div>
            </div>
        </section>
        <section class="contact-items-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="contact-items-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row justify-content-center align-items-center">
                            <div class="contact-item contact-item-direction col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="icon-container"><i class="fa fa-map-marker"></i></div> <?php echo get_post_meta(get_the_ID(), 'xsl_contact_directions', true); ?>
                            </div>
                            <div class="w-100"></div>
                            <?php $header_options = get_option('xsl_header_settings'); ?>
                            <?php $social_options = get_option('xsl_social_settings'); ?>

                            <?php if ($header_options['phone_number'] != '') { ?>
                            <div class="contact-item col-xl col-lg col-md-6 col-sm-12 col-12">
                                <div class="icon-container"><i class="fa fa-phone"></i></div> <a href="<?php echo $header_options['phone_number']; ?>" title="<?php _e('Haz clic aquí para llamar directamente a nuestro Master', 'xsl'); ?>"><?php echo $header_options['formatted_phone_number']; ?></a>
                            </div>
                            <?php } ?>

                            <?php if ($header_options['email_address'] != '') { ?>
                            <div class="contact-item col-xl col-lg col-md-6 col-sm-12 col-12">
                                <div class="icon-container"><span>@</span></div> <a href="mailto:<?php echo $header_options['email_address']; ?>" title="<?php _e('Haz clic aquí para dejar tu mensaje en nuestro correo electrónico', 'xsl'); ?>"><?php echo $header_options['email_address']; ?></a>
                            </div>
                            <?php } ?>

                            <?php if ((isset($social_options['facebook'])) && ($social_options['facebook'] != '')) { ?>
                            <div class="contact-item col-xl col-lg col-md-6 col-sm-12 col-12">
                                <div class="icon-container"><i class="fa fa-facebook"></i></div> <a href="<?php echo $social_options['facebook']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"> The Exclusive Shooting Location</a>
                            </div>
                            <?php } ?>

                            <?php if ((isset($social_options['twitter'])) && ($social_options['twitter'] != '')) { ?>
                            <div class="contact-item col-xl col-lg col-md-6 col-sm-12 col-12">
                                <div class="icon-container"><i class="fa fa-twitter"></i></div> <a href="<?php echo $social_options['twitter']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"> The Exclusive Shooting Location</a>
                            </div>
                            <?php } ?>

                            <?php if ((isset($social_options['instagram'])) && ($social_options['instagram'] != '')) { ?>
                            <div class="contact-item col-xl col-lg col-md-6 col-sm-12 col-12">
                                <div class="icon-container"><i class="fa fa-instagram"></i></div> <a href="<?php echo $social_options['instagram']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"> @theXSL</a>
                            </div>
                            <?php } ?>

                            <?php if ((isset($social_options['youtube'])) && ($social_options['youtube'] != '')) { ?>
                            <div class="contact-item col-xl col-lg col-md-6 col-sm-12 col-12">
                                <div class="icon-container"><i class="fa fa-youtube"></i></div> <a href="<?php echo $social_options['youtube']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"> The Exclusive Shooting Location</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-map-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="contact-map-content col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <?php $contact_embed = get_post_meta(get_the_ID(), 'xsl_contact_embed', true); ?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php echo $contact_embed; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
