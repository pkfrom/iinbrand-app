<?php

return [
    /*
    |--------------------------------------------------------------------------
    | GeoIP Driver Type
    |--------------------------------------------------------------------------
    |
    | Supported: "ip-api", "telize", "maxmind"
    |
    */
    'driver' => env('GEOIP_DRIVER', 'maxmind'),

    /*
    |--------------------------------------------------------------------------
    | Return random ipaddresses (useful for dev envs)
    |--------------------------------------------------------------------------
    */
    'random' => env('GEOIP_RANDOM', false),

    /*
    |--------------------------------------------------------------------------
    | IP-API Driver
    |--------------------------------------------------------------------------
    */
    'ip-api' => [
        /*
        |--------------------------------------------------------------------------
        | IP-API Pro Service Key
        |--------------------------------------------------------------------------
        |
        | Check out pro here: https://signup.ip-api.com/
        |
        */
        'key' => env('GEOIP_IPAPI_KEY'),

        /*
        |--------------------------------------------------------------------------
        | IP-API Secure connection
        |--------------------------------------------------------------------------
        |
        | Use http or https
        | Only applicable with the Pro service
        |
        */
        'secure' => env('GEOIP_IPAPI_SECURE', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Telize Driver
    |--------------------------------------------------------------------------
    */
    'telize' => [
        /*
        |--------------------------------------------------------------------------
        | Telize Service Key
        |--------------------------------------------------------------------------
        |
        | Get your API key here: https://market.mashape.com/fcambus/telize
        |
        */

         'key' => env('GEOIP_TELIZE_KEY'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maxmind Driver
    |--------------------------------------------------------------------------
    */
    'maxmind' => [
        /*
        |--------------------------------------------------------------------------
        | Maxmind Database
        |--------------------------------------------------------------------------
        |
        | Example: app_path().'/database/maxmind/GeoLite2-City.mmdb'
        |
        */
        'database' => base_path().'/'.env('GEOIP_MAXMIND_DATABASE', 'database/GeoLite2-City.mmdb'),

        /*
        |--------------------------------------------------------------------------
        | Maxmind Web Service Info
        |--------------------------------------------------------------------------
        */
        'user_id'     => env('GEOIP_MAXMIND_USER_ID'),
        'license_key' => env('GEOIP_MAXMIND_LICENSE_KEY'),
    ],
];
