<div class="local-taxonomies-filter-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="container">
        <div class="row">
            <div class="local-taxonomies-filter-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php _e('Lugares', 'xsl'); ?></a>
                        <div class="dropdown-menu">
                            <?php $args = array('taxonomy' => 'paises', 'hide_empty' => false, 'parent' => 0); ?>
                            <?php $array_categories = get_terms($args); ?>
                            <?php if (!empty($array_categories)) : ?>
                            <?php foreach ($array_categories as $item) { ?>
                            <a class="dropdown-item" href="<?php echo get_term_link($item); ?>"><?php echo $item->name; ?></a>
                            <?php } ?>
                            <?php endif; ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo home_url('/localizaciones'); ?>"><?php _e('Todos', 'xsl'); ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php _e('Categorías', 'xsl'); ?></a>
                        <div class="dropdown-menu">
                            <?php $args = array('taxonomy' => 'categorias-localizacion', 'hide_empty' => false, 'parent' => 0); ?>
                            <?php $array_categories = get_terms($args); ?>
                            <?php if (!empty($array_categories)) : ?>
                            <?php $i = 1; ?>
                            <?php foreach ($array_categories as $item) { ?>
                            <a class="dropdown-item" href="<?php echo get_term_link($item); ?>"><?php echo $item->name; ?></a>
                            <?php $i++; } ?>
                            <?php endif; ?>
                            <a class="dropdown-item" href="<?php echo home_url('/localizaciones'); ?>"><?php _e('Todos', 'xsl'); ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php _e('Tipo', 'xsl'); ?></a>
                        <div class="dropdown-menu">
                            <?php $args = array('taxonomy' => 'categorias-localizacion', 'hide_empty' => false, 'parent' => 0); ?>
                            <?php $array_categories = get_terms($args); ?>
                            <?php if (!empty($array_categories)) : ?>
                            <?php foreach ($array_categories as $item) { ?>
                            <?php $current_parent = $item->term_id; ?>

                            <?php $args = array('taxonomy' => 'categorias-localizacion', 'hide_empty' => false,  'parent' => $current_parent ); ?>
                            <?php $array_taxonomies = get_terms($args); ?>
                            <?php if (!empty($array_taxonomies)) : ?>
                            <?php $i = 1; ?>
                            <?php foreach ($array_taxonomies as $taxes) { ?>
                            <a class="dropdown-item" href="<?php echo get_term_link($taxes); ?>"><?php echo $taxes->name; ?></a>
                            <?php } ?>
                            <?php endif; ?>
                            <div class="dropdown-divider"></div>
                            <?php } ?>
                            <?php endif; ?>
                            <a class="dropdown-item" href="<?php echo home_url('/localizaciones'); ?>"><?php _e('Todos', 'xsl'); ?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
