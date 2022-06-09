<?php


return [

    /**
     * PACOSS Configuration file.
     */

    /**
     * The email address to send mail messages from the website visitors
     */
    'mail_to' => env('MAIL_TO', 'okellostephenomoding@gmail.com'),

      /*
    |--------------------------------------------------------------------------
    | Standard Post Types
    |--------------------------------------------------------------------------
    */
    'standard_post_types' => [
        'news', 'facility'
    ],

    'custom_post_types' => [
        'banner' => 'aamsnm::dashboard.banner',
    ],

    'options' => [
        'pacoss_logo' => 'aamsnm/img/logo.jpg',
        'pacoss_facebook' => 'https://www.facebook.com/pallisacommunityss',
        'pacoss_twitter' => 'https://www.facebook.com/pallisacommunityss',
        'pacoss_phone' => '+256785068331',
        'pacoss_email' => 'pacoss2018@gmail.com',
        'pacoss_address' => 'P.O BOX 07, Pallisa Pallisa Uganda 1 KM off pallisa - Kumi Road.',
        'pacoss_map' => ''
    ],

    'option_rules' => [
        'pacoss_facebook' => 'nullable|url',
        'pacoss_email' => 'nullable|email',
        'pacoss_phone' => 'nullable',
        'pacoss_logo' => 'nullable',
        'pacoss_map' => 'nullable|url'
    ],

];