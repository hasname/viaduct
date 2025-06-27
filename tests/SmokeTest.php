<?php

/**
 * Smoke tests for the Viaduct application.
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
use Hasname\Viaduct\App;

/**
 * Basic smoke tests to verify core functionality.
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
     * Test that the root route returns the correct redirect.
     *
     * @return void
     */
    public function testRootRouteReturnsCorrectRedirect(): void
    {
        $app = new App();
        $response = $app->handleRoot();

        $this->assertSame(302, $response['status']);
        $this->assertSame(
            'https://github.com/hasname/viaduct',
            $response['location']
        );
    }
}
