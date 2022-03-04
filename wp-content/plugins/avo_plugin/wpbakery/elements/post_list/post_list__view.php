<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>

	<?php if(! empty ($icon_indent) ){ ?>
		#avo-post-list-<?php echo $myuid; ?> .content-btn .content-btn-align-icon-right {margin-left: <?php echo $icon_indent ?>px;}
        #avo-post-list-<?php echo $myuid; ?> .content-btn .content-btn-align-icon-left {margin-right: <?php echo $icon_indent ?>px;}
	<?php } ?>

</style>

<?php if ($post_list_style == 'style-1') : ?>

<?php 

if ($paged_on  != 'yes') {
    $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
} else {
    $avo_paged = '';
}
if ( $sort_cat  == 'yes' ) {
    $query = new \WP_Query(array(
        'posts_per_page'   => $blog_post,
        'paged' => $avo_paged,
        'post_type' => 'post',
        'cat'=> $blog_cat
            
    )); 
} else { 
    $query = new \WP_Query(array(
        'posts_per_page'   => $blog_post,
        'paged' => $avo_paged,
        'post_type' => 'post'
    ));     
    
}
?>

<div class="post-list style-1 <?php echo 'mode-'.$avo_mode; echo $avo_rtl;?>"> 

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
                    <?php if  ($button_show == 'yes') { ?>
                    <div class="btn-more custom-font">
                        <a href="<?php the_permalink(); ?>" class="simple-btn"><?php echo esc_attr ($button); ?></a>
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

<?php endif; ?>

<?php if ($post_list_style == 'style-2') : ?>

<?php
if ($paged_on  != 'yes') {
    $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
} else {
    $avo_paged = '';
}
if ( $sort_cat  == 'yes' ) {
    $query = new \WP_Query(array(
        'posts_per_page'   => $blog_post,
        'paged' => $avo_paged,
        'post_type' => 'post',
        'cat'=> $blog_cat
            
    )); 
} else { 
    $query = new \WP_Query(array(
        'posts_per_page'   => $blog_post,
        'paged' => $avo_paged,
        'post_type' => 'post'
    ));     
    
}
?>

<div class="post-list style-2 <?php echo 'mode-'.$avo_mode;?>">  

<?php $count = 0;
while ($query->have_posts()): $query->the_post(); 
$count++;?>     
    <div class="<?php if  ($blog_column == 'one') {echo "col-md-12"; } else if  ($blog_column == 'two') {echo "col-md-6"; }
                if  ($blog_column == 'three') {echo "col-md-4"; } if  ($blog_column == 'four') {echo "col-md-3"; } ?> wow fadeInUp" data-wow-delay=".6s">
        <div class="item <?php if($count==2){ echo esc_attr('active');}?> bg-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
            <div class="cont">
                <div class="date custom-font">
                    <span><i><?php echo get_the_date( 'd' ); ?></i> <?php echo get_the_date( 'M Y' ); ?></span>
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
                    <a href="<?php the_permalink(); ?>" class="simple-btn"><?php echo esc_attr ($button); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php 
endwhile; wp_reset_postdata();
?>
</div>

<?php endif; ?>

<?php if ($post_list_style == 'style-3') : ?>
    <?php 

if ($paged_on  != 'yes') {
    $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
} else {
    $avo_paged = '';
}
if ( $sort_cat  == 'yes' ) {
    $query = new \WP_Query(array(
        'posts_per_page'   => $blog_post,
        'paged' => $avo_paged,
        'post_type' => 'post',
        'cat'=> $blog_cat
            
    )); 
} else { 
    $query = new \WP_Query(array(
        'posts_per_page'   => $blog_post,
        'paged' => $avo_paged,
        'post_type' => 'post'
    ));     
    
}
?>

<div class="post-list style-3 <?php echo 'mode-'.$avo_mode;?>">  

<?php $count = 0;
while ($query->have_posts()): $query->the_post(); 
$count++;?>     
    <div class="<?php if  ($blog_column == 'one') {echo "col-md-12"; } else if  ($blog_column == 'two') {echo "col-md-6"; }
                if  ($blog_column == 'three') {echo "col-md-4"; } if  ($blog_column == 'four') {echo "col-md-3"; } ?> wow fadeInUp" data-wow-delay=".6s">
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
                        <a href="<?php the_permalink(); ?>" class="simple-btn"><?php echo esc_attr ($button); ?></a>
                    </div>
                </div>
            </div>
    </div>
<?php 
endwhile; wp_reset_postdata();
?>
</div>
<?php endif; ?>

<?php if ($post_list_style == 'style-4') : ?>
    <?php
    if ($paged_on != 'yes') {
        $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    } else {
        $avo_paged = '';
    }
    if ( $sort_cat  == 'yes' ) {
        $query = new \WP_Query(array(
            'posts_per_page'   => $blog_post,
            'paged' => $avo_paged,
            'post_type' => 'post',
            'cat'=> $blog_cat
                
        )); 
    } else { 
        $query = new \WP_Query(array(
            'posts_per_page'   => $blog_post,
            'paged' => $avo_paged,
            'post_type' => 'post'
        ));     
        
    }
        
?>

<div class="post-list style-4 blog-post-list row clearfix blog-body blog-list">
    <?php $count = 0;
    while ($query->have_posts()): $query->the_post(); ?> 
    <div class="<?php if  ($blog_column == 'one') {echo "col-md-12"; } else if  ($blog_column == 'two') {echo "col-md-6"; }
    if  ($blog_column == 'three') {echo "col-md-4"; } if  ($blog_column == 'four') {echo "col-md-3"; } ?>">
        <div class="blog-col-inner">
            <?php if  ($image == 'yes' && $count % 2 == 0 ) { 


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

                    <?php if  ($cat_show == 'yes') { ?>
                    <ul class="post-meta tags">
                        <li><i class="<?php echo esc_attr( $tag_icon ); ?>"></i> <?php the_tags('', ', ');?></li>
                    </ul>
                    <?php } ?>

                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    
                    
                    <?php if  ($show_excerpt == 'yes') { ?>
                    <p>
                        <?php $excerpt = get_the_excerpt();
                        $excerpt = substr( $excerpt , 0,$avo_excerpt); 
                        echo $excerpt;echo esc_attr ($excerpt_after)?>
                    </p>
                    <?php } ?>

                    <?php if  ($meta_show == 'yes') { ?>
                    <ul class="post-meta post-meta-bootom ">
                        <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                        <li><i class="fa fa-clone"></i> <?php the_category(' | ');?></li>
                        <li><i class="fa fa-comments-o"></i> <?php echo comments_number();  ?></li>

                        <?php if  ($meta_button_show == 'yes') { ?>
                        <li><i class="<?php echo esc_attr( $icon ); ?>"></i> 
                                <a  href="<?php the_permalink(); ?>"><?php echo esc_attr ($button); ?>
                                </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    
                    <?php if  ($show_excerpt == 'yes' && $button_show != 'yes') { ?>
                    
                    <?php } ?>
                    
                    <?php if  ($button_show == 'yes') { ?>
                        <div class="spc-20 clearboth"></div>
                        <a class="content-btn" href="<?php the_permalink(); ?>">
                        
                        <?php if ( ! empty( $icon ) ) : ?>
                        <span class="content-btn-align-icon-<?php echo $icon_align ?> content-btn-button-icon">
                            <i class="<?php echo esc_attr( $icon ); ?>" aria-hidden="true"></i>
                        </span>
                        <?php endif; ?>
                        
                        <?php echo esc_attr ($button); ?>
                        </a>
                    <?php  } ?>
                </div>
            </div>

            <?php if  ($image == 'yes' && $count % 2 != 0 ) { ?>

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
    
    <?php $count++; if( $blog_column != 'one' && $count==1 ) { $count=2;}
    if( $blog_column != 'one' && $count==4 ) { $count=5;}
        endwhile; wp_reset_postdata();?>
</div>
<!--pagination--> 
<?php  if ($paged_on  != 'yes') {
    if  ($page_show == 'yes') { 
        avo_pagination($query->max_num_pages); 
    } 
}
endif; ?>