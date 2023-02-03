<?php

namespace Digitalion\LaravelSimpleUserSettings;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class LaravelSimpleUserSettingsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-simple-user-settings.php', 'laravel-simple-user-settings');
    }

    public function boot()
    {
        $this->app->bind('laravel-simple-user-setting', function () {
            return new LaravelSimpleUserSettings();
        });

        if (File::exists(__DIR__ . '/../bootstrap/helpers.php')) {
            require __DIR__ . '/../bootstrap/helpers.php';
        }

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-simple-user-settings.php' => config_path('laravel-simple-user-settings.php'),
            ], 'laravel-simple-user-settings-config');

            $this->publishes([
                __DIR__ . '/../database/migrations/add_settings_field_to_users_table.php' => database_path('migrations/' . date('Y_m_d_His_') . 'add_settings_field_to_users_table.php')
            ], 'laravel-simple-user-settings-migration');

            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        }
    }
}
