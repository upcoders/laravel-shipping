<?php

namespace Upcoders\LaravelShipping\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Upcoders\LaravelShipping\LaravelShipping
 */
class LaravelShipping extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-shipping';
    }
}
