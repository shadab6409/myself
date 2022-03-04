            
<div class="portfolio style-5 <?php echo 'mode-'.$settings['avo_mode'];?>"> 
    <div class="filtering text-center col-12">
        <div class="filter">

            <?php
                $destudio_terms = get_terms(array(
                    'taxonomy' => 'portfolio_category',
                    'hide_empty' => false,
                    'include' => $settings['blog_cat'],
                )); // Get all terms of a taxonomy 
                if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : 
            ?>

                <span data-filter='*' class="active">
                    <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_portfolio_all') ) { 
                            echo esc_attr( avo_option( 'avo_portfolio_all'));} else { esc_html_e('Show All','avo_plg'); 
                        }
                    ?>  
                </span>

            <?php foreach ( $destudio_terms as $destudio_term ) { ?>
                <span data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>">
                    <?php echo esc_attr( $destudio_term->name); ?> 
                </span>
            <?php } 
                endif;?>

        </div>
    </div>

    
    <div class="avo-gallery">  
        <?php 
            $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if ($settings['port_order'] != 'rand') {
                $order = 'order';
                $ord_val = $settings['port_order'];
            } else {
                $order = 'orderby';
                $ord_val = 'rand';
            }
            
            if ( $settings['sort_cat']  == 'yes' ) {
                $destudio_work = new \WP_Query(array(
                    'posts_per_page'   => $settings['portfolio_item'],
                    'post_type' =>  'portfolio', 'avo_plg',
                    $order       =>  $ord_val,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'portfolio_category',   // taxonomy name
                            'field' => 'term_id',
                            'terms' => $settings['blog_cat'],           // term_id, slug or name                // term id, term slug or term name
                        )
                    )
                )); 
            } else {
                $destudio_work = new \WP_Query(array(
                    'paged' => $avo_paged,
                    'posts_per_page'   => $settings['portfolio_item'],
                    'post_type' =>  'portfolio', 'avo_plg',
                    $order       =>  $ord_val
                )); 
            }
            
            if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
            global $post ;
            
        ?>

                     <div class="<?php if  ($settings['port_column'] == '3') {echo "col-md-4"; } else if  ($settings['port_column'] == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?> items  <?php $destudio_terms = get_the_terms( get_the_ID(), 'portfolio_category' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
            echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
            $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
            echo esc_attr( $destudio_class . " "); } ?> ">
                        <div class="item-img">
                            <a href="<?php the_permalink(); ?>" class="">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="cont">
                            <h6><?php the_title(); ?></h6>
                            <span>
                                <?php 
                                    $destudio_taxonomy = 'portfolio_category'; 
                                    $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  
                                    $destudio_cats = array();
                                    foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;} 
                                    echo implode(' / ', $destudio_cats);
                                ?>
                            </span>
                        </div>
                    </div>

        <?php endwhile;  ?>
        <?php endif;  wp_reset_postdata();  ?>
    </div>
</div>