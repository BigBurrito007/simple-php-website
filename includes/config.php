<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Friends Chatbot',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => '',
            'about-us' => '',
            'products' => '',
            'contact' => '',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',

    ];
    return isset($config[$key]) ? $config[$key] : null;
}
