<?php

namespace BNMetrics\Shopify\Traits;

use GuzzleHttp\ClientInterface;

trait ResponseOptions
{
    /**
     * Get the response header of the API request
     *
     * @param $token
     * @return array
     */
    protected function getResponseHeaders($token)
    {
        return [
            'Accept' => 'application/json',
            'X-Shopify-Access-Token' => $token, ];
    }

    /**
     * Check the guzzle http client version
     *
     * @return string
     */
    protected function httpClientVersionCheck()
    {
        $postKey = (version_compare(ClientInterface::MAJOR_VERSION, '6') >= 0) ? 'json' : 'body';

        return $postKey;
    }
}
