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

);