<?php

/**
 * Laravel entry point.
 *
 * PHP version 8.0
 *
 * @category Application
 * @package  Viaduct
 * @author   Gea-Suan Lin <gslin@gslin.com>
 * @license  MIT License
 * @link     https://github.com/hasname/viaduct
 */

use Illuminate\Http\Request;

require_once __DIR__ . '/../vendor/autoload.php';

$app = include_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
