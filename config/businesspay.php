<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Account
    |--------------------------------------------------------------------------
    |
    | The default account to use when no account name is provided.
    |
    */
    'default' => env('BUSINESSPAY_DEFAULT_ACCOUNT', 'default'),

    /*
    |--------------------------------------------------------------------------
    | Default Settings
    |--------------------------------------------------------------------------
    |
    | Shared defaults applied to every account unless overridden.
    |
    */
    'defaults' => [
        'timeout' => env('BUSINESSPAY_TIMEOUT', 20),
    ],

    /*
    |--------------------------------------------------------------------------
    | BusinessPay Accounts
    |--------------------------------------------------------------------------
    |
    | Each account represents a set of credentials for the 微企付 API.
    | Keys may be provided as strings or as file paths (absolute or file://).
    |
    | env options: sandbox, production, custom
    |
    */
    'accounts' => [
        'default' => [
            'env' => env('BUSINESSPAY_ENV', 'sandbox'),
            'base_url' => env('BUSINESSPAY_BASE_URL'),

            'platform_id' => env('BUSINESSPAY_PLATFORM_ID'),
            'platform_private_key' => env('BUSINESSPAY_PLATFORM_PRIVATE_KEY'),
            'platform_private_cert_serial_no' => env('BUSINESSPAY_PLATFORM_PRIVATE_CERT_SERIAL_NO'),

            'tbep_serial_number' => env('BUSINESSPAY_TBEP_SERIAL_NUMBER'),
            'tbep_public_key' => env('BUSINESSPAY_TBEP_PUBLIC_KEY'),

            'timeout' => env('BUSINESSPAY_TIMEOUT', 20),

            // Optional SAAS / enterprise certificate authentication
            'ent_id' => env('BUSINESSPAY_ENT_ID'),
            'enterprise_serial_number' => env('BUSINESSPAY_ENTERPRISE_SERIAL_NUMBER'),
            'ent_private_key' => env('BUSINESSPAY_ENT_PRIVATE_KEY'),
        ],

        // 'another' => [
        //     'env' => 'production',
        //     'platform_id' => '...',
        //     ...
        // ],
    ],
];
