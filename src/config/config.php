<?php

return [

    'api_token' => env('SPORTMONKS_API_TOKEN'),

    // Determines, if responses with the 'data' attribute will be
    // stripped of it. Set to true to get body within 'data'
    'without_data' => false,

    'timezone' => config('app.timezone')
];