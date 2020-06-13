<?php
add_action( 'tgmpa_register', 'PROYECTO_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function PROYECTO_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        array(
            'name'      => 'Classic Editor',
            'slug'      => 'classic-editor',
            'required'  => true,
        ),

        array(
            'name'      => 'CMB2',
            'slug'      => 'cmb2',
            'required'  => true,
        ),

        array(
            'name'      => 'WordPress Importer',
            'slug'      => 'wordpress-importer',
            'required'  => true,
        ),

        array(
            'name'      => 'Jetpack for WordPress',
            'slug'      => 'jetpack',
            'required'  => false,
        )
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'PROYECTO_tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.


        'strings'      => array(
            'page_title'                      => __( 'Instalar Plugins Requeridos', 'PROYECTO' ),
            'menu_title'                      => __( 'Instalar Plugins', 'PROYECTO' ),
            'installing'                      => __( 'Instalando Plugin: %s', 'PROYECTO' ),
            'updating'                        => __( 'Actualizando Plugin: %s', 'PROYECTO' ),
            'oops'                            => __( 'Ocurrió un error con el API del plugin.', 'PROYECTO' ),
            'notice_can_install_required'     => _n_noop(
                'Este tema requiere el siguiente plugin: %1$s.',
                'Este tema requiere los siguientes plugins: %1$s.',
                'PROYECTO'
            ),
            'notice_can_install_recommended'  => _n_noop(
                'Este tema recomienda el siguiente plugin: %1$s.',
                'Este tema recomienda los siguientes plugins: %1$s.',
                'PROYECTO'
            ),
            'notice_ask_to_update'            => _n_noop(
                'El siguiente plugin necesita ser actualizado a su última versión para asegurar su compatibilidad con este tema: %1$s.',
                'Los siguientes plugins necesitan ser actualizados a su última versión para asegurar su compatibilidad con este tema: %1$s.',
                'PROYECTO'
            ),
            'notice_ask_to_update_maybe'      => _n_noop(
                'Hay una actualización disponible para: %1$s.',
                'Hay actualizaciones disponible para los siguientes plugins: %1$s.',
                'PROYECTO'
            ),
            'notice_can_activate_required'    => _n_noop(
                'El siguiente plugin requerido esta actualmente desactivado: %1$s.',
                'Los siguientes plugins requeridos estan actualmente desactivados: %1$s.',
                'PROYECTO'
            ),
            'notice_can_activate_recommended' => _n_noop(
                'Este plugin recomendado esta actualmente desactivado: %1$s.',
                'Los siguientes plugins recomendados estan actualmente desactivados: %1$s.',
                'PROYECTO'
            ),
            'install_link'                    => _n_noop(
                'Iniciar la instalación del plugin',
                'Iniciar la instalación de los plugins',
                'PROYECTO'
            ),
            'update_link'                       => _n_noop(
                'Iniciar la actualización del plugin',
                'Iniciar la actualización de los plugins',
                'PROYECTO'
            ),
            'activate_link'                   => _n_noop(
                'Iniciar la activación del plugin',
                'Iniciar la activación de los plugins',
                'PROYECTO'
            ),
            'return'                          => __( 'Volver al Instalador de plugins requeridos', 'PROYECTO' ),
            'plugin_activated'                => __( 'Plugin activado con éxito.', 'PROYECTO' ),
            'activated_successfully'          => __( 'El siguiente plugin ha sido activado exitosamente:', 'PROYECTO' ),
            'plugin_already_active'           => __( 'No se tomón ninguna acción. El plugin %1$s ya estaba activado.', 'PROYECTO' ),
            'plugin_needs_higher_version'     => __( 'Plugin no activo. Una versión mas alta de %s es necesaria para este tema. Por favor, actualiza el plugin.', 'PROYECTO' ),
            'complete'                        => __( 'Todos los plugins han sido instalados y activados exitosamente. %1$s', 'PROYECTO' ),
            'dismiss'                         => __( 'Ocultar este aviso', 'PROYECTO' ),
            'notice_cannot_install_activate'  => __( 'Hay uno o más plugins necesarios o recomendados para instalar, actualizar o activar.', 'PROYECTO' ),
            'contact_admin'                   => __( 'Por favor, contacte con el administrador de este sitio para mas ayuda.', 'PROYECTO' ),

            'nag_type'                        => 'notice-info', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
        ),
    );

    tgmpa( $plugins, $config );
}
