<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}

/**
 * Displays site url provided in config.
 */
function site_url()
{
    echo config('site_url');
}

/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}

/**
 * Website navigation.
 */


/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'HABLA CON MARCEL!';

    echo ucwords(str_replace('-', ' ', $page));
}



/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}
