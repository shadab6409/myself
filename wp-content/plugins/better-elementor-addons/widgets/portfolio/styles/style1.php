<div class="better-portfolio style-1">
    <div class="row">
<?php 
    $count = 0;
foreach ( $settings['portfolio_one'] as $index => $item ) :
    $count++
    ?>

    <div class="col-lg-3 col-md-6 item <?php if ($count==1){echo'current';}  ?> " data-tab="<?php echo'tab-'.$count; ?>">
        <div class="info">
            <h6 class="custom-font"><?php echo  $item['subtitle']; ?></h6>
            <h5><?php echo  $item['title']; ?></h5>
        </div>
        <div class="more">
            <a href="<?php echo esc_url( $item['link']['url']); ?>"><?php echo  $item['linktext']; ?><i class="fas fa-chevron-right"></i></a>
        </div>
    </div>

<?php endforeach; ?>
    </div>
<div class="glry-img">
<?php
$count = 0;
    foreach ( $settings['portfolio_one'] as $index => $item ) :  
    $count++
    ?>
    
        <div id="<?php echo'tab-'.$count; ?>" class="better-bg-img tab-img <?php if ($count==1){echo'current';}  ?>" data-background="<?php echo esc_url ( $item['image']['url']); ?>" data-overlay-dark="2" style="background-image:url(<?php echo esc_url ( $item['image']['url']); ?>);"></div>
    
<?php endforeach; ?>
</div>

</div> 