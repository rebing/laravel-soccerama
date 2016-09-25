# Laravel Soccerama

Laravel wrapper for [Soccerama](https://soccerama.pro/) (live) score API calls. 
Documentation for the api can be found [here](https://soccerama.pro/docs/1.2)

## Installation

**1-** Require the package via Composer in your `composer.json`.
```json
{
  "require": {
    "Rebing/laravel-soccerama": "0.1.*"
  }
}
```

**2-** Run Composer to install or update the new requirement.

```bash
$ composer install
```

or

```bash
$ composer update
```

**3-** Add the service provider to your `app/config/app.php` file
```php
'Rebing\Soccerama\SocceramaServiceprovider',
```

**4-** Add the facade to your `app/config/app.php` file
```php
'Soccerama' => 'Rebing\Soccerama\Facades\Soccerama',
```

**5-** Publish the configuration file

```bash
$ php artisan vendor:publish --provider="Rebing\Soccerama\SocceramaServiceProvider"
```

**6-** Review the configuration file and add your token (preferably through env: `'api_token' => env('API_TOKEN')` )

```
config/graphql.php
```