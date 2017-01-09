<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<div class="panel">
    <div class="currencies">
        <p><?= $atts['currencies_title'];?></p>
        <a class="currency active-currency" href="#">USD</a>
        <a class="currency" href="#">EUR</a>
        <a class="currency" href="#">RUR</a>
        <span class="line"></span>
    </div>

    <div class="search-container">
        <p class="search-container-header"><?= $atts['search_title'];?></p>
        <form role="search" method="get" class="search search-form" action="">
            <input class="search-field" type="search" placeholder="" name="s">
            <input type="submit" class="search-sbm" value="">
        </form>
        <span class="line"></span>
    </div>
    <div class="shoping-cart">
        <p class="shoping-cart-header"><?= $atts['basket_title'];?></p>
        <a href="#" class="panel-basket"></a>
        <div class="goods-usd">
            <p class="goods"><span>24</span> <?= $atts['goods'];?></p>
            <p class="usd"><span>235</span>  usd</p>
        </div>
        <span class="line"></span>
    </div>

    <div class="languages">
        <p class="languages-header"><?= $atts['language_title'];?></p>
        <a class="language active-currency" href="#">EN</a>
        <a class="language" href="#">FR</a>
        <a class="language" href="#">RU</a>
        <span class="line"></span>
    </div>

</div>
