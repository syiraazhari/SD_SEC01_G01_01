<?php

return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','ATj-A4S62R4lcn2TaqrEqbRGRnZopzkDGebGIYNhmno0j9SddxqaHhmJ6SbbfKCS1J2OkooW3Pwme39c'),
    'secret' => env('PAYPAL_SECRET','EB9_uATngsnzIl80XbA9-y-DU01kH12CovpGh2XcL7ZvpJG9CHsbDZnv4oC74FyJwKGdjDQQIo0G2KVJ'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];