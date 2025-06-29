<?php

/**
 * Home Controller
 *
 * PHP Version 8.3
 *
 * @category App
 * @package  App\Http\Controllers
 * @author   Viaduct <contact@hasname.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version  GIT: <git_id>
 * @link     https://github.com/hasname/viaduct
 * @since    PHP 7.4
 */

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

/**
 * Home controller class
 *
 * @category App
 * @package  App\Http\Controllers
 * @author   Viaduct <contact@hasname.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/hasname/viaduct
 */
class HomeController extends Controller
{
    /**
     * Handle the root route request.
     *
     * @return RedirectResponse
     */
    public function index(): RedirectResponse
    {
        return new RedirectResponse('https://github.com/hasname/viaduct');
    }
}