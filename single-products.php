<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package radiance
 */

get_header(); ?>
    <section class="product">
        <?php
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content-single-products', get_post_format() );

        endwhile;
        ?>
    </section>
<?php
get_footer();
