<?php
/* IMAGES RESPONSIVE ON ATTACHMENT IMAGES */
function image_tag_class($class) {
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class', 'image_tag_class' );

/* ADD CONTENT WIDTH FUNCTION */

function xsl_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'xsl_content_width', 1170 );
}
add_action( 'after_setup_theme', 'xsl_content_width', 0 );

/* ADD CONTENT WIDTH FUNCTION */

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    $classes[] = 'nav-item';
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// let's add our custom class to the actual link tag

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'topnav') {
        $classes[] = 'nav-link';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function xsl_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'xsl_pingback_header' );


// Creating the widget
class custom_social_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

            // Base ID of your widget
            'custom_social_widget',

            // Widget name will appear in UI
            __('Social Networks Widget', 'xsl'),

            // Widget description
            array( 'description' => __( 'Social Networks added in customize', 'xsl' ), )
        );
    }

    // Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        $social_options = get_option('xsl_social_settings');

?>
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
<?php
        // This is where you run the code and display the output
        echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'xsl' );
        }
        // Widget admin form
?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }

    // Class wpb_widget ends here
}


// Register and load the widget
function wpb_load_widget() {
    register_widget( 'custom_social_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
