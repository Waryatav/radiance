<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
$options = array(
    'slider' => array(
        'type'            => 'addable-popup',
        'label'           => 'Слайд',
        'template'        => '{{- title }}',
        'size'            => 'large',
        'limit'           => 0,
        'add-button-text' => 'Добавить',
        'sortable'        => true,
        'popup-options'   => array(
            'title'       => array(
                'label' => 'Заголовок',
                'type'  => 'text',
                'desc'  => 'Заголовок слайда',
            ),
            'subtitle'    => array(
                'label' => 'Подзаголовок',
                'type'  => 'text',
                'desc'  => 'Подзаголовок слайда',
            ),
            'content'     => array(
                'label' => 'Контент',
                'type'  => 'text',
                'desc'  => 'Контент слайда',
            ),
            'image-small' => array(
                'type'        => 'upload',
                'label'       => 'Изображение маленького слайда',
                'desc'        => 'Изображение маленького слайда',
                'images_only' => true,
            ),
            'image-big'   => array(
                'type'        => 'upload',
                'label'       => 'Изображение большого слайда',
                'desc'        => 'Изображение большого слайда',
                'images_only' => true,
            ),
        ),
    ),
);