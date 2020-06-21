<?php
/* --------------------------------------------------------------
WP CUSTOMIZE SECTION - CUSTOM SETTINGS
-------------------------------------------------------------- */

add_action( 'customize_register', 'xsl_customize_register' );

function xsl_customize_register( $wp_customize ) {

    /* HEADER */
    $wp_customize->add_section('xsl_header_settings', array(
        'title'    => __('Cabecera', 'xsl'),
        'description' => __('Opciones para los elementos de la cabecera', 'xsl'),
        'priority' => 30
    ));

    $wp_customize->add_setting('xsl_header_settings[phone_number]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'
    ));

    $wp_customize->add_control( 'phone_number', array(
        'type' => 'text',
        'label'    => __('Número Telefónico', 'xsl'),
        'description' => __( 'Agregar número telefonico con formato para el link', 'xsl' ),
        'section'  => 'xsl_header_settings',
        'settings' => 'xsl_header_settings[phone_number]'
    ));

    $wp_customize->add_setting('xsl_header_settings[formatted_phone_number]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'
    ));

    $wp_customize->add_control( 'formatted_phone_number', array(
        'type' => 'text',
        'label'    => __('Número Telefónico [Visible]', 'xsl'),
        'description' => __( 'Agregar número telefónico en un formato visible para el público', 'xsl' ),
        'section'  => 'xsl_header_settings',
        'settings' => 'xsl_header_settings[formatted_phone_number]'
    ));

    $wp_customize->add_setting('xsl_header_settings[email_address]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'email_address', array(
        'type' => 'text',
        'label'    => __('Correo Electrónico', 'xsl'),
        'description' => __( 'Agregar direccion de Correo Electrónico', 'xsl' ),
        'section'  => 'xsl_header_settings',
        'settings' => 'xsl_header_settings[email_address]'
    ));

    /* SOCIAL */
    $wp_customize->add_section('xsl_social_settings', array(
        'title'    => __('Redes Sociales', 'xsl'),
        'description' => __('Agregue aqui las redes sociales de la página, serán usadas globalmente', 'xsl'),
        'priority' => 175,
    ));

    $wp_customize->add_setting('xsl_social_settings[facebook]', array(
        'default'           => '',
        'sanitize_callback' => 'xsl_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'facebook', array(
        'type' => 'url',
        'section' => 'xsl_social_settings',
        'settings' => 'xsl_social_settings[facebook]',
        'label' => __( 'Facebook', 'xsl' ),
    ) );

    $wp_customize->add_setting('xsl_social_settings[twitter]', array(
        'default'           => '',
        'sanitize_callback' => 'xsl_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'twitter', array(
        'type' => 'url',
        'section' => 'xsl_social_settings',
        'settings' => 'xsl_social_settings[twitter]',
        'label' => __( 'Twitter', 'xsl' ),
    ) );

    $wp_customize->add_setting('xsl_social_settings[instagram]', array(
        'default'           => '',
        'sanitize_callback' => 'xsl_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'instagram', array(
        'type' => 'url',
        'section' => 'xsl_social_settings',
        'settings' => 'xsl_social_settings[instagram]',
        'label' => __( 'Instagram', 'xsl' ),
    ) );

    $wp_customize->add_setting('xsl_social_settings[linkedin]', array(
        'default'           => '',
        'sanitize_callback' => 'xsl_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'linkedin', array(
        'type' => 'url',
        'section' => 'xsl_social_settings',
        'settings' => 'xsl_social_settings[linkedin]',
        'label' => __( 'LinkedIn', 'xsl' ),
    ) );

    $wp_customize->add_setting('xsl_social_settings[youtube]', array(
        'default'           => '',
        'sanitize_callback' => 'xsl_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'youtube', array(
        'type' => 'url',
        'section' => 'xsl_social_settings',
        'settings' => 'xsl_social_settings[youtube]',
        'label' => __( 'YouTube', 'xsl' ),
    ) );

    $wp_customize->add_setting('xsl_social_settings[yelp]', array(
        'default'           => '',
        'sanitize_callback' => 'xsl_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'yelp', array(
        'type' => 'url',
        'section' => 'xsl_social_settings',
        'settings' => 'xsl_social_settings[yelp]',
        'label' => __( 'Yelp', 'xsl' ),
    ) );


    $wp_customize->add_section('xsl_cookie_settings', array(
        'title'    => __('Cookies', 'xsl'),
        'description' => __('Opciones de Cookies', 'xsl'),
        'priority' => 176,
    ));

    $wp_customize->add_setting('xsl_cookie_settings[cookie_text]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'cookie_text', array(
        'type' => 'textarea',
        'label'    => __('Cookie consent', 'xsl'),
        'description' => __( 'Texto del Cookie consent.' ),
        'section'  => 'xsl_cookie_settings',
        'settings' => 'xsl_cookie_settings[cookie_text]'
    ));

    $wp_customize->add_setting('xsl_cookie_settings[cookie_link]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'cookie_link', array(
        'type'     => 'dropdown-pages',
        'section' => 'xsl_cookie_settings',
        'settings' => 'xsl_cookie_settings[cookie_link]',
        'label' => __( 'Link de Cookies', 'xsl' ),
    ) );

}

function xsl_sanitize_url( $url ) {
    return esc_url_raw( $url );
}

/* --------------------------------------------------------------
CUSTOM CONTROL PANEL
-------------------------------------------------------------- */
/*
function register_xsl_settings() {
    register_setting( 'xsl-settings-group', 'monday_start' );
    register_setting( 'xsl-settings-group', 'monday_end' );
    register_setting( 'xsl-settings-group', 'monday_all' );
}

add_action('admin_menu', 'xsl_custom_panel_control');

function xsl_custom_panel_control() {
    add_menu_page(
        __( 'Panel de Control', 'xsl' ),
        __( 'Panel de Control','xsl' ),
        'manage_options',
        'xsl-control-panel',
        'xsl_control_panel_callback',
        'dashicons-admin-generic',
        120
    );
    add_action( 'admin_init', 'register_xsl_settings' );
}

function xsl_control_panel_callback() {
    ob_start();
?>
<div class="xsl-admin-header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="xsl" />
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
</div>
<form method="post" action="options.php" class="xsl-admin-content-container">
    <?php settings_fields( 'xsl-settings-group' ); ?>
    <?php do_settings_sections( 'xsl-settings-group' ); ?>
    <div class="xsl-admin-content-item">
        <table class="form-table">
            <tr valign="center">
                <th scope="row"><?php _e('Monday', 'xsl'); ?></th>
                <td>
                    <label for="monday_start">Starting Hour: <input type="time" name="monday_start" value="<?php echo esc_attr( get_option('monday_start') ); ?>"></label>
                    <label for="monday_end">Ending Hour: <input type="time" name="monday_end" value="<?php echo esc_attr( get_option('monday_end') ); ?>"></label>
                    <label for="monday_all">All Day: <input type="checkbox" name="monday_all" value="1" <?php checked( get_option('monday_all'), 1 ); ?>></label>
                </td>
            </tr>
        </table>
    </div>
    <div class="xsl-admin-content-submit">
        <?php submit_button(); ?>
    </div>
</form>
<?php
    $content = ob_get_clean();
    echo $content;
}
*/
