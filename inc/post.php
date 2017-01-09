<?php
/**
 * Регистрируем тип записи проекты
 */
add_action( 'init', 'registerProductPostType' );
function registerProductPostType() {
    $labels = array(
        'name'               => 'Товары', // Основное название типа записи
        'singular_name'      => 'Товар', // отдельное название записи типа Book
        'add_new'            => 'Добавить товар',
        'add_new_item'       => 'Добавить новый товар',
        'edit_item'          => 'Редактировать товар',
        'new_item'           => 'Новый товар',
        'view_item'          => 'Посмотреть товар',
        'search_items'       => 'Найти товар',
        'not_found'          => 'товаров не найдено',
        'not_found_in_trash' => 'В корзине товаров не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Товары'
    );
    $args   = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'menu_icon'          => 'dashicons-cart',
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'products', $args );

}


$rubric_labels = array(
    'name'              => __( 'Категории', 'unyson' ),
    'singular_name'     => __( 'Категории', 'unyson' ),
    'search_items'      => __( 'Поиск категорий', 'unyson' ),
    'all_items'         => __( 'Все категории', 'unyson' ),
    'parent_item'       => __( 'Родитель', 'unyson' ),
    'parent_item_colon' => __( 'Родитель', 'unyson' ) . ':',
    'edit_item'         => __( 'Редактировать категорию', 'unyson' ),
    'update_item'       => __( 'Обновить категорию', 'unyson' ),
    'add_new_item'      => __( 'Добавить новую категорию', 'unyson' ),
    'new_item_name'     => __( 'Новое название категории', 'unyson' ),
    'menu_name'         => __( 'Категории', 'unyson' ),
);

$rubric_args = array(
    'hierarchical'      => true,
    'labels'            => $rubric_labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'categories' ),
);

register_taxonomy( 'categories', array( 'products' ), $rubric_args );

$rubric_labels = array(
    'name'              => __( 'Разделы', 'unyson' ),
    'singular_name'     => __( 'Разделы', 'unyson' ),
    'search_items'      => __( 'Поиск разделов', 'unyson' ),
    'all_items'         => __( 'Все разделы', 'unyson' ),
    'parent_item'       => __( 'Родитель', 'unyson' ),
    'parent_item_colon' => __( 'Родитель', 'unyson' ) . ':',
    'edit_item'         => __( 'Редактировать раздел', 'unyson' ),
    'update_item'       => __( 'Обновить раздел', 'unyson' ),
    'add_new_item'      => __( 'Добавить новый раздел', 'unyson' ),
    'new_item_name'     => __( 'Новое название раздела', 'unyson' ),
    'menu_name'         => __( 'Разделы', 'unyson' ),
);

$rubric_args = array(
    'hierarchical'      => true,
    'labels'            => $rubric_labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'section' ),
);

register_taxonomy( 'section', array( 'products' ), $rubric_args );
