# Laravel Simple User Settings

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digitalion/laravel-simple-user-settings.svg?style=flat-square)](https://packagist.org/packages/digitalion/laravel-simple-user-settings)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/digitalion/laravel-simple-user-settings/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/digitalion/laravel-simple-user-settings/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/digitalion/laravel-simple-user-settings/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/digitalion/laravel-simple-user-settings/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/digitalion/laravel-simple-user-settings.svg?style=flat-square)](https://packagist.org/packages/digitalion/laravel-simple-user-settings)

This is a simple way to manage user settings.
The settings will be based on the configuration file and then stored within a json field in the users table.

## Installation

You can install the package via composer:

```bash
composer require digitalion/laravel-simple-user-settings
```

Once installed you can publish the configuration file with:

```bash
php artisan vendor:publish --tag="laravel-simple-user-settings-config"
```

The configuration file will be empty, but you can fill it with any settings your app offers.

Right after that you will need to add the `settings` field to the `users` table.

```bash
php artisan migrate
```

Optionally, you can publish the migration to make any changes with:

```bash
php artisan vendor:publish --tag="laravel-simple-user-settings-migrations"
```

## Usage

The package will offer you the `settings` helper with which you can directly access user settings.

### Read all settings

With the `settings()` command you will get the array of all settings. If the user has no saved settings, all the basic values will be returned.

### Reading a value

To read a given settings value you will have to use the `settings('key')` command.
To get a nested value, use the dot as a separator. For example: `settings('key1.key2.key3')`.

### Set a value

The values can be set with the command: `settings('key', 'value')`

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
