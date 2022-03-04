	<?php // get the custom post type's destudio_taxonomy terms
	global $post ;
	$custom_taxterms = wp_get_object_terms( $post->ID, 'portfolio_category', array('fields' => 'ids') );
	// arguments
	$args = array(
		'post_type' => 'portfolio',
		'post_status' => 'publish',
		'posts_per_page' => 4, 
		'orderby' => 'rand',
		'tax_query' => array(
		array(
			'taxonomy' => 'portfolio_category',
			'field' => 'id',
			'terms' => $custom_taxterms
			)
		),
		'post__not_in' => array ($post->ID),
	);
	$related_items = new WP_Query( $args );
	// loop over query
	if ($related_items->have_posts()) : $i =1; ?>
		<div class="content gray-bg">   
			<div class="container">
				<div class="other-portfolio clearfix pt-25">
					<p class="op-sub"><?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_other_port_sub' ) !=''){ echo  esc_html ( avo_option( 'avo_other_port_sub' )); } else {esc_html_e('See our other portfolio','avo');} ?>
					</p>
					<h3 class="op-title"><?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_other_port_title' ) !=''){ echo esc_html ( avo_option( 'avo_other_port_title' )); } else {esc_html_e('Other portfolio','avo');} ?>
					</h3>
					<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
			  
						<div class="col-md-3 port-item pb-30">
				  
							<div class="port-inner">
								<a href="<?php the_permalink(); ?>" class="port-link"></a>
								<div class="port-box"></div>
								<div class="port-img width-img img-bg" data-background="<?php echo get_the_post_thumbnail_url(); ?>"></div>
								<div class="port-dbox">
									<div class="dbox-relative">
										<h3><?php the_title(); ?></h3>
										<?php $destudio_taxonomy = 'portfolio_category'; $args = array('number' => '1',); 
										$destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy,$args);  ?> 
										<p><?php $destudio_cats = array();  foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;   } 
										echo implode(', ', $destudio_cats);?></p>
									</div><!--/.dbox-relative-->
								</div><!--/.port-dbox-->
							</div><!--/.port-inner-->
						</div><!--.port-item-->
					<?php endwhile; ?>
				</div><!--/.other-portfolio-->  
			</div><!--/container-fluid-->
		</div>
	<?php endif; wp_reset_postdata(); ?> 