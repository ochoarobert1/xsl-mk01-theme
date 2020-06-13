<?php
/* --------------------------------------------------------------
WP CUSTOMIZE SECTION - CUSTOM SETTINGS
-------------------------------------------------------------- */

add_action( 'customize_register', 'PROYECTO_customize_register' );

function PROYECTO_customize_register( $wp_customize ) {

    /* SOCIAL */
    $wp_customize->add_section('PREFIJO_social_settings', array(
        'title'    => __('Redes Sociales', 'PROYECTO'),
        'description' => __('Agregue aqui las redes sociales de la página, serán usadas globalmente', 'PROYECTO'),
        'priority' => 175,
    ));

    $wp_customize->add_setting('PREFIJO_social_settings[facebook]', array(
        'default'           => '',
        'sanitize_callback' => 'PROYECTO_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'facebook', array(
        'type' => 'url',
        'section' => 'PREFIJO_social_settings',
        'settings' => 'PREFIJO_social_settings[facebook]',
        'label' => __( 'Facebook', 'PROYECTO' ),
    ) );

    $wp_customize->add_setting('PREFIJO_social_settings[twitter]', array(
        'default'           => '',
        'sanitize_callback' => 'PROYECTO_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'twitter', array(
        'type' => 'url',
        'section' => 'PREFIJO_social_settings',
        'settings' => 'PREFIJO_social_settings[twitter]',
        'label' => __( 'Twitter', 'PROYECTO' ),
    ) );

    $wp_customize->add_setting('PREFIJO_social_settings[instagram]', array(
        'default'           => '',
        'sanitize_callback' => 'PROYECTO_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'instagram', array(
        'type' => 'url',
        'section' => 'PREFIJO_social_settings',
        'settings' => 'PREFIJO_social_settings[instagram]',
        'label' => __( 'Instagram', 'PROYECTO' ),
    ) );

    $wp_customize->add_setting('PREFIJO_social_settings[linkedin]', array(
        'default'           => '',
        'sanitize_callback' => 'PROYECTO_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'linkedin', array(
        'type' => 'url',
        'section' => 'PREFIJO_social_settings',
        'settings' => 'PREFIJO_social_settings[linkedin]',
        'label' => __( 'LinkedIn', 'PROYECTO' ),
    ) );

    $wp_customize->add_setting('PREFIJO_social_settings[youtube]', array(
        'default'           => '',
        'sanitize_callback' => 'PROYECTO_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'youtube', array(
        'type' => 'url',
        'section' => 'PREFIJO_social_settings',
        'settings' => 'PREFIJO_social_settings[youtube]',
        'label' => __( 'YouTube', 'PROYECTO' ),
    ) );

    $wp_customize->add_setting('PREFIJO_social_settings[yelp]', array(
        'default'           => '',
        'sanitize_callback' => 'PROYECTO_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'yelp', array(
        'type' => 'url',
        'section' => 'PREFIJO_social_settings',
        'settings' => 'PREFIJO_social_settings[yelp]',
        'label' => __( 'Yelp', 'PROYECTO' ),
    ) );


    $wp_customize->add_section('PREFIJO_cookie_settings', array(
        'title'    => __('Cookies', 'PROYECTO'),
        'description' => __('Opciones de Cookies', 'PROYECTO'),
        'priority' => 176,
    ));

    $wp_customize->add_setting('PREFIJO_cookie_settings[cookie_text]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'cookie_text', array(
        'type' => 'textarea',
        'label'    => __('Cookie consent', 'PROYECTO'),
        'description' => __( 'Texto del Cookie consent.' ),
        'section'  => 'PREFIJO_cookie_settings',
        'settings' => 'PREFIJO_cookie_settings[cookie_text]'
    ));

    $wp_customize->add_setting('PREFIJO_cookie_settings[cookie_link]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'cookie_link', array(
        'type'     => 'dropdown-pages',
        'section' => 'PREFIJO_cookie_settings',
        'settings' => 'PREFIJO_cookie_settings[cookie_link]',
        'label' => __( 'Link de Cookies', 'PROYECTO' ),
    ) );

}

function PROYECTO_sanitize_url( $url ) {
    return esc_url_raw( $url );
}

/* --------------------------------------------------------------
CUSTOM CONTROL PANEL
-------------------------------------------------------------- */

function register_PROYECTO_settings() {
    register_setting( 'PROYECTO-settings-group', 'monday_start' );
    register_setting( 'PROYECTO-settings-group', 'monday_end' );
    register_setting( 'PROYECTO-settings-group', 'monday_all' );
}

add_action('admin_menu', 'PROYECTO_custom_panel_control');

function PROYECTO_custom_panel_control() {
    add_menu_page(
        __( 'Panel de Control', 'PROYECTO' ),
        __( 'Panel de Control','PROYECTO' ),
        'manage_options',
        'PROYECTO-control-panel',
        'PROYECTO_control_panel_callback',
        'dashicons-admin-generic',
        120
    );
    add_action( 'admin_init', 'register_PROYECTO_settings' );
}

function PROYECTO_control_panel_callback() {
    ob_start();
?>
<div class="PROYECTO-admin-header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="PROYECTO" />
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
</div>
<form method="post" action="options.php" class="PROYECTO-admin-content-container">
    <?php settings_fields( 'PROYECTO-settings-group' ); ?>
    <?php do_settings_sections( 'PROYECTO-settings-group' ); ?>
    <div class="PROYECTO-admin-content-item">
        <table class="form-table">
            <tr valign="center">
                <th scope="row"><?php _e('Monday', 'PROYECTO'); ?></th>
                <td>
                    <label for="monday_start">Starting Hour: <input type="time" name="monday_start" value="<?php echo esc_attr( get_option('monday_start') ); ?>"></label>
                    <label for="monday_end">Ending Hour: <input type="time" name="monday_end" value="<?php echo esc_attr( get_option('monday_end') ); ?>"></label>
                    <label for="monday_all">All Day: <input type="checkbox" name="monday_all" value="1" <?php checked( get_option('monday_all'), 1 ); ?>></label>
                </td>
            </tr>
        </table>
    </div>
    <div class="PROYECTO-admin-content-submit">
        <?php submit_button(); ?>
    </div>
</form>
<?php 
    $content = ob_get_clean();
    echo $content;
}
