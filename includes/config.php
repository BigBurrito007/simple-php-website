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
        'template_path' => 'template',
   
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
