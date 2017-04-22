<?php



return [

    /*
    |--------------------------------------------------------------------------
    | Address Types (Flags)
    |--------------------------------------------------------------------------
    */

    'flags' => ['primary', 'billing', 'shipping'],

    /*
    |--------------------------------------------------------------------------
    | Default Country
    |--------------------------------------------------------------------------
    */

    'default_country' => 'US',

    /*
    |--------------------------------------------------------------------------
    | Geocoding
    |--------------------------------------------------------------------------
    */

    'geocode' => false,

    /*
    |--------------------------------------------------------------------------
    | Eloquent Models
    |--------------------------------------------------------------------------
    */

    'models' => [

        /*
        |--------------------------------------------------------------------------
        | Address Model
        |--------------------------------------------------------------------------
        */

        'address' => \BrianFaust\Addressable\Address::class,

        /*
        |--------------------------------------------------------------------------
        | Country Model
        |--------------------------------------------------------------------------
        */

        'country' => \BrianFaust\Countries\Country::class,

    ],

];
