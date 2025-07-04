<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Add 404 handler.
$app->addErrorMiddleware(false, false, false);

$app->run();
