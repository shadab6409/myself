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

<div class="post-list style-3 <?php echo 'mode-'.$settings['avo_mode'];?>">  

<?php $count = 0;
      while ($query->have_posts()): $query->the_post(); 
        $count++;?>     


                <div class="<?php if  ($settings['blog_column'] == 'one') {echo "col-md-12"; } else if  ($settings['blog_column'] == 'two') {echo "col-md-6"; }
                            if  ($settings['blog_column'] == 'three') {echo "col-md-4"; } if  ($settings['blog_column'] == 'four') {echo "col-md-3"; } ?> wow fadeInUp" data-wow-delay=".6s">


                        <div class="item list wow fadeInUp" data-wow-delay=".8s">
                            <div class="img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="cont">
                                <div class="date custom-font">
                                    <span><i><?php echo get_the_date( 'd' ); ?></i> <?php echo get_the_date( 'F' ); ?></span>
                                </div>
                                <div class="info custom-font">
                               <?php
                                    echo '<a href="'; echo get_author_posts_url( get_the_author_meta( 'ID' ) );
                                    echo '" class="author ' . '"><span>'.esc_html__( 'by / ', 'avo_plg' ) .get_the_author_meta( 'nickname' ). '</span></a>';
                                ?>
                                <?php
                                    $post_tags = get_the_tags();
                                    if ($post_tags) {
                                      foreach($post_tags as $tag) {
                                        echo '<a href="'; echo bloginfo('url');
                                        echo '/tag/' . $tag->slug . '" class="tag ' . $tag->slug . '">' . $tag->name . '</a>';
                                      }
                                    }
                                    
                                ?>
                                </div>
                                <h6>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h6>
                                <div class="btn-more custom-font">
                                    <a href="<?php the_permalink(); ?>" class="simple-btn"><?php echo esc_attr ($settings['button']); ?></a>
                                </div>
                            </div>
                        </div>

                </div>
                        

<?php 
endwhile; wp_reset_postdata();
?>
</div>