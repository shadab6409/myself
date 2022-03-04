        <div class="clearfix team-1">
            <div class="port-inner">
                <div class="port-box"></div>
                <div class="port-img width-img img-bg" style="background-image:url(<?php echo esc_url ($settings['image']['url']); ?>);"></div>
                <div class="img-mask"></div>
                <div class="port-dbox">
                    <div class="dbox-relative">
                        
                        <ul class="team-sicon">
                            <?php foreach ( $settings['team_icon'] as $index => $item ) : 
                            $link_key = 'link_' . $index;
                            $this->add_render_attribute( $link_key, 'href',esc_url ($item['link']['url']) );
    
                            if ( $item['link']['is_external'] ) {
                                $this->add_render_attribute( $link_key, 'target', '_blank' );
                            }
    
                            if ( $item['link']['nofollow'] ) {
                                $this->add_render_attribute( $link_key, 'rel', 'nofollow' );
                            }
                            ?>
                            <li>
                                <?php echo '<a ' . $this->get_render_attribute_string( $link_key ) . '>'; ?>
                                    <i class="<?php echo esc_attr ( $item['icon']); ?>"></i>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="team-info">
                <h5 <?php echo $this->get_render_attribute_string( 'title' ); ?>><?php echo $settings['title']; ?></h5>
                <p <?php echo $this->get_render_attribute_string( 'text' ); ?>><?php echo $settings['text']; ?></p>
            </div>
        </div>