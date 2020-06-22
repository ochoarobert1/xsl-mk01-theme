<?php
/**
* Template Name: Template - Registra tu Locación
*
* @package xsl
* @subpackage xsl-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php echo get_template_part('templates/templates-banner'); ?>
        <form class="register-property-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="register-form-control registry-full-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3><?php _e('Tipo de Propiedad', 'xsl'); ?></h3>
                        <div class="row">
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Apartamento', 'xsl'); ?></label>
                            </div>
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Finca', 'xsl'); ?></label>
                            </div>
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Ocio y Restauación', 'xsl'); ?></label>
                            </div>
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Multiespacio', 'xsl'); ?></label>
                            </div>
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Nave industrial', 'xsl'); ?></label>
                            </div>
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Oficina', 'xsl'); ?></label>
                            </div>
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Palacio', 'xsl'); ?></label>
                            </div>
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Vivienda unifamiliar', 'xsl'); ?></label>
                            </div>
                            <div class="property-type col-xl col-lg col-md col-sm-12 col-12">
                                <label for="property_type[]"><input type="checkbox" name="property_type[]" /> <?php _e('Otros', 'xsl'); ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="register-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3><?php _e('Dirección', 'xsl'); ?> <span>*</span></h3>
                        <input type="text" name="direccion" class="form-control" />
                        <small class="d-none error"></small>
                    </div>
                    <div class="register-form-divider col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="register-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3><?php _e('Nombre', 'xsl'); ?> <span>*</span></h3>
                            <input type="text" name="nombre" class="form-control" />
                            <small class="d-none error"></small>
                        </div>
                        <div class="register-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3><?php _e('Apellido', 'xsl'); ?> <span>*</span></h3>
                            <input type="text" name="apellido" class="form-control" />
                            <small class="d-none error"></small>
                        </div>
                        <div class="register-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3><?php _e('Email', 'xsl'); ?> <span>*</span></h3>
                            <input type="email" name="email" class="form-control" />
                            <small class="d-none error"></small>
                        </div>
                        <div class="register-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3><?php _e('Teléfono', 'xsl'); ?> <span>*</span></h3>
                            <input type="email" name="phone" class="form-control" />
                            <small class="d-none error"></small>
                        </div>
                    </div>
                    <div class="register-form-divider col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="register-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h4><?php _e('Provincias', 'xsl'); ?></h4>
                            <select name="provincias" id="provincias" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="">Seleccionar</option>
                                <option value="">Seleccionar</option>
                                <option value="">Seleccionar</option>
                                <option value="">Seleccionar</option>
                            </select>
                        </div>
                        <div class="register-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h5><?php _e('Alquilas tu propiedad para:', 'xsl'); ?> <span>*</span></h5>
                            <label for="purpose[]"><input type="checkbox" name="purpose[]"> Publicidad, Cine y TV</label>
                            <label for="purpose[]"><input type="checkbox" name="purpose[]"> Sesiones fotográficas</label>
                            <label for="purpose[]"><input type="checkbox" name="purpose[]"> Eventos corporativos y privados</label>
                        </div>
                        <div class="register-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h4><?php _e('Dimensiones', 'xsl'); ?></h4>
                            <select name="dimensiones" id="dimensiones" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="">Seleccionar</option>
                                <option value="">Seleccionar</option>
                                <option value="">Seleccionar</option>
                                <option value="">Seleccionar</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</main>
<?php get_footer(); ?>
