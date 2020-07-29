<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php /* MAIN STUFF */ ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="robots" content="NOODP, INDEX, FOLLOW" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="dns-prefetch" href="//connect.facebook.net" />
    <link rel="dns-prefetch" href="//facebook.com" />
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
    <link rel="dns-prefetch" href="//google-analytics.com" />
    <?php /* FAVICONS */ ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
    <?php /* THEME NAVBAR COLOR */ ?>
    <meta name="msapplication-TileColor" content="#1B357F" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
    <meta name="theme-color" content="#1B357F" />
    <?php /* AUTHOR INFORMATION */ ?>
    <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
    <meta name="author" content="Extreme Shooting Locations" />
    <meta name="copyright" content="https://thexsl.com/" />
    <meta name="geo.position" content="10.333333;-67.033333" />
    <meta name="ICBM" content="10.333333, -67.033333" />
    <meta name="geo.region" content="ES" />
    <meta name="geo.placename" content="Extreme Shooting Locations" />
    <meta name="DC.title" content="<?php if (is_home()) { echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); } else { echo get_the_title() . ' | ' . get_bloginfo('name'); } ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
    <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php /* IE COMPATIBILITIES */ ?>
    <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" /><![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" /><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9" /><![endif]-->
    <!--[if gt IE 8]><!-->
    <html <?php language_attributes(); ?> class="no-js" />
    <!--<![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> <![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
    <!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> <![endif]-->
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <?php $header_options = get_option('xsl_header_settings'); ?>
    <?php $social_options = get_option('xsl_social_settings'); ?>
    <?php $network_url = network_home_url(); ?>
    <header class="container-fluid p-0" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row justify-content-center no-gutters">
            <div class="top-header col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="top-header-left col-6">
                            <?php if ($header_options['email_address'] != '') { ?>
                            <a href="mailto:<?php echo $header_options['email_address']; ?>" title="<?php _e('Haz clic aquí para dejar tu mensaje en nuestro correo electrónico', 'xsl'); ?>"><?php echo $header_options['email_address']; ?></a>
                            <?php } ?>

                            <?php if ($header_options['phone_number'] != '') { ?>
                            <a href="<?php echo $header_options['phone_number']; ?>" title="<?php _e('Haz clic aquí para llamar directamente a nuestro Master', 'xsl'); ?>"><?php echo $header_options['formatted_phone_number']; ?></a>
                            <?php } ?>

                            <div class="social-header">
                                <?php if ((isset($social_options['facebook'])) && ($social_options['facebook'] != '')) { ?>
                                <a href="<?php echo $social_options['facebook']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                <?php } ?>

                                <?php if ((isset($social_options['twitter'])) && ($social_options['twitter'] != '')) { ?>
                                <a href="<?php echo $social_options['twitter']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                <?php } ?>

                                <?php if ((isset($social_options['instagram'])) && ($social_options['instagram'] != '')) { ?>
                                <a href="<?php echo $social_options['instagram']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                <?php } ?>

                                <?php if ((isset($social_options['youtube'])) && ($social_options['youtube'] != '')) { ?>
                                <a href="<?php echo $social_options['youtube']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="top-header-right col-6">
                            <div class="btn-group">
                                <button type="button" class="btn btn-language dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php _e('Idioma', 'xsl'); ?> <small class="bars"><span></span><span></span><span></span></small>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo $network_url; ?>"><?php _e('Español', 'xsl'); ?></a>
                                    <a class="dropdown-item" href="<?php echo $network_url . '/en'; ?>"><?php _e('Inglés', 'xsl'); ?></a>
                                    <a class="dropdown-item" href="<?php echo $network_url . '/de'; ?>"><?php _e('Alemán', 'xsl'); ?></a>
                                </div>
                            </div>
                            <?php echo get_search_form(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="the-header col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <a class="navbar-brand" href="<?php echo home_url('/');?>" title="<?php echo get_bloginfo('name'); ?>">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                        <?php $image = wp_get_attachment_image_src( $custom_logo_id , 'logo' ); ?>
                        <?php if (!empty($image)) { ?>
                        <img src="<?php echo $image[0];?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                        <?php } else { ?>
                        Navbar
                        <?php } ?>
                    </a>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'header_menu',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>

                </nav>
            </div>

            <div class="header-mobile col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-none d-lg-none d-md-none d-sm-block d-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="header-mobile-logo col-6">
                            <a class="navbar-brand" href="<?php echo home_url('/');?>" title="<?php echo get_bloginfo('name'); ?>">
                                <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                                <?php $image = wp_get_attachment_image_src( $custom_logo_id , 'logo' ); ?>
                                <?php if (!empty($image)) { ?>
                                <img src="<?php echo $image[0];?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                                <?php } else { ?>
                                Navbar
                                <?php } ?>
                            </a>
                        </div>
                        <div class="header-mobile-button col-6">
                            <button id="mobileBtn" class="mobile-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="mobileMenuCnt" class="header-mobile-container header-mobile-container-hidden">
                    <button id="closeMenu" class="close-menu">
                        <span></span><span></span>
                    </button>

                    <div class="header-mobile-menu">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'header_menu',
                                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'menu_class'      => 'navbar-nav'
                            ) );
                            ?>
                    </div>
                    <div class="header-mobile-info">
                        <?php if ($header_options['email_address'] != '') { ?>
                        <a href="mailto:<?php echo $header_options['email_address']; ?>" title="<?php _e('Haz clic aquí para dejar tu mensaje en nuestro correo electrónico', 'xsl'); ?>"><?php echo $header_options['email_address']; ?></a>
                        <?php } ?>

                        <?php if ($header_options['phone_number'] != '') { ?>
                        <a href="<?php echo $header_options['phone_number']; ?>" title="<?php _e('Haz clic aquí para llamar directamente a nuestro Master', 'xsl'); ?>"><?php echo $header_options['formatted_phone_number']; ?></a>
                        <?php } ?>


                    </div>
                    <div class="social-header">
                        <?php if ((isset($social_options['facebook'])) && ($social_options['facebook'] != '')) { ?>
                        <a href="<?php echo $social_options['facebook']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <?php } ?>

                        <?php if ((isset($social_options['twitter'])) && ($social_options['twitter'] != '')) { ?>
                        <a href="<?php echo $social_options['twitter']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <?php } ?>

                        <?php if ((isset($social_options['instagram'])) && ($social_options['instagram'] != '')) { ?>
                        <a href="<?php echo $social_options['instagram']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                        <?php } ?>

                        <?php if ((isset($social_options['youtube'])) && ($social_options['youtube'] != '')) { ?>
                        <a href="<?php echo $social_options['youtube']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'xsl'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                        <?php } ?>
                    </div>
                    <div class="lang-mobile">
                        <a class="lang-item" href="<?php echo $network_url; ?>"><?php _e('Español', 'xsl'); ?></a>
                        <a class="lang-item" href="<?php echo $network_url . '/en'; ?>"><?php _e('Inglés', 'xsl'); ?></a>
                        <a class="lang-item" href="<?php echo $network_url . '/de'; ?>"><?php _e('Alemán', 'xsl'); ?></a>
                    </div>
                </div>

            </div>
        </div>
    </header>
