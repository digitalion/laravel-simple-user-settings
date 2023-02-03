<?php

namespace Digitalion\LaravelSimpleUserSettings;

use Illuminate\Support\Arr;

class LaravelSimpleUserSettings
{
    public function all(): array
    {
        return array_merge(config('laravel-simple-user-settings', []), auth()->user()->settings ?? []);
    }

    public function get(string $key): mixed
    {
        return Arr::get($this->all(), $key);
    }

    public function set(string $key, mixed $value)
    {
        auth()->user()->update([
            'settings' => Arr::set($this->all(), $key, $value),
        ]);
    }

    public function forget(string $key): bool
    {
        $default = Arr::get(config('laravel-simple-user-settings', []), $key);
        $this->set($key, $default);

        return !Arr::exists(auth()->user()->settings ?? [], $key);
    }
}
