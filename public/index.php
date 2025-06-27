<?php

/**
 * Main entry point that redirects to the GitHub repository.
 *
 * PHP version 8.0
 *
 * @category Application
 * @package  Viaduct
 * @author   Gea-Suan Lin <gslin@gslin.com>
 * @license  MIT License
 * @link     https://github.com/hasname/viaduct
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Hasname\Viaduct\App;

$app = new App();
$response = $app->handleRoot();
$app->sendResponse($response);
