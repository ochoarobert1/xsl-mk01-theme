<?php
function ed_metabox_include_front_page( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'] ) ) {
        return $display;
    }

    if ( 'front-page' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return false;
    }

    // Get ID of page set as front page, 0 if there isn't one
    $front_page = get_option( 'page_on_front' );

    // there is a front page set and we're on it!
    return $post_id == $front_page;
}
add_filter( 'cmb2_show_on', 'ed_metabox_include_front_page', 10, 2 );

function be_metabox_show_on_slug( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'], $meta_box['show_on']['value'] ) ) {
        return $display;
    }

    if ( 'slug' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return $display;
    }

    $slug = get_post( $post_id )->post_name;

    // See if there's a match
    return in_array( $slug, (array) $meta_box['show_on']['value']);
}
add_filter( 'cmb2_show_on', 'be_metabox_show_on_slug', 10, 2 );

add_action( 'cmb2_admin_init', 'xsl_register_custom_metabox' );

function xsl_register_custom_metabox() {
    $prefix = 'xsl_';

    $cmb_page_metabox = new_cmb2_box( array(
        'id'            => $prefix . 'page_general_metabox',
        'title'         => esc_html__( 'Página: Banner General', 'xsl' ),
        'object_types'  => array( 'page' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
    ) );

    $cmb_page_metabox->add_field( array(
        'id'      => $prefix . 'page_general_banner_image',
        'name'      => esc_html__( 'Imagen del Banner', 'xsl' ),
        'desc'      => esc_html__( 'Cargue una imagen para el Banner Principal de la pagina', 'xsl' ),
        'type'    => 'file',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment
        'text' => array(
            'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
            'remove_image_text' => 'Replacement', // default: "Remove Image"
            'file_text' => 'Replacement', // default: "File:"
            'file_download_text' => 'Replacement', // default: "Download"
            'remove_text' => 'Replacement', // default: "Remove"
        ),
    ) );

    $cmb_page_metabox->add_field( array(
        'id'         => $prefix . 'page_general_banner_text',
        'name'       => esc_html__( 'Texto del Banner', 'xsl' ),
        'desc'       => esc_html__( 'ingrese un texto descriptivo de este Banner Principal', 'xsl' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );

    /* HOME */
    require_once('custom-metaboxes-home.php');

    /* ABOUT */
    require_once('custom-metaboxes-about.php');

    /* SERVICES */
    require_once('custom-metaboxes-services.php');

    /* CONTACT US */
    require_once('custom-metaboxes-contact.php');


    /* LOCALIZACIONES */
    $cmb_local_gallery = new_cmb2_box( array(
        'id'            => $prefix . 'local_metabox',
        'title'         => esc_html__( 'Localizaciones: Galería', 'xsl' ),
        'object_types'  => array( 'localizaciones' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_local_gallery->add_field( array(
        'id'   => $prefix . 'local_gallery',
        'name' => esc_html__('Galería', 'xsl'),
        'desc' => esc_html__('Cargue o seleccione las imágenes para incluirlas en la Galería de la Localización', 'xsl'),
        'type' => 'file_list',
        'query_args' => array( 'type' => 'image' ),
        'text' => array(
            'add_upload_files_text' => esc_html__( 'Cargar Imágenes', 'xsl' ),
            'remove_image_text' => esc_html__( 'Remove Imágenes', 'xsl' ),
            'file_text' => esc_html__( 'Imagen', 'xsl' ),
            'file_download_text' => esc_html__( 'Descargar', 'xsl' ),
            'remove_text' => esc_html__( 'Remover', 'xsl' ),
        ),
        'preview_size' => array( 100, 100 )
    ) );

}


function custom_woocommerce_addons_image_gallery() {
    ob_start();
    $gallery = get_post_meta(get_the_ID(), 'hinb_addons_gallery', true);
    if (!empty($gallery)) {
?>
<div class="custom-woocommerce-gallery-addons-container">
    <?php foreach ($gallery as $key => $data) { ?>
    <?php $image = wp_get_attachment_image_src($key, 'medium', false); ?>
    <div class="gallery-addon-item">
        <img width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" src="<?php echo $image[0]; ?>" alt="Addon" class="img-addon-custom" />
    </div>
    <?php } ?>
</div>
<?php
                          }
    $content = ob_end_clean();
    echo $content;
}
