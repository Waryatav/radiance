<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<div class="product-slider-top">
    <?php foreach ($atts['slider'] as $slide): ?>
        <div class="item"><img src="<?= $slide['url'];?>" alt=""></div>
    <?php endforeach; ?>
</div>
