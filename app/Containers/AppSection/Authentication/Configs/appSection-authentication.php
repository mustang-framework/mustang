<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Email Confirmation
    |--------------------------------------------------------------------------
    |
    | When set to true, the user must verify his email before being able to
    | Login, after his registration.
    |
    */

    'require_email_verification' => true,
    'verification_link_expiration_time' => 30, // in minute

    /*
    |--------------------------------------------------------------------------
    | Clients
    |--------------------------------------------------------------------------
    |
    | A list of clients that have access to the application.
    |
    */

    'clients' => [
        'web' => [
            'id' => env('CLIENT_WEB_ID'),
            'secret' => env('CLIENT_WEB_SECRET'),
        ],
        'mobile' => [
            'id' => env('CLIENT_MOBILE_ID'),
            'secret' => env('CLIENT_MOBILE_SECRET'),
        ],

        // add your other clients here
    ],

    /*
    |--------------------------------------------------------------------------
    | Login With Custom Field
    |--------------------------------------------------------------------------
    |
    | This allows you to choose which field you want to use for passport auth.
    |
    */

    'login' => [

        /*
        |--------------------------------------------------------------------------
        | Allowed Login Attributes
        |--------------------------------------------------------------------------
        |
        | A list of fields the user can log in with.
        | The key is the field name. The value contains validation rules of the key.
        |
        | The order determines the order the fields are tested to log in (in case multiple fields are submitted!)
        |
        | Example: 'phone' => ['string', 'min:6', 'max:25'],
        |
        */

        'attributes' => [
            'email' => ['email'],
        ],

        /*
        |--------------------------------------------------------------------------
        | Case Sensitive
        |--------------------------------------------------------------------------
        |
        | This field represents if login attribute should be case-sensitive.
        | If false, then user can log in with both `admin@admin.com` and `Admin@Admin.Com`
        |
        */

        'case_sensitive' => false,

        /*
        |--------------------------------------------------------------------------
        | Prefix
        |--------------------------------------------------------------------------
        |
        | Use this $prefix variable in order to allow for nested elements.
        | For example, if your login fields are nested in "data.attributes.name / data.attributes.email"
        | simply set the $prefix to "data.attributes."
        |
        */

        'prefix' => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Reset Password URLs
    |--------------------------------------------------------------------------
    |
    | Insert your allowed reset password urls which user can request to be injected into the email.
    |
    */
    'allowed-reset-password-urls' => [
        env('APP_URL', 'http://api.mustang.test/v1') . '/password/reset',
    ],

    /*
    |--------------------------------------------------------------------------
    | Verify Email URLs
    |--------------------------------------------------------------------------
    |
    | Insert your allowed verify email urls which user can request to be injected into the email.
    |
*/
    'allowed-verify-email-urls' => [
        env('APP_URL', 'http://api.mustang.test/v1') . '/email/verify',
    ],
];
