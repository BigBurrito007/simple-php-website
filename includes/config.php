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
            '' => 'Home',
            'about-us' => '',
            'products' => '',
            'contact' => '',
        ],
        'template_path' => '',
        'content_path' => '',
        'version' => '',

    ];
    return isset($config[$key]) ? $config[$key] : null;
}
