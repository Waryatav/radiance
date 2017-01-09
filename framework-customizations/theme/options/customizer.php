<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'panel_1' => array(
        'title'   => __( 'Логотип', '{domain}' ),
        'options' => array(
            'logo' => array(
                'type'        => 'upload',
                'label'       => __( 'Логотип', '{domain}' ),
                'images_only' => true
            ),
        ),
    ),
    'social' => array(
        'title'   => __( 'Социальные сети', '{domain}' ),
        'options' => array(
            'vk' => array(
                'type'        => 'text',
                'label'       => __( 'Вконтакте', '{domain}' ),
            ),
            'fb' => array(
                'type'        => 'text',
                'label'       => __( 'facebook', '{domain}' ),
            ),
            'ok' => array(
                'type'        => 'text',
                'label'       => __( 'Одноклассники', '{domain}' ),
            ),
            'tw' => array(
                'type'        => 'text',
                'label'       => __( 'Twitter', '{domain}' ),
            ),
            'gp' => array(
                'type'        => 'text',
                'label'       => __( 'Google +', '{domain}' ),
            ),
        ),
    ),
);