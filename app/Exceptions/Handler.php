<?php

/**
 * Exception Handler
 *
 * PHP Version 8.3
 *
 * @category App
 * @package  App\Exceptions
 * @author   Viaduct <contact@hasname.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version  GIT: <git_id>
 * @link     https://github.com/hasname/viaduct
 * @since    PHP 7.4
 */

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

/**
 * Exception Handler class
 *
 * @category App
 * @package  App\Exceptions
 * @author   Viaduct <contact@hasname.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/hasname/viaduct
 */
class Handler extends ExceptionHandler
{
    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];
}