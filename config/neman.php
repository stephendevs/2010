<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Route prefix for accessing the admin panel pages
    |--------------------------------------------------------------------------
    */
    'route_prefix' => 'dashboard/newsmanager',

    /*
    |--------------------------------------------------------------------------
    | Layout for the admin dashboard
    |--------------------------------------------------------------------------
    */
    'layout' => 'phoebi::core.layouts.master',

    /*
    |--------------------------------------------------------------------------
    | Layout for the news page
    |--------------------------------------------------------------------------
    */
    'news_page_layout' => 'pacoss::core.layouts.master',

    /*
    |--------------------------------------------------------------------------
    | Additional middleware for admin to manage the events
    |--------------------------------------------------------------------------
    */
    'middlewares' => ['web','auth:admin'],

    /*
    |--------------------------------------------------------------------------
    | directory where to store news media files by defaul it stores in media/news
    | The media/news must live in the storage directory
    |--------------------------------------------------------------------------
    */
    'media_dir' => 'media/news',


     /*
    |--------------------------------------------------------------------------
    | Other package links 
    | Blades holding nav-item for sidebar
    |--------------------------------------------------------------------------
    */
    'sidebar_navitem' => [
        'schlr::core.includes.navbars.sidebars.sidebarNavItem',
        'pagman::core.includes.navbars.sidebars.sidebarNavItem',
        'neman::core.includes.navbars.sidebars.sidebarNavItem',
        'medman::core.includes.navbars.sidebars.sidebarNavItem',
    ],

    

    'use_ajax' => true,

    'developer' => [
        'name' => 'Okello Stephen Omoding',
        'email' => 'okellostephenomoding@gmail.com',
        'github' => 'https://github.com/stephendevs/stephendevs',
        'linkedin' => 'https://www.linkedin.com/in/stephendevs',
        'twitter' => 'https://twitter.com/stephendevs',
    ],

    
];