<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radiance
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body>
<section class="left_section">
    <div class="logo_container">
        <a href="/" class="logo">
            <img src="<?= fw_get_db_customizer_option('logo')['url'];?>" alt="logo">
            <span class="line"></span>
            <span class="logo-dot"></span>
            <span><?= get_bloginfo('description');?></span>
        </a>

    </div>

    <div class="main_menu">
        <ul>
            <li><a id="new-arrivals" class="main_menu__item" href="#"><span class="mnu_arrow"></span>NEW ARRIVALS</a></li>
            <li><a id="best-selling" class="main_menu__item" href="#"><span class="mnu_arrow"></span>BEST SELLING</a></li>
            <li><a id="sales-specials" class="main_menu__item" href="#"><span class="mnu_arrow"></span>SALES & SPECIALS</a></li>
            <li><a class="main_menu__item" href="#"><span class="mnu_arrow"></span>MY ACCOUNT</a></li>
            <li><a class="main_menu__item" href="#"><span class="mnu_arrow"></span>CONTACT US</a></li>
        </ul>
    </div>
    <div class="catalogue">
        <h3>CATALOGUE</h3>
        <span class="catalogue__line"></span>
        <div class="visible">

                <?php wp_nav_menu( array(
                    'theme_location' => 'header',
                    'menu_class'     => 'catalogue_menu',
                    'menu'           => 'Категории товаров'
                ) ); ?>
<!--                <li><a class="catalogue_menu__item" href="#">CATALOG ITEM 1</a></li>-->

         
        </div>
        <a href="#" class="catalogue_arrow_up"></a>
        <a href="#" class="catalogue_arrow_down"></a>
    </div>

    <div class="custom_care">

        <h3>CUSTOMER CARE</h3>
        <span class="custom_care__line"></span>
        <ul class="custom_care__menu">
            <?php wp_nav_menu( array(
                'theme_location' => 'header',
                'menu_class'     => 'custom_care__menu',
                'menu'           => 'Меню Статей en'
            ) ); ?>
<!--            <li><a class="custom_care__menu__item" href="#"><span class="custom_care__arrow"></span>TERMS & CONDITIONS</a></li>-->
<!--            <li><a class="custom_care__menu__item" href="#"><span class="custom_care__arrow"></span>SHIPPING & PAYMENT INFORMATION</a></li>-->
<!--            <li><a class="custom_care__menu__item" href="#"><span class="custom_care__arrow"></span>RETURNS POLICY</a></li>-->
<!--            <li><a class="custom_care__menu__item" href="#"><span class="custom_care__arrow"></span>HOW TO TAKE CARE OF YOUR-->
<!--                    CLOTHES</a></li>-->
<!--            <li><a class="custom_care__menu__item" href="#"><span class="custom_care__arrow"></span>TERMS & CONDITIONS</a></li>-->
<!--            <li><a class="custom_care__menu__item" href="#"><span class="custom_care__arrow"></span>SHIPPING & PAYMENT INFORMATION</a></li>-->
<!--            <li><a class="custom_care__menu__item" href="#"><span class="custom_care__arrow"></span>RETURNS POLICY</a></li>-->
<!--            <li><a class="custom_care__menu__item" href="#"><span class="custom_care__arrow"></span>HOW TO TAKE CARE OF YOUR-->
<!--                    CLOTHES</a></li>-->

        </ul>
        <a href="#" class="custom_care__arrow_up"></a>
        <a href="#" class="custom_care__arrow_down"></a>
    </div>
    <!-- <footer class="foot-left-side">
        <div class="left-footer">
            <h4>WE ARE IN SOCIAL NETWORKS:</h4>
            <ul class="social">
                <li><a href="#" class="social_link"><span class="social_vk"></span></a></li>
                <li><a href="#" class="social_link"><span class="social_fb"></span></a></li>
                <li><a href="#" class="social_link"><span class="social_ok"></span></a></li>
                <li><a href="#" class="social_link"><span class="social_twitter"></span></a></li>
                <li><a href="#" class="social_link"><span class="social_googleplus"></span></a></li>
            </ul>
        </div>
    </footer> -->
</section>