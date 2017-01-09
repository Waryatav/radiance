<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(

    'description'     => array(
        'type'          => 'wp-editor',
        'label'         => 'Описание',
        'desc'          => 'Описание товара',
        'size'          => 'large',
//        'tinymce' => true,
        'editor_height' => 400,
        'wpautop'       => true,
        'editor_type'   => false, // tinymce, html
    ),
    'article'         => array(
        'type'  => 'text',
        'label' => 'Артикул',
        'desc'  => 'Артикул товара',
    ),
    'material'        => array(
        'type'  => 'text',
        'label' => 'Материал',
        'desc'  => 'Материал товара',
    ),
    'color'           => array(
        'type'  => 'text',
        'label' => 'Цвет',
        'desc'  => 'Цвет товара',
    ),
    'characteristics' => array(
        'type'            => 'addable-popup',
        'label'           => 'Характеристики',
        'desc'            => 'Характеристики товара',
        'template'        => '{{- title }}',
        'popup-title'     => null,
        'size'            => 'large', // small, medium, large
        'limit'           => 0, // limit the number of popup`s that can be added
        'add-button-text' => 'Добавить',
        'sortable'        => true,
        'popup-options'   => array(
            'title' => array(
                'type'  => 'text',
                'label' => 'Характеристика',
                'desc'  => 'Характеристика товара',
            ),
            'value' => array(
                'type'  => 'text',
                'label' => 'Значение характеристики',
                'desc'  => 'Значение характеристики товара',
            ),
        ),
    ),
    'price'       => array(
        'type'  => 'text',
        'label' => 'Цена',
        'desc'  => 'Цена товара',
    ),
);