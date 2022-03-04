<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>

<style>
    <?php

    if(! empty ($boxes_container_width) ){ ?>
        #avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper {max-width: <?php echo $boxes_container_width ?>;}
    <?php }
    if(! empty ($boxes_background_color) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {background-color: <?php echo $boxes_background_color ?>;}
    <?php }
    if(! empty ($boxes_border_type) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-style: <?php echo $boxes_border_type ?>;}
    <?php }
    if(! empty ($boxes_border_width_top) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-top-width: <?php echo $boxes_border_width_top ?>;}
    <?php }
    if(! empty ($boxes_border_width_right) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-right-width: <?php echo $boxes_border_width_right ?>;}
    <?php }
    if(! empty ($boxes_border_width_bottom) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-bottom-width: <?php echo $boxes_border_width_bottom ?>;}
    <?php }
    if(! empty ($boxes_border_width_left) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-left-width: <?php echo $boxes_border_width_left ?>;}
    <?php }
    if(! empty ($boxes_border_color) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-color: <?php echo $boxes_border_color ?>;}
    <?php }
    if(! empty ($boxes_border_radius_top) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-top-left-radius: <?php echo $boxes_border_radius_top ?>;}
    <?php }
    if(! empty ($boxes_border_radius_right) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-top-right-radius: <?php echo $boxes_border_radius_right ?>;}
    <?php }
    if(! empty ($boxes_border_radius_bottom) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-bottom-right-radius: <?php echo $boxes_border_radius_bottom ?>;}
    <?php }
    if(! empty ($boxes_border_radius_left) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {border-bottom-left-radius: <?php echo $boxes_border_radius_left ?>;}
    <?php }
    if(! empty ($boxes_space_between) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item:not(:first-of-type) {margin-left: calc( <?php echo $boxes_space_between ?>/2 );}
        #avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item:not(:first-of-type) {margin-left: calc( <?php echo $boxes_space_between ?>/2 );}
	<?php }
    if(! empty ($boxes_padding_top) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {padding-top: <?php echo $boxes_padding_top ?>;}
    <?php }
    if(! empty ($boxes_padding_right) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {padding-right: <?php echo $boxes_padding_right ?>;}
    <?php }
    if(! empty ($boxes_padding_bottom) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {padding-bottom: <?php echo $boxes_padding_bottom ?>;}
    <?php }
    if(! empty ($boxes_padding_left) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item {padding-left: <?php echo $boxes_padding_left ?>;}
    <?php }
    if(! empty ($numbers_size) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item .avo-countdown-numbers {font-size: <?php echo $numbers_size ?>;}
    <?php }
    if(! empty ($numbers_weight) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item .avo-countdown-numbers {font-weight: <?php echo $numbers_weight ?>;}
    <?php }
    if(! empty ($numbers_color) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item .avo-countdown-numbers {color: <?php echo $numbers_color ?>;}
    <?php }
    if(! empty ($labels_size) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item .avo-countdown-label {font-size: <?php echo $labels_size ?>;}
    <?php }
    if(! empty ($labels_weight) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item .avo-countdown-label {font-weight: <?php echo $labels_weight ?>;}
    <?php }
    if(! empty ($labels_color) ){ ?>
		#avo-countdown-<?php echo $myuid; ?>.avo-countdown-wrapper .avo-countdown-item .avo-countdown-label {color: <?php echo $labels_color ?>;}
    <?php }
    ?>
</style>

<?php
$countdown_markup = [];
        
$countdown = [
    'days' => [
        'number' => '%D',
        'label' => $custom_labels_days ? $custom_labels_days : __('Days', 'avo_plg'),
        'visibility' => $days
    ],
    'hours' => [
        'number' => '%H',
        'label' => $custom_labels_hours ? $custom_labels_hours : __('Hours', 'avo_plg'),
        'visibility' => $hours
    ],
    'minutes' => [
        'number' => '%M',
        'label' => $custom_labels_minutes ? $custom_labels_minutes : __('Minutes', 'avo_plg'),
        'visibility' => $minutes
    ],
    'seconds' => [
        'number' => '%S',
        'label' => $custom_labels_seconds ? $custom_labels_seconds : __('Seconds', 'avo_plg'),
        'visibility' => $seconds
    ],
];

/**
 * View
 */
if ($view == 'block') {
    $countdown_numbers_class = 'avo-countdown-numbers d-block';
    $countdown_label_class = 'avo-countdown-label d-block';
} else {
    $countdown_numbers_class = 'avo-countdown-numbers d-inline-block';
    $countdown_label_class = 'avo-countdown-label d-inline-block';
}

foreach($countdown as $count) {
    if ($count['visibility'] == 'yes') {
        $countdown_markup[] = '<div class="avo-countdown-item"><span class="'. $countdown_numbers_class .'">'. $count['number'] .'</span>';
        $countdown_markup[] = $labels ? '<span class="'. $countdown_label_class .'">' . $count['label'] .'</span>' : '';
        $countdown_markup[] = '</div>';
    }
}
?>
<div id="avo-countdown-<?php echo $myuid; ?>" class="avo-countdown-wrapper"></div>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#avo-countdown-<?php echo $myuid; ?>').countdown('<?php echo $due_date ?>', function(event) {
            var $this = $(this).html(event.strftime('<?php echo implode('', $countdown_markup) ?>'));
        });
    });
</script>
