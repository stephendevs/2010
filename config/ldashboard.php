<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Route prefix for accessing the schoollarizer administration dashboard
    ! By default this is set to dashboard -- but you can set it here
    |--------------------------------------------------------------------------
    */
    'ldashboardadmin_guard' => 'admin',
    'dashboard_route_prefix' => 'dashboard',

    /*
    |--------------------------------------------------------------------------
    | Root directory for storing media files for ldashboard -- default ldashboard
    |--------------------------------------------------------------------------
    */
    'storage_dir' => 'ldashboard',

    
    /*
    |--------------------------------------------------------------------------
    | Ldashboard Navbar Configuration
    |--------------------------------------------------------------------------
    */
    'brand_text' => 'Schoollarizer',

     /*
    |--------------------------------------------------------------------------
    | Other package links 
    | Blades holding nav-item for sidebar
    |--------------------------------------------------------------------------
    */
    'sidebar_links' => [
        'schlr::core.includes.navbars.sidebars.sidebarNavItem',
        'lpage::core.includes.navbars.sidebars.sidebarNavItem'
    ],

    /*
    |--------------------------------------------------------------------------
    | Middlewares
    | 
    |--------------------------------------------------------------------------
    */
    'middlewares' => ['web','etc'], // this is futire scope

    'use_ajax' => true,

    'developer' => [
        'name' => 'Okello Stephen Omoding',
        'email' => 'okellostephenomoding@gmail.com',
        'github' => 'https://github.com/stephendevs/stephendevs',
        'linkedin' => 'https://www.linkedin.com/in/stephendevs',
        'twitter' => 'https://twitter.com/stephendevs',
    ],

    
];