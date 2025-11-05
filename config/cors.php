<?php

return [
    'paths' => ['api/*','sanctum/csrf-cookie'],
    'allowed_methods'=> ['*'],
    'allowed_origins'=>[
        'http://localhost:5173',
        'https://faveevents.vercel.app'
    ],
    'allowed_origin_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers'=> [],
    'max_age'=> 0,
    'supports_credentials'=>false,
];