<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
$options = array(

    'email_title' => array(
        'type'  => 'text',
        'label' => 'Заголовок колонки E-MAIL',
        'desc'  => 'Заголовок колонки E-MAIL',
        'value' => 'E-MAIL:',
    ),
    'email' => array(
        'type'  => 'text',
        'label' => 'E-mail',
        'desc'  => 'E-mail',
        'value' => 'contact@radiance.sale',
    ),
    'email-desc' => array(
        'type'  => 'text',
        'label' => 'E-mail описание',
        'desc'  => 'E-mail описание',
        'value' => 'Please allow up to 24 hours to recieve a responce to your e-mail',
    ),
    'call-us-desc' => array(
        'type'  => 'text',
        'label' => 'Заголовок колонки CALL US',
        'desc'  => 'Заголовок колонки CALL US',
        'value' => 'CALL US:',
    ),
    'call-us-box'=>array(
        'type' => 'addable-popup',
        'label' => __('Номера телефонов', '{domain}'),
        'desc'  => __('Номера телефонов', '{domain}'),
        'template' => '{{- phone_type }}',
        'popup-title' => null,
        'size' => 'large', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'phone_type' => array(
                'label' => __('Тип номера', '{domain}'),
                'type' => 'text',
                'desc' => __('Тип номера', '{domain}'),
            ),
            'phones' => array(
                'label' => __('Номера', '{domain}'),
                'type' => 'textarea',
                'desc' => __('Номера', '{domain}'),
            ),
        ),
    ),
    'write-us-title' => array(
        'type'  => 'text',
        'label' => 'Заголовок колонки WRITE US',
        'desc'  => 'Заголовок колонки WRITE US',
        'value' => 'WRITE US:',
    ),
    'write-us-desc' => array(
        'type'  => 'text',
        'label' => 'Описание к адресу WRITE US',
        'desc'  => 'Описание к адресу WRITE US',
        'value' => 'RADIANCE CLOTHES CO. Name Name, director',
    ),
    'write-us-location' => array(
        'type'  => 'text',
        'label' => 'Адрес WRITE US',
        'desc'  => 'Адрес WRITE US',
        'value' => '8080 Street st., Westerville, Ohio 43000-0030',
    ),
    'follow-us-title' => array(
        'type'  => 'text',
        'label' => 'Заголовок колонки FOLLOW US',
        'desc'  => 'Заголовок колонки FOLLOW US',
        'value' => 'FOLLOW US:',
    ),
    'follow-us-box'=>array(
        'type' => 'addable-popup',
        'label' => __('Социальные сети', '{domain}'),
        'desc'  => __('Социальные сети', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'large', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'icon' => array(
                'type' => 'upload',
                'images_only' => true,
                'label' => __('Иконка', '{domain}'),
                'desc' => __('Иконка', '{domain}'),
            ),
            'link' => array(
                'label' => __('Ссылка', '{domain}'),
                'type' => 'text',
                'desc' => __('Ссылка', '{domain}'),
            ),
            'title' => array(
                'label' => __('Заголовок', '{domain}'),
                'type' => 'text',
                'desc' => __('Заголовок', '{domain}'),
            ),
        ),
    ),

);