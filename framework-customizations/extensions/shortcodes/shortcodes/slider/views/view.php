<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

    <div class="slider-top">
        <?php foreach ( $atts['slider'] as $att ): ?>
            <div class="item">
                <div class="slide-item-big">
                    <img src="<?= $att['image-big']['url']; ?>" alt="slide">
                    <div class="slider-text-big">
                        <h4><?= $att['title']; ?></h4>
                        <p>
                            <?= $att['subtitle']; ?>
                        </p>
                        <p>
                            <?= $att['content']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="slick-slider">
        <?php
        $slides   = $atts['slider'];
        $slides[] = array_shift( $slides );
        foreach ( $slides as $slide ): ?>
            <div class="slide-item">
                <img src="<?= $slide['image-small']['url']; ?>" alt="">
                <div class="slider-text-big">
                    <h4><?= $slide['title']; ?></h4>
                    <p>
                        <?= $slide['subtitle']; ?>
                    </p>
                    <p>
                        <?= $slide['content']; ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>