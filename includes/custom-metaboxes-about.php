<?php
/* ABOUT */

/* SECCIONES CON TEXTO */
$cmb_about_text_sections = new_cmb2_box( array(
    'id'            => $prefix . 'about_text_sections_metabox',
    'title'         => esc_html__( 'About: Secciones Solo Texto', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$group_field_id = $cmb_about_text_sections->add_field( array(
    'id'          => $prefix . 'about_sections_text_group',
    'type'        => 'group',
    'description' => __( 'Items con solo Texto y Botón - Ubicado justo despues de los Proyectos', 'xsl' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'xsl' ),
        'add_button'        => __( 'Agregar otro Item', 'xsl' ),
        'remove_button'     => __( 'Remover Item', 'xsl' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este Item?', 'xsl' )
    )
) );

$cmb_about_text_sections->add_group_field( $group_field_id, array(
    'id'   => 'description',
    'name'      => esc_html__( 'Texto del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese un Texto descriptivo al Item', 'xsl' ),
    'type'    => 'text'
) );

$cmb_about_text_sections->add_group_field( $group_field_id, array(
    'id'   => 'link_text',
    'name'      => esc_html__( 'Texto del Boton', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese un Texto alusivo al boton', 'xsl' ),
    'type'    => 'text'
) );

$cmb_about_text_sections->add_group_field( $group_field_id, array(
    'id'   => 'link_url',
    'name'      => esc_html__( 'Link URL del Item', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese el link a donde debe llevar el Item', 'xsl' ),
    'type'    => 'text_url',
) );
