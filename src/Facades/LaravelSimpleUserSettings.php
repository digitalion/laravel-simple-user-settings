<?php

namespace Digitalion\LaravelSimpleUserSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Digitalion\LaravelSimpleUserSettings\LaravelSimpleUserSettings
 */
class LaravelSimpleUserSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Digitalion\LaravelSimpleUserSettings\LaravelSimpleUserSettings::class;
    }
}
