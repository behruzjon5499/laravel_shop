<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google'=>[
        'client_id'=>'1039958169966-7vmch511a8fh03d7ull1vn03q5356p7l.apps.googleusercontent.com',
        'client_secret'=>'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',
        'redirect'=>'http://127.0.0.1:8000/callback',
    ],
    'facebook'=>[
        'client_id'=>'740351898142247',
        'client_secret'=>'fc2e89bdb69170e8a57472f38ca78e67',
        'redirect'=>'http://localhost:8000/callback-facebook',
    ],

];
