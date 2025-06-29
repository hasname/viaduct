<?php

/**
 * Console Kernel
 *
 * PHP Version 8.3
 *
 * @category App
 * @package  App\Console
 * @author   Viaduct <contact@hasname.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version  GIT: <git_id>
 * @link     https://github.com/hasname/viaduct
 * @since    PHP 7.4
 */

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * Console Kernel class
 *
 * @category App
 * @package  App\Console
 * @author   Viaduct <contact@hasname.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/hasname/viaduct
 */
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule Schedule instance
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        //
    }
}