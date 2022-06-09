<?php

return [
     /*
    |--------------------------------------------------------------------------
    | The standard of the school
    |--------------------------------------------------------------------------
    |
    | Don't forget to set this in your .env file.
    |
    */

    'standard' => env('SIMS_STANDARD'),
    
     /*
    |--------------------------------------------------------------------------
    | The layout to be extended for the srt system.
    | The layout must have the sections ---- title, content
    |--------------------------------------------------------------------------
    */
    'layout' => 'lad::core.layouts.master',

     /*
    |--------------------------------------------------------------------------
    | Middlewares  
    |--------------------------------------------------------------------------
    | The value is the array of additional middlewares to further protect dashboard
    */
    'middlewares' => ['web','auth','usertype:admin'],


    /*
    |--------------------------------------------------------------------------
    | URL Customization -- dashboard | admin-panel | secrete
    |--------------------------------------------------------------------------
    | The value is the route prefix for access the dashboard
    | sims dashboard is accessed via https:example.com/dashboard/sims
    */
    'route_prefix' => 'dashboard/sims',

];