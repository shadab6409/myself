<?php

// vc_add_param( "vc_row", "css" );
vc_add_params('vc_row', array(
    array(
        'type' => 'textfield',
        'holder' => 'em',
        'group' => __( 'Advanced', 'avo_plg' ),
        'heading' => __( 'Container max width (px)', 'avo_plg' ),
        'param_name' => 'container_max_width',
    ),

));