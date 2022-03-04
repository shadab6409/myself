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
?>

<div class="post-list style-1 <?php echo 'mode-'.$settings['avo_mode']; echo $avo_rtl;?>"> 

<?php $count = 0;
      while ($query->have_posts()): $query->the_post(); ?>     
                       


                        
                            <div class="item-box">
                                <div class="item">
                                    <div class="bimg">
                                        <div class="img bg-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                                    </div>
                                    <div class="cont valign">
                                        <div class="full-width">
                                            <div class="info custom-font">
                                               <?php
                                                    echo '<a href="'; echo get_author_posts_url( get_the_author_meta( 'ID' ) );
                                                    echo '" class="author ' . '"><span>'.esc_html__( 'By / ', 'avo_plg' ) .get_the_author_meta( 'nickname' ). '</span></a>';
                                                ?>
                                                <div class="date">
                                                    <span><i><?php echo get_the_date( 'd' ); ?></i> <?php echo get_the_date( 'M' ); ?></span> 
                                                    
                                                </div>
                                            </div>
                                            <h6 class="custom-font">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h6>
                                            <?php if  ($settings['button_show'] == 'yes') { ?>
                                            <div class="btn-more custom-font">
                                                <a href="<?php the_permalink(); ?>" class="simple-btn"><?php echo esc_attr ($settings['button']); ?></a>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        



<?php 
endwhile; wp_reset_postdata();
?>
</div>