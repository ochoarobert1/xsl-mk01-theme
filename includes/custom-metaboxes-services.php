<?php
/* SERVICES */

/* SERVICES ITEM GROUP */
$cmb_services_items = new_cmb2_box( array(
    'id'            => $prefix . 'services_item_metabox',
    'title'         => esc_html__( 'Servicios: Items', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-services.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$group_field_id = $cmb_services_items->add_field( array(
    'id'          => $prefix . 'services_item_group',
    'type'        => 'group',
    'description' => __( 'Servicios de la Empresa', 'xsl' ),
    'options'     => array(
        'group_title'       => __( 'Servicio {#}', 'xsl' ),
        'add_button'        => __( 'Agregar otro Servicio', 'xsl' ),
        'remove_button'     => __( 'Remover Servicio', 'xsl' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este Servicio?', 'xsl' )
    )
) );

$cmb_services_items->add_group_field( $group_field_id, array(
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
    'preview_size' => 'avatar'
) );

$cmb_services_items->add_group_field( $group_field_id, array(
    'id'   => 'title',
    'name'      => esc_html__( 'Descripción del Servicio', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva al Servicio', 'xsl' ),
    'type'    => 'text'
) );

$cmb_services_post_text = new_cmb2_box( array(
    'id'            => $prefix . 'services_post_text_metabox',
    'title'         => esc_html__( 'Servicios: Texto posterior a Items', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-services.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_services_post_text->add_field( array(
    'id'   => $prefix . 'services_post_text',
    'name'      => esc_html__( 'Título del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese un título alusivo al Item', 'xsl' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_services_post_text->add_field( array(
    'id'   => $prefix . 'services_link_text',
    'name'      => esc_html__( 'Link URL del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese el link a donde debe llevar el Item', 'xsl' ),
    'type'    => 'text',
) );


$cmb_services_post_text->add_field( array(
    'id'   => $prefix . 'services_link_url',
    'name'      => esc_html__( 'Link URL del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese el link a donde debe llevar el Item', 'xsl' ),
    'type'    => 'text_url',
) );
