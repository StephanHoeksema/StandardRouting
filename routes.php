<?php


return [
    'GET' => [
        '/' => 'controllers/RoutesController::index',
        '/about' => 'controllers/RoutesController::about',
        '/contact' => 'controllers/RoutesController::contact',
    ],
    'POST' => [
        '/contact' => 'controllers/RoutesController::message'
    ]
];
