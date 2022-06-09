<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Route prefix for accessing the admin panel pages
    |--------------------------------------------------------------------------
    */
    'route_prefix' => 'dashboard',

    /*
    |--------------------------------------------------------------------------
    | Layout for the admin dashboard
    |--------------------------------------------------------------------------
    */
    'layout' => 'phoebi::core.layouts.master',

    /*
    |--------------------------------------------------------------------------
    | Additional middleware for admin to manage the events
    |--------------------------------------------------------------------------
    */
    'middlewares' => ['web','auth:admin'],

    /*
    |--------------------------------------------------------------------------
    | Root directory for storing media files for ldashboard -- default ldashboard
    |--------------------------------------------------------------------------
    */
    'storage_dir' => 'ldashboard',


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