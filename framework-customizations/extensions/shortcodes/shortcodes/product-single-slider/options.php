<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
$options = array(
    'slider' => array(
        'type'  => 'multi-upload',
        'label' => __('Слайдер', '{domain}'),
        'desc'  => __('Слайдер', '{domain}'),
        'images_only' => true,
    )
);