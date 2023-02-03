<?php

use Digitalion\LaravelSimpleUserSettings\Facades\LaravelSimpleUserSettings;

if (!function_exists('settings')) {
    function settings($key = null, $value = null)
    {
        if (is_null($key) && is_null($value)) {
            return LaravelSimpleUserSettings::all();
        } elseif (!is_null($key) && is_null($value)) {
            return LaravelSimpleUserSettings::get($key);
        } elseif (is_null($key) && !is_null($value)) {
            return LaravelSimpleUserSettings::set($key, $value);
        }
        return null;
    }
}
