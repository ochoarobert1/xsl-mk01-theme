<?php
/* HOME */

/* BENEFITS GROUP */
$cmb_home_benefits = new_cmb2_box( array(
    'id'            => $prefix . 'home_benefits_metabox',
    'title'         => esc_html__( 'Home: Sección de Beneficios', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'       => array( 'key' => 'front-page', 'value' => '' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$group_field_id = $cmb_home_benefits->add_field( array(
    'id'          => $prefix . 'home_benefits_group',
    'type'        => 'group',
    'description' => __( 'Beneficios dentro del Home - Ubicado justo despues del banner principal', 'xsl' ),
    'options'     => array(
        'group_title'       => __( 'Beneficio {#}', 'xsl' ),
        'add_button'        => __( 'Agregar otro Beneficio', 'xsl' ),
        'remove_button'     => __( 'Remover Beneficio', 'xsl' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este Beneficio?', 'xsl' )
    )
) );

$cmb_home_benefits->add_group_field( $group_field_id, array(
    'id'   => 'icon',
    'name'      => esc_html__( 'Ícono del Item', 'xsl' ),
    'desc'      => esc_html__( 'Carga un ícono descriptivo para este Item', 'xsl' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar ícono', 'xsl' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

$cmb_home_benefits->add_group_field( $group_field_id, array(
    'id'   => 'description',
    'name'      => esc_html__( 'Descripción del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva al Item', 'xsl' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_home_benefits->add_group_field( $group_field_id, array(
    'id'   => 'link_url',
    'name'      => esc_html__( 'Link URL del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese el link a donde debe llevar el Item', 'xsl' ),
    'type'    => 'text_url',
) );

/* SECTIONS MENU GROUP */
$cmb_home_sections = new_cmb2_box( array(
    'id'            => $prefix . 'home_sections_metabox',
    'title'         => esc_html__( 'Home: Secciones Con Imágenes', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'       => array( 'key' => 'front-page', 'value' => '' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$group_field_id = $cmb_home_sections->add_field( array(
    'id'          => $prefix . 'home_sections_group',
    'type'        => 'group',
    'description' => __( 'imágenes con Link dentro dentro de la Sección - Ubicado justo despues de los Beneficios', 'xsl' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'xsl' ),
        'add_button'        => __( 'Agregar otro Item', 'xsl' ),
        'remove_button'     => __( 'Remover Item', 'xsl' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este Item?', 'xsl' )
    )
) );

$cmb_home_sections->add_group_field( $group_field_id, array(
    'id'   => 'big_item',
    'name'      => esc_html__( 'Item mas Grande', 'xsl' ),
    'desc'      => esc_html__( 'Activar si este item debe ser mas grande en esta sección', 'xsl' ),
    'type'    => 'checkbox'
) );

$cmb_home_sections->add_group_field( $group_field_id, array(
    'id'   => 'bg_image',
    'name'      => esc_html__( 'Imágen de Fondo del Item', 'xsl' ),
    'desc'      => esc_html__( 'Carga un Imágen de Fondo descriptivo para este Item', 'xsl' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Fondo', 'xsl' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

$cmb_home_sections->add_group_field( $group_field_id, array(
    'id'   => 'title',
    'name'      => esc_html__( 'Título del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese un título alusivo al Item', 'xsl' ),
    'type'    => 'text'
) );

$cmb_home_sections->add_group_field( $group_field_id, array(
    'id'   => 'link_url',
    'name'      => esc_html__( 'Link URL del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese el link a donde debe llevar el Item', 'xsl' ),
    'type'    => 'text_url',
) );

/* SECCIONES CON TEXTO */
$cmb_home_text_sections = new_cmb2_box( array(
    'id'            => $prefix . 'home_text_sections_metabox',
    'title'         => esc_html__( 'Home: Secciones Solo Texto', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'       => array( 'key' => 'front-page', 'value' => '' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$group_field_id = $cmb_home_text_sections->add_field( array(
    'id'          => $prefix . 'home_sections_text_group',
    'type'        => 'group',
    'description' => __( 'Items con solo Texto y Botón - Ubicado justo despues de los Beneficios', 'xsl' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'xsl' ),
        'add_button'        => __( 'Agregar otro Item', 'xsl' ),
        'remove_button'     => __( 'Remover Item', 'xsl' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este Item?', 'xsl' )
    )
) );

$cmb_home_text_sections->add_group_field( $group_field_id, array(
    'id'   => 'description',
    'name'      => esc_html__( 'Texto del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese un Texto descriptivo al Item', 'xsl' ),
    'type'    => 'text'
) );

$cmb_home_text_sections->add_group_field( $group_field_id, array(
    'id'   => 'link_text',
    'name'      => esc_html__( 'Texto del Boton', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese un Texto alusivo al boton', 'xsl' ),
    'type'    => 'text'
) );

$cmb_home_text_sections->add_group_field( $group_field_id, array(
    'id'   => 'link_url',
    'name'      => esc_html__( 'Link URL del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese el link a donde debe llevar el Item', 'xsl' ),
    'type'    => 'text_url',
) );

/* SECTIONS BIG MENU GROUP */
$cmb_home_big_sections = new_cmb2_box( array(
    'id'            => $prefix . 'home_big_sections_metabox',
    'title'         => esc_html__( 'Home: Sección Mas Grande Con Imágenes', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'       => array( 'key' => 'front-page', 'value' => '' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_home_big_sections->add_field( array(
    'id'   => $prefix . 'big_bg_image',
    'name'      => esc_html__( 'Imágen de Fondo del Item', 'xsl' ),
    'desc'      => esc_html__( 'Carga un Imágen de Fondo descriptivo para este Item', 'xsl' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Fondo', 'xsl' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

$cmb_home_big_sections->add_field( array(
    'id'   => $prefix . 'big_title',
    'name'      => esc_html__( 'Título del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese un título alusivo al Item', 'xsl' ),
    'type'    => 'text'
) );

$cmb_home_big_sections->add_field( array(
    'id'   => $prefix . 'big_link_url',
    'name'      => esc_html__( 'Link URL del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese el link a donde debe llevar el Item', 'xsl' ),
    'type'    => 'text_url',
) );

/* SECCIONES CON TEXTO */
$cmb_home_contact = new_cmb2_box( array(
    'id'            => $prefix . 'home_contact',
    'title'         => esc_html__( 'Home: Sección Contacto', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'       => array( 'key' => 'front-page', 'value' => '' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_home_contact->add_field( array(
    'id'         => $prefix . 'home_contact_text',
    'name'       => esc_html__( 'Texto anterior al formulario de contacto', 'xsl' ),
    'desc'       => esc_html__( 'ingrese un texto descriptivo que estara ubicado justo antes del Formulario', 'xsl' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_home_contact->add_field( array(
    'id'   => $prefix . 'home_contact_image',
    'name'      => esc_html__( 'Logo para Formulario de contacto', 'xsl' ),
    'desc'      => esc_html__( 'Carga un Logo para Formulario de contacto', 'xsl' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Logo', 'xsl' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );
