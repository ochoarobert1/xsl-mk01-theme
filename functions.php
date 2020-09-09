<?php

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER CSS
-------------------------------------------------------------- */

require_once('includes/wp_enqueue_styles.php');

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER JS
-------------------------------------------------------------- */

if (!is_admin()) add_action('wp_enqueue_scripts', 'xsl_jquery_enqueue');
function xsl_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    if ($_SERVER['REMOTE_ADDR'] == '::1') {
        /*- JQUERY ON LOCAL  -*/
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.4.1', false);
        /*- JQUERY MIGRATE ON LOCAL  -*/
        wp_register_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js',  array('jquery'), '3.1.0', false);
    } else {
        /*- JQUERY ON WEB  -*/
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', false, '3.4.1', false);
        /*- JQUERY MIGRATE ON WEB  -*/
        wp_register_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.1.0.min.js', array('jquery'), '3.1.0', true);
    }
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');
}

/* NOW ALL THE JS FILES */

require_once('includes/wp_enqueue_scripts.php');

/* --------------------------------------------------------------
    ADD CUSTOM WALKER BOOTSTRAP
-------------------------------------------------------------- */

add_action( 'after_setup_theme', 'xsl_register_navwalker' );
function xsl_register_navwalker(){
    require_once('includes/class-wp-bootstrap-navwalker.php');
}

/* --------------------------------------------------------------
    ADD CUSTOM WORDPRESS FUNCTIONS
-------------------------------------------------------------- */

require_once('includes/wp_custom_functions.php');

/* --------------------------------------------------------------
    ADD REQUIRED WORDPRESS PLUGINS
-------------------------------------------------------------- */

require_once('includes/class-tgm-plugin-activation.php');
require_once('includes/class-required-plugins.php');

/* --------------------------------------------------------------
    ADD CUSTOM WOOCOMMERCE OVERRIDES
-------------------------------------------------------------- */
if ( class_exists( 'WooCommerce' ) ) {
    require_once('includes/wp_woocommerce_functions.php');
}

/* --------------------------------------------------------------
    ADD JETPACK COMPATIBILITY
-------------------------------------------------------------- */
if ( defined( 'JETPACK__VERSION' ) ) {
    require_once('includes/wp_jetpack_functions.php');
}

/* --------------------------------------------------------------
    ADD THEME SUPPORT
-------------------------------------------------------------- */

load_theme_textdomain( 'xsl', get_template_directory() . '/languages' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ));
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-background',
                  array(
                      'default-image' => '',    // background image default
                      'default-color' => 'ffffff',    // background color default (dont add the #)
                      'wp-head-callback' => '_custom_background_cb',
                      'admin-head-callback' => '',
                      'admin-preview-callback' => ''
                  )
                 );
add_theme_support( 'custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
) );


add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

/* --------------------------------------------------------------
    ADD NAV MENUS LOCATIONS
-------------------------------------------------------------- */

register_nav_menus( array(
    'header_menu' => __( 'Menu Header - Principal', 'xsl' ),
    'mobile_menu' => __( 'Menu Mobile - Principal', 'xsl' ),
    'footer_menu' => __( 'Menu Footer - Principal', 'xsl' )
) );

/* --------------------------------------------------------------
    ADD DYNAMIC SIDEBAR SUPPORT
-------------------------------------------------------------- */

add_action( 'widgets_init', 'xsl_widgets_init' );
function xsl_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar Principal', 'xsl' ),
        'id' => 'main_sidebar',
        'description' => __( 'Estos widgets seran vistos en las entradas y páginas del sitio', 'xsl' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebars( 4, array(
        'name'          => __('Footer Section %d', 'xsl'),
        'id'            => 'sidebar_footer',
        'description'   => __('Footer Section', 'xsl'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ) );

    //    register_sidebar( array(
    //        'name' => __( 'Shop Sidebar', 'xsl' ),
    //        'id' => 'shop_sidebar',
    //        'description' => __( 'Estos widgets seran vistos en Tienda y Categorias de Producto', 'xsl' ),
    //        'before_widget' => '<li id='%1$s' class='widget %2$s'>',
    //        'after_widget'  => '</li>',
    //        'before_title'  => '<h2 class='widgettitle'>',
    //        'after_title'   => '</h2>',
    //    ) );
}

/* --------------------------------------------------------------
    CUSTOM ADMIN LOGIN
-------------------------------------------------------------- */

function custom_admin_styles() {
    $version_remove = NULL;
    wp_register_style('wp-admin-style', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css', false, $version_remove, 'all');
    wp_enqueue_style('wp-admin-style');
}
add_action('login_head', 'custom_admin_styles');
add_action('admin_init', 'custom_admin_styles');


function dashboard_footer() {
    echo '<span id="footer-thankyou">';
    _e ('Gracias por crear con ', 'xsl' );
    echo '<a href="http://wordpress.org/" target="_blank">WordPress.</a> - ';
    _e ('Tema desarrollado por ', 'xsl' );
    echo '<a href="http://robertochoa.com.ve/?utm_source=footer_admin&utm_medium=link&utm_content=xsl" target="_blank">Robert Ochoa</a></span>';
}
add_filter('admin_footer_text', 'dashboard_footer');

/* --------------------------------------------------------------
    ADD CUSTOM METABOX
-------------------------------------------------------------- */

require_once('includes/wp_custom_metabox.php');

/* --------------------------------------------------------------
    ADD CUSTOM POST TYPE
-------------------------------------------------------------- */

require_once('includes/wp_custom_post_type.php');

/* --------------------------------------------------------------
    ADD CUSTOM THEME CONTROLS
-------------------------------------------------------------- */

require_once('includes/wp_custom_theme_control.php');

/* --------------------------------------------------------------
    ADD CUSTOM IMAGE SIZE
-------------------------------------------------------------- */
if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 9999, 400, true);
}
if ( function_exists('add_image_size') ) {
    add_image_size('avatar', 100, 100, true);
    add_image_size('banner_img', 1350, 530, array('center', 'center'));
    add_image_size('benefits_icon', 105, 105, true);
    add_image_size('tax_local_img', 800, 400, array('center', 'center'));
    add_image_size('tax_children_small_img', 540, 270, array('center', 'center'));
    add_image_size('tax_children_large_img', 1110, 270, array('center', 'center'));
    add_image_size('sections_mini', 255, 255, array('center', 'center'));
    add_image_size('sections_medium', 9999, 550, array('center', 'center'));
    add_image_size('gallery_small', 240, 180, array('center', 'center'));
    add_image_size('gallery_big', 900, 850, array('center', 'center'));
}

function xsl_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'xsl_custom_excerpt_length', 999 );

//Page Slug Body Class
function xsl_add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter( 'body_class', 'xsl_add_slug_body_class' );

/* --------------------------------------------------------------
    AJAX SEND QUOTE EMAIL
-------------------------------------------------------------- */
add_action('wp_ajax_nopriv_send_contact_form', 'send_contact_form_handler');
add_action('wp_ajax_send_contact_form', 'send_contact_form_handler');

function send_contact_form_handler() {
    if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
        error_reporting( E_ALL );
        ini_set( 'display_errors', 1 );
    }

    //    $header_options = get_option('pcy_header_settings');
    //    $email_address = $header_options['email_address'];

    //    $google_options = get_option('ioa_google_settings');
    /*
    if ($submit["g-recaptcha-response"]) {
        $post_data = http_build_query(
            array(
                'secret' => $google_options['google_secret'],
                'response' => $submit['g-recaptcha-response'],
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ), '', '&');

        $opts = array('http' =>
                      array(
                          'method'  => 'POST',
                          'header'  => 'Content-type: application/x-www-form-urlencoded',
                          'content' => $post_data
                      )
                     );

        $context  = stream_context_create($opts);
        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        $captcha_response = json_decode($response);
    }
    if($captcha_response->success == true) {
*/
    ob_start();
    require_once get_theme_file_path( '/includes/contact-email.php' );
    $body = ob_get_clean();
    $body = str_replace( [
        '{fname}',
        '{lname}',
        '{email}',
        '{phone}',
        '{comments}'
    ], [
        $_POST['contact_name'],
        $_POST['contact_lname'],
        $_POST['contact_email'],
        $_POST['contact_phone'],
        $_POST['contact_comments']
    ], $body );

    require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer;

    $mail->isHTML( true );
    $mail->Body = $body;
    $mail->CharSet = 'UTF-8';
    $mail->addAddress( 'info@theexclusiveshootinglocation.com' );
    $mail->addCC($_POST['contact_email']);
    $mail->setFrom( "noreply@{$_SERVER['SERVER_NAME']}", esc_html( get_bloginfo( 'name' ) ) );
    $mail->Subject = esc_html__( 'The Exclusive Shooting Location: Nuevo Mensaje', 'xsl' );

    if ( ! $mail->send() ) {
        wp_send_json_error( esc_html__( 'Su mensaje no pudo ser enviado. Por favor intente nuevamente.', 'xsl' ), 400 );
    } else {
        wp_send_json_success( esc_html__( "Gracias por su mensaje. Le contactaremos lo antes posible.", 'xsl' ), 200 );
    }
    /*
    }
*/
    wp_die();
}
