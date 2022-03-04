    
<?php
        if ($settings['paged_on']  != 'yes') {
            $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        } else {
            $avo_paged = '';
        }
        if ( $settings['sort_cat']  == 'yes' ) {
            $query = new \WP_Query(array(
                'posts_per_page'   => $settings['blog_post'],
                'paged' => $avo_paged,
                'post_type' => 'post',
                'cat'=> $settings['blog_cat']
                    
            )); 
        } else { 
            $query = new \WP_Query(array(
                'posts_per_page'   => $settings['blog_post'],
                'paged' => $avo_paged,
                'post_type' => 'post'
            ));     
            
        }
        $this->add_render_attribute( 'icon-align', 'class', 'content-btn-align-icon-' . $settings['icon_align'] );
        $this->add_render_attribute( 'icon-align', 'class', 'content-btn-button-icon' );
        
?>

    <div class="post-list style-4 blog-post-list row clearfix blog-body blog-list">
        <?php $count = 0;
        while ($query->have_posts()): $query->the_post(); ?> 
        <div class="<?php if  ($settings['blog_column'] == 'one') {echo "col-md-12"; } else if  ($settings['blog_column'] == 'two') {echo "col-md-6"; }
        if  ($settings['blog_column'] == 'three') {echo "col-md-4"; } if  ($settings['blog_column'] == 'four') {echo "col-md-3"; } ?>">
            <div class="blog-col-inner">
                <?php if  ($settings['image'] == 'yes' && $count % 2 == 0 ) { 


                    ?>

                <div class="col-lg-6 no-padding"> 
                    <div class="blog-link-img">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail(); 
                            } else { ?>
                            <img alt="blog-image" src="<?php echo AVO_URL ?>images/no-image.jpg" />
                        <?php } ?>
                            <div class="date-post">
                                <?php echo get_the_date(); ?>
                            </div>
                                
                    </div>
                </div>
                <?php } ?>
                
                <div class="col-lg-6 no-padding order2">
                    <div class="excerpt-box <?php if($count % 2 != 0 ) {echo "txt-lft";}?>">

                        <?php if  ($settings['cat_show'] == 'yes') { ?>
                        <ul class="post-meta tags">
                            <li><i class="<?php echo esc_attr( $settings['tag_icon'] ); ?>"></i> <?php the_tags('', ', ');?></li>
                        </ul>
                        <?php } ?>

                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        
                        
                        <?php if  ($settings['show_excerpt'] == 'yes') { ?>
                        <p>
                            <?php $excerpt = get_the_excerpt();
                            $excerpt = substr( $excerpt , 0,$settings['excerpt']); 
                            echo $excerpt;echo esc_attr ($settings['excerpt_after'])?>
                        </p>
                        <?php } ?>

                        <?php if  ($settings['meta_show'] == 'yes') { ?>
                        <ul class="post-meta post-meta-bootom ">
                            <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                            <li><i class="fa fa-clone"></i> <?php the_category(' | ');?></li>
                            <li><i class="fa fa-comments-o"></i> <?php echo comments_number();  ?></li>

                            <?php if  ($settings['meta_button_show'] == 'yes') { ?>
                            <li><i class="<?php echo esc_attr( $settings['icon'] ); ?>"></i> 
                                    <a  href="<?php the_permalink(); ?>"><?php echo esc_attr ($settings['button']); ?>
                                    </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        
                        <?php if  ($settings['show_excerpt'] == 'yes' && $settings['button_show'] != 'yes') { ?>
                        
                        <?php } ?>
                        
                        <?php if  ($settings['button_show'] == 'yes') { ?>
                            <div class="spc-20 clearboth"></div>
                            <a class="content-btn" href="<?php the_permalink(); ?>">
                            
                            <?php if ( ! empty( $settings['icon'] ) ) : ?>
                            <span <?php echo $this->get_render_attribute_string( 'icon-align' ); ?>>
                                <i class="<?php echo esc_attr( $settings['icon'] ); ?>" aria-hidden="true"></i>
                            </span>
                            <?php endif; ?>
                            
                            <?php echo esc_attr ($settings['button']); ?>
                            </a>
                        <?php  } ?>
                    </div>
                </div>

                <?php if  ($settings['image'] == 'yes' && $count % 2 != 0 ) { ?>

                <div class="col-lg-6 no-padding"> 
                    <div class="blog-link-img">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail(); 
                            } else { ?>
                            <img alt="blog-image" src="<?php echo AVO_URL ?>images/no-image.jpg" />
                        <?php } ?>
                            <div class="date-post-rtl">
                                <?php echo get_the_date(); ?>
                            </div>
                               
                    </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
        
        <?php $count++; if( $settings['blog_column'] != 'one' && $count==1 ) { $count=2;}
        if( $settings['blog_column'] != 'one' && $count==4 ) { $count=5;}
         endwhile; wp_reset_postdata();?>
   </div>
                      <!--pagination--> 
   <?php  if ($settings['paged_on']  != 'yes') {
       if  ($settings['page_show'] == 'yes') { 
            avo_pagination($query->max_num_pages); 
       } 
   }