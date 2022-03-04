	<div class="avo-product style-3">
   		<div class="filter-tab">
	        <ul class="port-filter center-port-filter">
	                            
				<?php
	            $destudio_taxonomy = 'product_cat';
	            $destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
	            if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : ?>
	            <li>
	                <a class="active" href="#" data-filter="*">
	                    <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_product_all') ) { 
	                    echo esc_attr( avo_option( 'avo_product_all'));} else { esc_html_e('Show All','avo_plg'); } ?>
	                </a>
	            </li>
	            <?php foreach ( $destudio_terms as $destudio_term ) { ?>
	                <li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>" href="#">
	                <?php echo esc_attr( $destudio_term->name); ?></a></li>
	            <?php } 
	            endif;?> 
	        </ul>
        </div>
		
        
   
   		<div class="portfolio-body clearfix standard-port portfolio-type-three>
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
					'posts_per_page'   => $settings['product_item'],
					'post_type' =>  'product', 'avo_plg',
					$order       =>  $ord_val,
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',   // taxonomy name
							'field' => 'term_id',
							'terms' => $settings['product_cat'],           // term_id, slug or name                // term id, term slug or term name
						)
					)
				)); 
			} else {
				$destudio_work = new \WP_Query(array(
				    'paged' => $avo_paged,
					'posts_per_page'   => $settings['product_item'],
					'post_type' =>  'product', 'avo_plg',
					$order       =>  $ord_val
				)); 
			}
			
            if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
            global $post ;
            ?>

            <div class="<?php if  ($settings['port_column'] == '3') {echo "col-md-4"; } else if  ($settings['port_column'] == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>
             port-item <?php $destudio_terms = get_the_terms( get_the_ID(), 'product_cat' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
            echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
            $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
            echo esc_attr( $destudio_class . " "); } ?><?php if  ($settings['port_style'] == '2') {echo "pb-30"; }?>" id="post-<?php the_ID(); ?>">
               
                <div class="port-inner">
                    <div class="port-box"></div>
                    <div class="port-img width-img img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                    <div class="img-mask"></div>
                    <div class="port-dbox">
                        <div class="dbox-relative">
                        	<?php if  ($settings['port_style'] == '3') {?>
                            <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-img port-icon"> 
                                <span class="icon"><i class="fa fa-search"></i></span>
                             </a>
                             <?php }?>
                            <h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                            <div class="cleaboth clearfix"></div>
                            <?php $destudio_taxonomy = 'product_cat'; 
                                $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  ?> 
                            <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
							<p><?php echo wc_price( $price ); ?></p>
                        </div><!--/.dbox-relative-->
                        <?php if  ($settings['port_style'] == '2') {?>
	                        
	                    <?php
	                    global $product;

						echo apply_filters( 'woocommerce_loop_add_to_cart_link',
						    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button product_type_%s add_to_cart_button ajax_add_to_cart %s">
						    	<span class="button__cart">%s</span>
						    	<span class="button__loader h-rotatingNeuron">%s</span>
						    	<span class="button__added">%s</span></a>',
						        esc_url( $product->add_to_cart_url() ),
						        esc_attr( $product->get_id() ),
						        esc_attr( $product->get_sku() ),
						        $product->is_purchasable() && $product->is_in_stock() ? 'd-flex align-items-center justify-content-center' : 'h-display-none',
						        esc_attr( $product->get_type() ),
						        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>',
						        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>',
						        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>'
						    ),
						$product );

	                    }?>
	                    
	                     
                    </div><!--/.port-dbox-->
                </div><!--/.port-inner-->                
                
            </div><!--.port-item-->
           
           <?php endwhile;  ?>
			
				   <!--pagination--> 
                   <?php  
				   if  ($settings['page_show'] == 'yes' && $settings['sort_cat']  != 'yes' ) {  ?>
				   <div class="pagi-box clearfix
                   <?php
							$destudio_taxonomy = 'product_cat';
							$destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
							if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) :
								foreach ( $destudio_terms as $destudio_term ) { ?>
										<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)); ?>
									<?php } 
							endif;?>">
						<?php avo_pagination($destudio_work->max_num_pages);  ?>
					</div>
					   
				   <?php };
				   
			else: ?>
            
            <div class="alert alert-warning"><?php _e('There is no Product Post Found. You need to  choose the product category to show or create at least 1 product post first.','avo-plg'); ?></div>
            <?php endif;  wp_reset_postdata();  ?>
                          
                            
        </div><!--/.product-body-->
    </div>