<?php
/* HOME */

/* CONTACT EMBED ELEMENT */
$cmb_contact_embed = new_cmb2_box( array(
    'id'            => $prefix . 'contact_embed_metabox',
    'title'         => esc_html__( 'Contacto: Sección de Beneficios', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_contact_embed->add_field( array(
    'id'   => $prefix . 'contact_embed',
    'name'      => esc_html__( 'Código Embed del Mapa', 'xsl' ),
    'desc'      => esc_html__( 'Inserte el iframe que generara el Mapa en el sitio', 'xsl' ),
    'type'    => 'textarea_code'
) );

/* CONTACT ITEM GROUP */
$cmb_contact_items = new_cmb2_box( array(
    'id'            => $prefix . 'contact_items_metabox',
    'title'         => esc_html__( 'Contacto: Secciones Con Imágenes', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_contact_items->add_field( array(
    'id'   => $prefix . 'contact_directions',
    'name'      => esc_html__( 'Dirección', 'xsl' ),
    'desc'      => esc_html__( 'Ingrese la dirección de la empresa', 'xsl' ),
    'type'    => 'text'
) );

/* FORMULARIO */
$cmb_contact_form = new_cmb2_box( array(
    'id'            => $prefix . 'form_contact',
    'title'         => esc_html__( 'Contacto: Sección Formulario', 'xsl' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_contact_form->add_field( array(
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
