<form class="contact-form-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row">
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'xsl_home_contact_image_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <div class="contact-form-logo-mobile col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-xl-none d-lg-none d-md-none d-sm-block d-block">
            <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
        </div>
        <div class="contact-form-text-content col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="row">
                <div class="contact-form-control col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <label for="nombre"><?php _e('Nombre', 'xsl'); ?></label>
                    <input id="contact_name" type="text" name="nombre" class="form-control" />
                    <small class="custom-danger d-none error error-nombre"></small>
                </div>
                <div class="contact-form-control col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <label for="apellido"><?php _e('Apellido', 'xsl'); ?></label>
                    <input id="contact_lname" type="text" name="apellido" class="form-control" />
                    <small class="custom-danger d-none error error-apellido"></small>
                </div>
                <div class="contact-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <label for="email"><?php _e('Correo Electrónico', 'xsl'); ?></label>
                    <input id="contact_email" type="email" name="email" class="form-control" />
                    <small class="custom-danger d-none error error-email"></small>
                </div>
                <div class="contact-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <label for="phone"><?php _e('Número Telefónico', 'xsl'); ?></label>
                    <input id="contact_phone" type="text" name="phone" class="form-control" />
                    <small class="custom-danger d-none error error-phone"></small>
                </div>
                <div class="contact-form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <label for="comments"><?php _e('Comentarios', 'xsl'); ?></label>
                    <textarea id="contact_comments" name="comments" id="comments" cols="30" rows="3" class="form-control"></textarea>
                    <small class="custom-danger d-none error error-comments"></small>
                </div>
            </div>
        </div>
        <div class="contact-form-logo col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid d-xl-block d-lg-block d-md-block d-sm-none d-none" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
            <button id="submitBtn" type="submit" class="btn btn-md btn-contact"><?php _e('Enviar', 'xsl'); ?></button>
        </div>
        <div class="contact-form-response col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="loader-css d-none"></div>
        </div>
    </div>
</form>
