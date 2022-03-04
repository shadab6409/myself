<?php
/**
 * Metabox Map
 *
 * @package Avo
 */
?>
<?php
function avo_meta_box_text($avo_id, $avo_label, $avo_desc = '', $avo_short_desc = '')
{
	global $post;

	$html = '';
		$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
		$html .= '<div class="left-part">';
			$html .= $avo_label;
			if($avo_desc) {
				$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
			}
		$html .='</div>';
		$html .= '<div class="right-part">';
			$html .= '<input type="text" id="' . esc_attr($avo_id) . '" name="' . esc_attr($avo_id) . '" value="' . get_post_meta($post->ID, $avo_id, true) . '" />';
			if($avo_short_desc) {
				$html .= '<span class="short-description">' . esc_attr($avo_short_desc) . '</span>';
			}
		$html .= '</div>';
		$html .= '</div>';
	echo sprintf("%s",$html);
}

function avo_meta_box_dropdown($avo_id, $avo_label, $avo_options, $avo_desc = '')
{
	global $post;
	

	$html = $avo_select_class = '';

			$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
					$html .= '<div class="left-part">';
							$html .= $avo_label;
							if($avo_desc) {
									$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
							}
					$html .='</div>';
					$html .= '<div class="right-part">';
							$html .= '<select id="' . esc_attr($avo_id) . '" class="'.$avo_select_class.'" name="' . esc_attr($avo_id) . '">';
							foreach($avo_options as $key => $option) {
									if(get_post_meta($post->ID, $avo_id, true) == (string)$key && get_post_meta($post->ID, $avo_id, true) != '') {
											$avo_selected = 'selected="selected"';
									}else {
													$avo_selected = '';
									}

									$html .= '<option ' . $avo_selected . ' value="' . esc_attr($key) . '">' . esc_attr($option) . '</option>';

							}
							$html .= '</select>';
					$html .='</div>';	
		$html .= '</div>';
	echo sprintf("%s",$html);
}

function avo_meta_box_dropdown_sidebar($avo_id, $avo_label, $avo_options, $avo_desc = '', $avo_child_hidden = '')
{
	global $post;

	$html = $avo_select_class = '';
	$flag = false;
		$avo_child_hidden = ( $avo_child_hidden ) ? ' hide-child '.$avo_child_hidden : '';
		$html .= '<div class="'.esc_attr($avo_id).'_box description_box'.$avo_child_hidden.'">';
			$html .= '<div class="left-part">';
				$html .= $avo_label;
				if($avo_desc) {
					$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
				}
			$html .='</div>';
			$html .= '<div class="right-part">';
				$html .= '<select id="' . esc_attr($avo_id) . '" class="'.esc_attr($avo_select_class).'" name="' . esc_attr($avo_id) . '">';
				foreach($avo_options as $key => $option) {
					if(get_post_meta($post->ID, $avo_id, true) == $key && get_post_meta($post->ID, $avo_id, true) != '') {
						$avo_selected = 'selected="selected"';
					}else {
							$avo_selected = '';
					}

					$html .= '<option ' . $avo_selected . ' value="' . esc_attr($key) . '">' . esc_attr($option) . '</option>';

				}
				$html .= '</select>';
			$html .='</div>';	
		$html .= '</div>';
	echo sprintf("%s",$html);
}

/* menu dropdown */

function avo_meta_box_dropdown_menu($avo_id, $avo_label, $avo_options, $avo_desc = '')
{
	global $post;

	$html = $avo_select_class = '';
	$flag = false;

	
		$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
			$html .= '<div class="left-part">';
				$html .= $avo_label;
				if($avo_desc) {
					$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
				}
			$html .='</div>';
			$html .= '<div class="right-part">';
				$html .= '<select id="' . esc_attr($avo_id) . '" class="'.esc_attr($avo_select_class).'" name="' . esc_attr($avo_id) . '">';
				$html .= '<option value="">Default</option>';
				$avo_menus = wp_get_nav_menus();
				$avo_menu_array = array();
				foreach ($avo_menus as $key => $value) {
					if(get_post_meta($post->ID, $avo_id, true) == $value->slug && get_post_meta($post->ID, $avo_id, true) != '') {
						$avo_selected = 'selected="selected"';
					}else {
							$avo_selected = ''; 
					}

					$html .= '<option ' . $avo_selected . ' value="' . esc_attr($value->slug) . '">' . esc_attr($value->name) . '</option>';
				}
				$html .= '</select>';
			$html .='</div>';	
		$html .= '</div>';
	echo sprintf("%s",$html);
}

function avo_meta_box_dropdown_custom_headers($avo_id, $avo_label, $avo_options, $avo_desc = '')
{
	global $post;

	$html = $avo_select_class = '';
	$flag = false;

	
		$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
			$html .= '<div class="left-part">';
				$html .= $avo_label;
				if($avo_desc) {
					$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
				}
			$html .='</div>';
			$html .= '<div class="right-part">';
				$html .= '<select id="' . esc_attr($avo_id) . '" class="'.esc_attr($avo_select_class).'" name="' . esc_attr($avo_id) . '">';
				$html .= '<option value="">Default</option>';
				$avo_custom_headers = new WP_Query( array( 'post_type' => 'header' ) );
				$posts = $avo_custom_headers->posts; 
				foreach ($posts as $key => $value) {
					if(get_post_meta($post->ID, $avo_id, true) == $value->ID && get_post_meta($post->ID, $avo_id, true) != '') {
						$avo_selected = 'selected="selected"';
					}else {
							$avo_selected = '';
					}

					$html .= '<option ' . $avo_selected . ' value="' . esc_attr($value->ID) . '">' . esc_attr($value->post_name) . '</option>';
				}
				$html .= '</select>';
			$html .='</div>';	
		$html .= '</div>';
	echo sprintf("%s",$html);
}

function avo_meta_box_dropdown_custom_footers($avo_id, $avo_label, $avo_options, $avo_desc = '')
{
	global $post;

	$html = $avo_select_class = '';
	$flag = false;

	
		$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
			$html .= '<div class="left-part">';
				$html .= $avo_label;
				if($avo_desc) {
					$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
				}
			$html .='</div>';
			$html .= '<div class="right-part">';
				$html .= '<select id="' . esc_attr($avo_id) . '" class="'.esc_attr($avo_select_class).'" name="' . esc_attr($avo_id) . '">';
				$html .= '<option value="">Default</option>';
				$avo_custom_footers = new WP_Query( array( 'post_type' => 'footer' ) );
				$posts = $avo_custom_footers->posts; 
				foreach ($posts as $key => $value) {
					if(get_post_meta($post->ID, $avo_id, true) == $value->ID && get_post_meta($post->ID, $avo_id, true) != '') {
						$avo_selected = 'selected="selected"'; 
					}else {
							$avo_selected = '';
					}

					$html .= '<option ' . $avo_selected . ' value="' . esc_attr($value->ID) . '">' . esc_attr($value->post_name) . '</option>';
				}
				$html .= '</select>';
			$html .='</div>';	
		$html .= '</div>';
	echo sprintf("%s",$html);
}
function avo_meta_box_dropdown_custom_sidepanels($avo_id, $avo_label, $avo_options, $avo_desc = '')
{
	global $post;

	$html = $avo_select_class = '';
	$flag = false;

	
		$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
			$html .= '<div class="left-part">';
				$html .= $avo_label;
				if($avo_desc) {
					$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
				}
			$html .='</div>';
			$html .= '<div class="right-part">';
				$html .= '<select id="' . esc_attr($avo_id) . '" class="'.esc_attr($avo_select_class).'" name="' . esc_attr($avo_id) . '">';
				$html .= '<option value="">Default</option>';
				$avo_custom_sidepanels = new WP_Query( array( 'post_type' => 'sidepanel' ) );
				$posts = $avo_custom_sidepanels->posts; 
				foreach ($posts as $key => $value) {
					if(get_post_meta($post->ID, $avo_id, true) == $value->ID && get_post_meta($post->ID, $avo_id, true) != '') {
						$avo_selected_sidepanel = 'selected="selected"'; 
					}else {
							$avo_selected_sidepanel = '';
					}

					$html .= '<option ' . $avo_selected_sidepanel . ' value="' . esc_attr($value->ID) . '">' . esc_attr($value->post_name) . '</option>';
				}
				$html .= '</select>';
			$html .='</div>';	
		$html .= '</div>';
	echo sprintf("%s",$html);
}

function avo_meta_box_textarea($avo_id, $avo_label, $avo_desc = '', $avo_default = '' )
{
	global $post;
	$html = '';
	$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
	$html .= '<div class="left-part">';
		$html .= $avo_label;
		if($avo_desc) {
			$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
		}
	$html .='</div>';
	
	if( get_post_meta($post->ID, $avo_id, true)) {
		$avo_value = get_post_meta($post->ID, $avo_id, true);
	} else {
		$avo_value = '';
	}
	$html .= '<div class="right-part">';
		$html .= '<textarea cols="120" id="' . esc_attr($avo_id) . '" name="' . esc_attr($avo_id) . '">' . esc_attr($avo_value) . '</textarea>';
	$html .='</div>';
	$html .= '</div>';

	echo sprintf("%s",$html);
}

function avo_meta_box_upload($avo_id, $avo_label, $avo_desc = '')
{
	global $post;

	$html = '';
	$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
	$html .= '<div class="left-part">';
		$html .= $avo_label;
		if($avo_desc) {
			$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
		}
	$html .='</div>';
	$html .= '<div class="right-part">';
		$html .= '<input name="' . esc_attr($avo_id) . '" class="upload_field" id="avo_upload" type="text" value="' . get_post_meta($post->ID,  $avo_id, true) . '" />';
		$html .= '<input name="'. $avo_id.'_thumb" class="'. $avo_id.'_thumb" id="'. $avo_id.'_thumb" type="hidden" value="'.get_post_meta($post->ID,  $avo_id, true).'" />';
				$html .= '<img class="upload_image_screenshort" src="'.get_post_meta($post->ID,  $avo_id, true).'" />';
		$html .= '<input class="avo_upload_button" id="avo_upload_button" type="button" value="'.__( 'Browse', 'avo_plg' ).'" />';
		$html .= '<span class="avo_remove_button button">'.__( 'Remove', 'avo_plg' ).'</span>';
				
	$html .='</div>';
	$html .= '</div>';
	echo sprintf("%s",$html);
}

function avo_meta_box_upload_multiple($avo_id, $avo_label, $avo_desc = '')
{
	global $post;

	$html = '';
	$html .= '<div class="'.esc_attr($avo_id).'_box description_box">';
		$html .= '<div class="left-part">';
			$html .= $avo_label;
			if($avo_desc) {
				$html .= '<span class="description">' . esc_attr($avo_desc) . '</span>';
			}
		$html .='</div>';
		$html .= '<div class="right-part">';
		
			$html .= '<input name="' . esc_attr($avo_id) . '" class="upload_field" id="avo_upload" type="hidden" value="'.get_post_meta($post->ID,  $avo_id, true).'" />';
			$html .= '<div class="multiple_images">';
			$avo_val = explode(",",get_post_meta($post->ID,  $avo_id, true));
			
			foreach ($avo_val as $key => $value) {
				if(!empty($value)):
					$avo_image_url = wp_get_attachment_url( $value );
					$html .='<div id='.esc_attr($value).'>';
						$html .= '<img class="upload_image_screenshort_multiple" src="'.$avo_image_url.'" style="width:100px;" />';
						$html .= '<a href="javascript:void(0)" class="remove">'.__( 'Remove', 'avo_plg' ).'</a>';
					$html .= '</div>';
				endif;
			}
			$html .= '</div>';
			$html .= '<input class="avo_upload_button_multiple" id="avo_upload_button_multiple" type="button" value="Browse" />'.__( ' Select Files', 'avo_plg' );
					
		$html .='</div>';
	$html .= '</div>';
	echo sprintf( "%s", $html );
}

	if ( ! function_exists( 'avo_meta_box_colorpicker' ) ) {
		function avo_meta_box_colorpicker( $id, $label, $desc = '', $avo_dependency = '' ) {
			global $post;
	        
			$dependency_attr = '';
			$dependency_arr = array();

			if( !empty($avo_dependency) ){
				$val = array();
				$dependency_arr[] = 'data-element="'.$avo_dependency['element'].'"';
				foreach ($avo_dependency['value'] as $key => $value) {
					$val[] = $value; 
				}
				$dep_list = implode(",", $val);
				$dependency_arr[] = 'data-value="'.$dep_list.'"';
				$dependency_attr = implode(" ", $dependency_arr);
			}

			$html = '';
			$html .= '<div class="'.$id.'_box description_box"'.$dependency_attr.'>';
				$html .= '<div class="left-part">';
					$html .= $label;
					if($desc) {
						$html .= '<span class="description">' . $desc . '</span>';
					}
				$html .='</div>';
				$html .= '<div class="right-part">';
					$html .= '<input type="text" class="avo-color-picker" id="' . $id . '" name="' . $id . '" value="' . get_post_meta($post->ID, $id, true) . '" />';
				$html .='</div>';
			$html .='</div>';
			echo $html;
		}
	}