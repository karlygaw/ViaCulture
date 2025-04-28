<?php

return [
    'api_key' => env('GEMINI_API_KEY'),
    'endpoint' => 'https://generativelanguage.googleapis.com/v1/models/gemini-2.0-flash:generateContent',
    'timeout' => 30, // Add this line with integer value
    'max_tokens' => 300,
    'default_temperature' => 0.7
];
