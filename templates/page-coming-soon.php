<?php
/**
* Template Name: Template - Próximamente
*
* @package xsl
* @subpackage xsl-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header('empty'); ?>
<?php the_post(); ?>
<div class="main-container-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-pink.png" alt="the exclusive shooting location" />
</div>
<div class="main-container-progress">
    <div class="lds-spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <h1>Coming soon...</h1>
</div>
<?php get_footer('empty'); ?>
