<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$args     = array( 'post_type' => 'products', 'numberposts' => - 1 );
$products = array_chunk( get_posts( $args ), 4 );
?>
<div class="slider-bot-container">
    <div class="owl-carousel slider-bot">
        <?php foreach ( $products as $products4 ): ?>
            <div class="item">
                <?php foreach ( $products4 as $product ):
                    $current_option = fw_get_db_post_option( $product->ID );
                    ?>
                    <div class="product">
                        <a href="<?= get_the_permalink( $product->ID ); ?>" class="product-image">
                            <?= get_the_post_thumbnail( $product->ID ); ?>
                        </a>
                        <div class="product-info">
                            <h3 class="product-header"><a style="color:inherit;"
                                                          href='<?= get_the_post_thumbnail( $product->ID ); ?>'><?= $product->post_title; ?></a>
                            </h3>
                            <span class="line"></span>
                            <span class="article">ARTICLE:<span
                                    class="article-value"><?= $current_option['article']; ?></span></span>
                            <p class="product-descr"><?= cutStr( strip_tags( $current_option['description'] ), 160 ); ?></p>
                            <p class="price"><span class="price-icon">$</span><?= $current_option['price']; ?></p>
                            <a class="add-to-card" href="<?= get_the_permalink( $product->ID ); ?>"><span
                                    class="add-to-card-icon"></span><?= $atts['add_basket_title']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>