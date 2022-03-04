<div class="better-woo-widgets">
    <div class="item">
        <div class="tit">
            <h4>Tags</h4>
        </div>
        <?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <?php $terms = get_terms(array('taxonomy' => 'product_tag', 'hide_empty' => false)); ?>
            <div class="tags">
                <?php foreach ( $terms as $term ) { ?>
                    <a href="<?php echo get_term_link( $term->term_id, 'product_tag' ); ?> " rel="tag"><?php echo $term->name; ?></a>
                <?php } ?>
            </div>
        <?php }; ?>
    </div>
</div>