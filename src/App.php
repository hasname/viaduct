<?php

/**
 * Viaduct application main file.
 *
 * PHP version 8.0
 *
 * @category Application
 * @package  Viaduct
 * @author   Gea-Suan Lin <gslin@gslin.com>
 * @license  MIT License
 * @link     https://github.com/hasname/viaduct
 */

namespace Hasname\Viaduct;

/**
 * Main application class for handling requests.
 *
 * PHP version 8.0
 *
 * @category Application
 * @package  Viaduct
 * @author   Gea-Suan Lin <gslin@gslin.com>
 * @license  MIT License
 * @link     https://github.com/hasname/viaduct
 */
class App
{
    /**
     * Handle the root route request.
     *
     * @return array Response data with status and location
     */
    public function handleRoot(): array
    {
        return [
            'status' => 302,
            'location' => 'https://github.com/hasname/viaduct'
        ];
    }

    /**
     * Send redirect response to browser.
     *
     * @param array $response Response data from handleRoot()
     *
     * @return void
     */
    public function sendResponse(array $response): void
    {
        if ($response['status'] === 302 && isset($response['location'])) {
            header('Location: ' . $response['location']);
        }
    }
}