<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} 
$options = fw_get_db_post_option(get_the_ID(),'description');
?>

<div class="terms-conditions_content">
    <h2><?php the_title(); ?></h2>
    <div class="big-img">
        <?php the_post_thumbnail(); ?>
    </div>
<?= $options;?>

</div>
