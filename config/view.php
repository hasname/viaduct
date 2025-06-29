<?php

return [
    'paths' => [
        __DIR__ . '/../resources/views',
    ],

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        __DIR__ . '/../storage/framework/views'
    ),
];