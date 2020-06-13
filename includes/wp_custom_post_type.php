<?php

function xsl_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Clientes', 'Post Type General Name', 'xsl' ),
		'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'xsl' ),
		'menu_name'             => __( 'Clientes', 'xsl' ),
		'name_admin_bar'        => __( 'Clientes', 'xsl' ),
		'archives'              => __( 'Archivo de Clientes', 'xsl' ),
		'attributes'            => __( 'Atributos de Cliente', 'xsl' ),
		'parent_item_colon'     => __( 'Cliente Padre:', 'xsl' ),
		'all_items'             => __( 'Todos los Clientes', 'xsl' ),
		'add_new_item'          => __( 'Agregar Nuevo Cliente', 'xsl' ),
		'add_new'               => __( 'Agregar Nuevo', 'xsl' ),
		'new_item'              => __( 'Nuevo Cliente', 'xsl' ),
		'edit_item'             => __( 'Editar Cliente', 'xsl' ),
		'update_item'           => __( 'Actualizar Cliente', 'xsl' ),
		'view_item'             => __( 'Ver Cliente', 'xsl' ),
		'view_items'            => __( 'Ver Clientes', 'xsl' ),
		'search_items'          => __( 'Buscar Cliente', 'xsl' ),
		'not_found'             => __( 'No hay resultados', 'xsl' ),
		'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'xsl' ),
		'featured_image'        => __( 'Imagen del Cliente', 'xsl' ),
		'set_featured_image'    => __( 'Colocar Imagen del Cliente', 'xsl' ),
		'remove_featured_image' => __( 'Remover Imagen del Cliente', 'xsl' ),
		'use_featured_image'    => __( 'Usar como Imagen del Cliente', 'xsl' ),
		'insert_into_item'      => __( 'Insertar en Cliente', 'xsl' ),
		'uploaded_to_this_item' => __( 'Cargado a este Cliente', 'xsl' ),
		'items_list'            => __( 'Listado de Clientes', 'xsl' ),
		'items_list_navigation' => __( 'Navegación del Listado de Cliente', 'xsl' ),
		'filter_items_list'     => __( 'Filtro del Listado de Clientes', 'xsl' ),
	);
	$args = array(
		'label'                 => __( 'Cliente', 'xsl' ),
		'description'           => __( 'Portafolio de Clientes', 'xsl' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'tipos-de-clientes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'clientes', $args );

}

add_action( 'init', 'xsl_custom_post_type', 0 );