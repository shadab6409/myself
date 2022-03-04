            
<div class="portfolio style-7 avo-tooltip">
	<div class="works">
            <div class="container">
                <div class="row lg-space">


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

                    <div class="col-lg-4 col-md-6 valign">
                        <div class="item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="img" data-tooltip-tit="<?php the_title(); ?>" data-tooltip-sub="
                                <?php 
                                    $destudio_taxonomy = 'portfolio_category'; 
                                    $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  
                                    $destudio_cats = array();
                                    foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;} 
                                    echo implode(' / ', $destudio_cats);
                                ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </a>
                        </div>
                    </div>

	            <?php endwhile;  ?>
	            <?php endif;  wp_reset_postdata();  ?>

	        </div> 
	    </div>
	</div>
</div>