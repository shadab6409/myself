<?php if ($client_style == 'style-1') : ?>
    <?php 
        // Image
        if(!empty($image)){
            $imgSrcset = '';
            $imgSizes = '';
            if(is_string($image)&&substr( $image, 0, 4 ) === "http"){
                $imgSrc = $image;
            }else{
                
                    $img = wp_get_attachment_image_src($image, "full");
                    $imgSrcset = wp_get_attachment_image_srcset($image);
                    $imgSizes = wp_get_attachment_image_sizes($image, "full");
                
                $imgSrc = $img[0];
            }
        }
        // Image
        if(!empty($image2)){
            $imgSrcset2 = '';
            $imgSizes2 = '';
            if(is_string($image2)&&substr( $image2, 0, 4 ) === "http"){
                $imgSrc2 = $image2;
            }else{
                
                    $img2 = wp_get_attachment_image_src($image2, "full");
                    $imgSrcset2 = wp_get_attachment_image_srcset($image2);
                    $imgSizes2 = wp_get_attachment_image_sizes($image2, "full");
                
                $imgSrc2 = $img2[0];
            }
        }
    ?>
<div class="client style-1">
    <div class="brands">
        <div class="item wow fadeIn" data-wow-delay=".8s">
            <div class="img">
                <img class="img1" src="<?php echo esc_url ( $imgSrc2 ); ?>" alt="">
                <img class="img2" src="<?php echo esc_url ( $imgSrc ); ?>" alt="">
                <a href="<?php echo esc_url( $link ); ?>" class="link" data-splitting><?php echo wp_kses_post ( $text ); ?></a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ($client_style == 'style-2') : ?>

<?php endif; ?>