        <div class="products">
            <div class="item">
                <div class="product-img">
                    <img src="<?php echo esc_url ($settings['image']['url']); ?>" alt="">
                </div>
                <div class="info">
                    <div>
                        <h6><?php echo $settings['title']; ?></h6>
                        <span><?php echo $settings['description']; ?></span>
                        <div class="links">
		                 	     <?php foreach ( $settings['featured_icon'] as $index => $item ) : 
		                        $link_key = 'link_' . $index;
		                        $this->add_render_attribute( $link_key, 'href',esc_url ($item['link']['url']) );

		                        if ( $item['link']['is_external'] ) {
		                            $this->add_render_attribute( $link_key, 'target', '_blank' );
		                        }

		                        if ( $item['link']['nofollow'] ) {
		                            $this->add_render_attribute( $link_key, 'rel', 'nofollow' );
		                        }
		                        ?>
		                    <a href='<?php echo $item['link']['url'] ?>' class="icon">
		                        <i class="<?php echo esc_attr ( $item['icon']); ?>"></i> 
		                        <div class="icon-text"><?php echo $item['mention']; ?></div>
		                    </a>
		                    <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>