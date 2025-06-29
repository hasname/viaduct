<?php

/**
 * Smoke tests for the Viaduct application using Laravel.
 *
 * PHP version 8.0
 *
 * @category Tests
 * @package  Hasname\Viaduct\Tests
 * @author   Hasname <hasname@example.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/hasname/viaduct
 */

namespace Hasname\Viaduct\Tests;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\HomeController;

/**
 * Basic smoke tests to verify core functionality with Laravel.
 *
 * @category Tests
 * @package  Hasname\Viaduct\Tests
 * @author   Hasname <hasname@example.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/hasname/viaduct
 */
class SmokeTest extends TestCase
{
    /**
     * Test that the HomeController returns the correct redirect.
     *
     * @return void
     */
    public function testHomeControllerReturnsCorrectRedirect(): void
    {
        $controller = new HomeController();
        $response = $controller->index();

        $this->assertSame(302, $response->getStatusCode());
        $this->assertSame(
            'https://github.com/hasname/viaduct',
            $response->getTargetUrl()
        );
    }
}
