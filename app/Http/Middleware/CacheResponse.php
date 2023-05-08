<?php
namespace App\Http\Middleware;

class CacheResponse extends EnsureHttpHeadersAreValid
{
    /**
     * The maximum amount of time the response should be cached.
     *
     * @var int
     */
    const CACHE_CONTROL_MAX_AGE = 3600;
}

?>