<?php

/**
 * Route Service Provider
 *
 * PHP Version 8.3
 *
 * @category App
 * @package  App\Providers
 * @author   Viaduct <contact@hasname.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version  GIT: <git_id>
 * @link     https://github.com/hasname/viaduct
 */

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 * Route Service Provider class
 *
 * @category App
 * @package  App\Providers
 * @author   Viaduct <contact@hasname.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/hasname/viaduct
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->routes(
            function () {
                Route::middleware('web')
                ->group(base_path('routes/web.php'));
            }
        );
    }
}