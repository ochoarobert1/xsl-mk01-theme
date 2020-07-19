<?php

// Register Custom Post Type
function xsl_custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Localizaciones', 'Post Type General Name', 'xsl' ),
        'singular_name'         => _x( 'Localización', 'Post Type Singular Name', 'xsl' ),
        'menu_name'             => __( 'Localizaciones', 'xsl' ),
        'name_admin_bar'        => __( 'Localizaciones', 'xsl' ),
        'archives'              => __( 'Archivo de Localizaciones', 'xsl' ),
        'attributes'            => __( 'Atributos de Localización', 'xsl' ),
        'parent_item_colon'     => __( 'Localización Padre:', 'xsl' ),
        'all_items'             => __( 'Todas las Localizaciones', 'xsl' ),
        'add_new_item'          => __( 'Agregar Nueva Localización', 'xsl' ),
        'add_new'               => __( 'Agregar Nueva', 'xsl' ),
        'new_item'              => __( 'Nueva Localización', 'xsl' ),
        'edit_item'             => __( 'Editar Localización', 'xsl' ),
        'update_item'           => __( 'Actualizar Localización', 'xsl' ),
        'view_item'             => __( 'Ver Localización', 'xsl' ),
        'view_items'            => __( 'Ver Localizaciones', 'xsl' ),
        'search_items'          => __( 'Buscar Localización', 'xsl' ),
        'not_found'             => __( 'No hay resultados', 'xsl' ),
        'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'xsl' ),
        'featured_image'        => __( 'Imagen de Localización', 'xsl' ),
        'set_featured_image'    => __( 'Colocar Imagen de Localización', 'xsl' ),
        'remove_featured_image' => __( 'Remover Imagen de Localización', 'xsl' ),
        'use_featured_image'    => __( 'Usar como Imagen de Localización', 'xsl' ),
        'insert_into_item'      => __( 'Insertar en Localización', 'xsl' ),
        'uploaded_to_this_item' => __( 'Cargado a esta Localización', 'xsl' ),
        'items_list'            => __( 'Listado de Localizaciones', 'xsl' ),
        'items_list_navigation' => __( 'Navegación del Listado de Localizaciones', 'xsl' ),
        'filter_items_list'     => __( 'Filtro del Listado de Localizaciones', 'xsl' ),
    );
    $args = array(
        'label'                 => __( 'Localización', 'xsl' ),
        'description'           => __( 'Localizaciones', 'xsl' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'categorias-localizacion', 'paises' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-location-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'localizaciones', $args );

}
add_action( 'init', 'xsl_custom_post_type', 0 );

// Register Custom Taxonomy
function paises() {

    $labels = array(
        'name'                       => _x( 'Paises', 'Taxonomy General Name', 'xsl' ),
        'singular_name'              => _x( 'País', 'Taxonomy Singular Name', 'xsl' ),
        'menu_name'                  => __( 'Paises', 'xsl' ),
        'all_items'                  => __( 'Todos los Paises', 'xsl' ),
        'parent_item'                => __( 'País Padre', 'xsl' ),
        'parent_item_colon'          => __( 'País Padre:', 'xsl' ),
        'new_item_name'              => __( 'Nuevo País', 'xsl' ),
        'add_new_item'               => __( 'Agregar Nuevo País', 'xsl' ),
        'edit_item'                  => __( 'Editar País', 'xsl' ),
        'update_item'                => __( 'Actualizar País', 'xsl' ),
        'view_item'                  => __( 'Ver País', 'xsl' ),
        'separate_items_with_commas' => __( 'Separar paises por comas', 'xsl' ),
        'add_or_remove_items'        => __( 'Agregar o remover paises', 'xsl' ),
        'choose_from_most_used'      => __( 'Escoger de los mas usados', 'xsl' ),
        'popular_items'              => __( 'Paises Populares', 'xsl' ),
        'search_items'               => __( 'Buscar Paises', 'xsl' ),
        'not_found'                  => __( 'No hay resultados', 'xsl' ),
        'no_terms'                   => __( 'No hay paises', 'xsl' ),
        'items_list'                 => __( 'Listado de Paises', 'xsl' ),
        'items_list_navigation'      => __( 'Navegación del Listado de Paises', 'xsl' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'paises', array( 'localizaciones' ), $args );

}
add_action( 'init', 'paises', 0 );

// Register Custom Taxonomy
function xsl_custom_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Categorias', 'Taxonomy General Name', 'xsl' ),
        'singular_name'              => _x( 'Categoría', 'Taxonomy Singular Name', 'xsl' ),
        'menu_name'                  => __( 'Categorias', 'xsl' ),
        'all_items'                  => __( 'Todas las Categorias', 'xsl' ),
        'parent_item'                => __( 'Categoría Padre', 'xsl' ),
        'parent_item_colon'          => __( 'Categoría Padre:', 'xsl' ),
        'new_item_name'              => __( 'Nueva Categoría', 'xsl' ),
        'add_new_item'               => __( 'Agregar Nueva Categoría', 'xsl' ),
        'edit_item'                  => __( 'Editar Categoría', 'xsl' ),
        'update_item'                => __( 'Actualizar Categoría', 'xsl' ),
        'view_item'                  => __( 'Ver Categoría', 'xsl' ),
        'separate_items_with_commas' => __( 'Separar Categorías por comas', 'xsl' ),
        'add_or_remove_items'        => __( 'Agregar o Remover Categorías', 'xsl' ),
        'choose_from_most_used'      => __( 'Escoger de las más usadas', 'xsl' ),
        'popular_items'              => __( 'Categorías Populares', 'xsl' ),
        'search_items'               => __( 'Buscar Categoría', 'xsl' ),
        'not_found'                  => __( 'No hay resultados', 'xsl' ),
        'no_terms'                   => __( 'No hay categorias', 'xsl' ),
        'items_list'                 => __( 'Listado de Categorias', 'xsl' ),
        'items_list_navigation'      => __( 'Navegación del Listado de Categorias', 'xsl' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'categorias-localizacion', array( 'localizaciones' ), $args );

}
add_action( 'init', 'xsl_custom_taxonomy', 0 );

if( ! class_exists( 'Showcase_Taxonomy_Images' ) ) {
    class Showcase_Taxonomy_Images {

        public function __construct() {
            //
        }

        /**
     * Initialize the class and start calling our hooks and filters
     */
        public function init() {
            // Image actions
            add_action( 'categorias-localizacion_add_form_fields', array( $this, 'add_category_image' ), 10, 2 );
            add_action( 'created_categorias-localizacion', array( $this, 'save_category_image' ), 10, 2 );
            add_action( 'categorias-localizacion_edit_form_fields', array( $this, 'update_category_image' ), 10, 2 );
            add_action( 'edited_categorias-localizacion', array( $this, 'updated_category_image' ), 10, 2 );
            add_action( 'admin_enqueue_scripts', array( $this, 'load_media' ) );
            add_action( 'admin_footer', array( $this, 'add_script' ) );
        }

        public function load_media() {
            if( ! isset( $_GET['taxonomy'] ) || $_GET['taxonomy'] != 'categorias-localizacion' ) {
                return;
            }
            wp_enqueue_media();
        }

        /**
    * Add a form field in the new category page
    * @since 1.0.0
    */

        public function add_category_image( $taxonomy ) { ?>
<div class="form-field term-group">
    <label for="showcase-taxonomy-image-id"><?php _e( 'Image', 'showcase' ); ?></label>
    <input type="hidden" id="showcase-taxonomy-image-id" name="showcase-taxonomy-image-id" class="custom_media_url" value="">
    <div id="category-image-wrapper"></div>
    <p>
        <input type="button" class="button button-secondary showcase_tax_media_button" id="showcase_tax_media_button" name="showcase_tax_media_button" value="<?php _e( 'Add Image', 'showcase' ); ?>" />
        <input type="button" class="button button-secondary showcase_tax_media_remove" id="showcase_tax_media_remove" name="showcase_tax_media_remove" value="<?php _e( 'Remove Image', 'showcase' ); ?>" />
    </p>
</div>
<?php }

        /**
    * Save the form field
    * @since 1.0.0
    */
        public function save_category_image( $term_id, $tt_id ) {
            if( isset( $_POST['showcase-taxonomy-image-id'] ) && '' !== $_POST['showcase-taxonomy-image-id'] ){
                add_term_meta( $term_id, 'showcase-taxonomy-image-id', absint( $_POST['showcase-taxonomy-image-id'] ), true );
            }
        }

        /**
     * Edit the form field
     * @since 1.0.0
     */
        public function update_category_image( $term, $taxonomy ) { ?>
<tr class="form-field term-group-wrap">
    <th scope="row">
        <label for="showcase-taxonomy-image-id"><?php _e( 'Image', 'showcase' ); ?></label>
    </th>
    <td>
        <?php $image_id = get_term_meta( $term->term_id, 'showcase-taxonomy-image-id', true ); ?>
        <input type="hidden" id="showcase-taxonomy-image-id" name="showcase-taxonomy-image-id" value="<?php echo esc_attr( $image_id ); ?>">
        <div id="category-image-wrapper">
            <?php if( $image_id ) { ?>
            <?php echo wp_get_attachment_image( $image_id, 'thumbnail' ); ?>
            <?php } ?>
        </div>
        <p>
            <input type="button" class="button button-secondary showcase_tax_media_button" id="showcase_tax_media_button" name="showcase_tax_media_button" value="<?php _e( 'Add Image', 'showcase' ); ?>" />
            <input type="button" class="button button-secondary showcase_tax_media_remove" id="showcase_tax_media_remove" name="showcase_tax_media_remove" value="<?php _e( 'Remove Image', 'showcase' ); ?>" />
        </p>
    </td>
</tr>
<?php }

        /**
    * Update the form field value
    * @since 1.0.0
    */
        public function updated_category_image( $term_id, $tt_id ) {
            if( isset( $_POST['showcase-taxonomy-image-id'] ) && '' !== $_POST['showcase-taxonomy-image-id'] ){
                update_term_meta( $term_id, 'showcase-taxonomy-image-id', absint( $_POST['showcase-taxonomy-image-id'] ) );
            } else {
                update_term_meta( $term_id, 'showcase-taxonomy-image-id', '' );
            }
        }

        /**
    * Enqueue styles and scripts
    * @since 1.0.0
    */
        public function add_script() {
            if( ! isset( $_GET['taxonomy'] ) || $_GET['taxonomy'] != 'categorias-localizacion' ) {
                return;
            } ?>
<script>
    jQuery(document).ready(function($) {
        _wpMediaViewsL10n.insertIntoPost = '<?php _e( "Insert", "showcase" ); ?>';

        function ct_media_upload(button_class) {
            var _custom_media = true,
                _orig_send_attachment = wp.media.editor.send.attachment;
            $('body').on('click', button_class, function(e) {
                var button_id = '#' + $(this).attr('id');
                var send_attachment_bkp = wp.media.editor.send.attachment;
                var button = $(button_id);
                _custom_media = true;
                wp.media.editor.send.attachment = function(props, attachment) {
                    if (_custom_media) {
                        $('#showcase-taxonomy-image-id').val(attachment.id);
                        $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
                        $('#category-image-wrapper .custom_media_image').attr('src', attachment.url).css('display', 'block');
                    } else {
                        return _orig_send_attachment.apply(button_id, [props, attachment]);
                    }
                }
                wp.media.editor.open(button);
                return false;
            });
        }
        ct_media_upload('.showcase_tax_media_button.button');
        $('body').on('click', '.showcase_tax_media_remove', function() {
            $('#showcase-taxonomy-image-id').val('');
            $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
        });
        // Thanks: http://stackoverflow.com/questions/15281995/wordpress-create-category-ajax-response
        $(document).ajaxComplete(function(event, xhr, settings) {
            var queryStringArr = settings.data.split('&');
            if ($.inArray('action=add-tag', queryStringArr) !== -1) {
                var xml = xhr.responseXML;
                $response = $(xml).find('term_id').text();
                if ($response != "") {
                    // Clear the thumb image
                    $('#category-image-wrapper').html('');
                }
            }
        });
    });

</script>
<?php }
    }
    $Showcase_Taxonomy_Images = new Showcase_Taxonomy_Images();
    $Showcase_Taxonomy_Images->init(); }
