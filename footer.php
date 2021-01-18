<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div class="the-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-start">
                    <?php if (is_active_sidebar('sidebar_footer')) : ?>
                        <div class="footer-item col-xl col-lg col-md col-sm-12 col-12">
                            <ul id="sidebar-footer1" class="footer-sidebar">
                                <?php dynamic_sidebar('sidebar_footer'); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('sidebar_footer-2')) : ?>
                        <div class="footer-item col-xl col-lg col-md col-sm-12 col-12">
                            <ul id="sidebar-footer2" class="footer-sidebar">
                                <?php dynamic_sidebar('sidebar_footer-2'); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('sidebar_footer-3')) : ?>
                        <div class="footer-item col-xl col-lg col-md col-sm-12 col-12">
                            <ul id="sidebar-footer3" class="footer-sidebar">
                                <?php dynamic_sidebar('sidebar_footer-3'); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('sidebar_footer-4')) : ?>
                        <div class="footer-item col-xl col-lg col-md col-sm-12 col-12">
                            <ul id="sidebar-footer4" class="footer-sidebar">
                                <?php dynamic_sidebar('sidebar_footer-4'); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="w-100"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $translations = explode('/', $_SERVER['REQUEST_URI']); ?>
<?php $cookies_options = get_option('xsl_cookie_settings'); ?>
<div class="xsl-privacy-policy-accept hidden-policy" id="xsl-privacy-policy-accept">
    <?php if ($translations[1] == 'en') { ?>
        <?php $cookie_text = $cookies_options['cookie_text_en']; ?>
        <?php $cookie_link = $cookies_options['cookie_link_en']; ?>
    <?php } ?>
    <?php if ($translations[1] == 'de') { ?>
        <?php $cookie_text = $cookies_options['cookie_text_de']; ?>
        <?php $cookie_link = $cookies_options['cookie_link_de']; ?>
    <?php } ?>
    <?php if (($translations[1] != 'en') && ($translations[1] != 'de')) { ?>
        <?php $cookie_text = $cookies_options['cookie_text']; ?>
        <?php $cookie_link = $cookies_options['cookie_link']; ?>
    <?php } ?>
    <p class="text-center small"><?php echo $cookie_text; ?> <a href="<?php echo get_permalink($cookie_link); ?>" class="font-weight-bold"><?php _e("aquí", 'xsl') ?></a>.</p>
    <div class="button-container">
        <a class="btn btn-sm btn-outline-elephant btn-privacy" id="privacy-policy-accept-btn"><?php _e("Acepto", 'xsl') ?></a>
    </div>
</div>
<?php wp_footer() ?>
</body>

</html>