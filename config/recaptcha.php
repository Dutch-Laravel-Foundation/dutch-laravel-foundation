<?php

return [

    /*
    |--------------------------------------------------------------------------
    | reCAPTCHA Version
    |--------------------------------------------------------------------------
    |
    | Set your version of reCAPTCHA here, either "3" or "2".
    |
    */
    'recaptcha_version' => 3,
    
    /*
    |--------------------------------------------------------------------------
    | v3 configuration
    |--------------------------------------------------------------------------
    */
    'recaptcha_v3' => [
        'site_key' => env('RECAPTCHA_V3_SITE_KEY'),
        'secret_key' => env('RECAPTCHA_V3_SECRET_KEY'),
        'threshold' => env('RECAPTCHA_V3_THRESHOLD', .5),
        'error_message' => 'Sorry, but you look like a robot.',
        'terms' => 'This website has implemented reCAPTCHA v3 and your use of reCAPTCHA v3 is subject to the <a href="https://www.google.com/policies/privacy/" target="_blank">Google Privacy Policy</a> and <a href="https://www.google.com/policies/terms/" target="_blank">Terms of Use</a>.',
    ],

    /*
    |--------------------------------------------------------------------------
    | v2 configuration
    |--------------------------------------------------------------------------
    |
    | The default is the checkbox captcha, for which you can set the size to 
    | either "normal" or "compact." To enable the invisible reCAPTCHA, set the 
    | size to "invisible".
    |
    */
    'recaptcha_v2' => [
        'site_key' => env('RECAPTCHA_V2_SITE_KEY'),
        'secret_key' => env('RECAPTCHA_V2_SECRET_KEY'),
        'size' => 'normal', // "normal", "compact", or "invisible"
        'theme' => 'light', // "light" or "dark"
        'tabindex' => 0,
        'error_message' => 'You did not prove that you are not a robot.',
        'terms' => 'This website has implemented reCAPTCHA v2 and your use of reCAPTCHA v2 is subject to the <a href="https://www.google.com/policies/privacy/" target="_blank">Google Privacy Policy</a> and <a href="https://www.google.com/policies/terms/" target="_blank">Terms of Use</a>.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Excluded Forms
    |--------------------------------------------------------------------------
    |
    | You can exclude certain forms from reCAPTCHA validation by adding its
    | handle below. For reCAPTCHA v3 you'll also need to add the CSS class 
    | "nocaptcha" to the <form> element.
    |
    */
    'exclusions' => [],

];
