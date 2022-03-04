		<div class="filter-tab">
	        <ul class="port-filter center-port-filter animated fadeInUp slow" data-animation="fadeInUp" data-delay="0.8s" >
	                            
				<?php

	            $destudio_terms = get_terms(array(
	            	'taxonomy' => 'portfolio_category',
	            	'hide_empty' => false,
	            	'include' => $settings['blog_cat'],
	            )); // Get all terms of a taxonomy 
	            if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : ?>
	            <li>
	                <a class="active" href="#" data-filter="*">
	                    <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_portfolio_all') ) { 
	                    echo esc_attr( avo_option( 'avo_portfolio_all'));} else { esc_html_e('Show All','avo_plg'); } ?>
	                </a>
	            </li>
	            <?php foreach ( $destudio_terms as $destudio_term ) { ?>
	                <li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>" href="#">
	                <?php echo esc_attr( $destudio_term->name); ?></a></li>
	            <?php } 
	            endif;?> 
	        </ul>
        </div>
		
        
   
   		<div class="portfolio-body clearfix standard-port <?php echo esc_attr("portfolio-3"); ?>">
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
            
            <div class="<?php if  ($settings['port_column'] == '3') {echo "col-md-4"; } else if  ($settings['port_column'] == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>
             port-item <?php $destudio_terms = get_the_terms( get_the_ID(), 'portfolio_category' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
            echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
            $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
            echo esc_attr( $destudio_class . " "); } ?><?php if  ($settings['port_style'] != '3') {echo "pb-30"; }?>" id="post-<?php the_ID(); ?>" >
               
                <div class="port-inner"> 

					<?php if  ($settings['port_masonry']  == 'yes' ) {  ?>
	                    <a class="port-link" href="<?php the_permalink(); ?>" ></a>
	                    <img alt="<?php the_title();?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
               		 <?php }else{ ?>

	                    <div class="port-box"></div> 
	                    <div class="port-img width-img img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
	                    <?php if  ($settings['port_style'] == '1') {?>
	                    <div class="port-img width-img img-bg hid" style="background-image:url(<?php echo esc_url(get_post_meta($post->ID,'avo_gallery_port_img', true)); ?>);"></div>
	                    <?php }?>
                    <?php }?>


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
                            <?php $destudio_taxonomy = 'portfolio_category'; 
                                $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  ?> 
                            <p><?php $destudio_cats = array();  foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;   } 
                            echo implode(' / ', $destudio_cats);?></p>
                        </div><!--/.dbox-relative-->
                        <?php if  ($settings['port_style'] == '2') {?>
	                     <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-img port-icon"> 
	                        <span class="icon">
<svg version="1.1" class="hover-svg-portfolio" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
		<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M22,22l-3-3"/>
		<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M10,7v6"/>
		<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M13,10H7"/>
		<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M16.419,16.309
			C14.786,17.97,12.514,19,10,19c-4.971,0-9-4.029-9-9s4.029-9,9-9s9,4.029,9,9c0,2.39-0.931,4.562-2.451,6.174"/>
		</svg>
</span>
	                    <?php }?>
	                     </a>
                    </div><!--/.port-dbox--> 
                </div><!--/.port-inner-->                
                
            </div><!--.port-item-->
           
           <?php endwhile;  ?>
			
				   <!--pagination--> 
                   <?php  
				   if  ($settings['page_show'] == 'yes' && $settings['sort_cat']  != 'yes' ) {  ?>
				   <div class="pagi-box clearfix
                   <?php
							$destudio_taxonomy = 'portfolio_category';
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
            
            <div class="alert alert-warning"><?php _e('There is no Portfolio Post Found. You need to  choose the portfolio category to show or create at least 1 portfolio post first.','avo-plg'); ?></div>
            <?php endif;  wp_reset_postdata();  ?>
                          
                            
        </div><!--/.portfolio-body-->