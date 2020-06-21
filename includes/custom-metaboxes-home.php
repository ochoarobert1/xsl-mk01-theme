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
