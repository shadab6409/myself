<?php $basic_gallery_list = (array) vc_param_group_parse_atts( $basic_gallery_list ); ?>
<div class="avo_basic_gallery">
    <div id="gallery" class="gallery">
        <?php foreach ( $basic_gallery_list as $key => $item ) : ?>

            <?php 
                // Image
                if(!empty($item['image'])){
                    $imgSrcset = '';
                    $imgSizes = '';
                    if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
                        $imgSrc = $item['image'];
                    }else{
                        
                            $img = wp_get_attachment_image_src($item['image'], "full");
                            $imgSrcset = wp_get_attachment_image_srcset($item['image']);
                            $imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
                        
                        $imgSrc = $img[0];
                    }
                }
            ?>

            <figure class="gallery-item">
                <div class="gallery-icon portrait">
                    <a href="<?php echo esc_url( $imgSrc ) ?>">
                        <img style="width:<?php echo $item['img_width']; ?>; height:<?php echo $item['img_height']; ?>" src="<?php echo esc_url( $imgSrc ) ?>" alt="img">
                    </a>
                </div>
            </figure>
        <?php endforeach ?>
    </div>
</div>