# Laravel Soccerama

[![Latest Stable Version](https://poser.pugx.org/rebing/laravel-soccerama/v/stable)](https://packagist.org/packages/rebing/laravel-soccerama)
[![License](https://poser.pugx.org/rebing/laravel-soccerama/license)](https://packagist.org/packages/rebing/laravel-soccerama)

Laravel wrapper for [Soccerama](https://soccerama.pro/) (live) score API calls. 
Documentation for the API can be found [here](https://soccerama.pro/docs/1.2)

## Installation

**1-** Require the package via Composer in your `composer.json`.
```json
{
  "require": {
    "Rebing/laravel-soccerama": "^1.0"
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

## Usage

Refer to the official [docs](https://soccerama.pro/docs/1.2) as to which calls can be made and check the calls in traits under [Rebing\Soccerama\Requests](Rebing\Soccerama\Requests).

For example, get all competitions (if using facade):

```
use Soccerama;

...

$response = Soccerama::competitions()->all();
```

The above returns an object containing a `data` array.
If you want to directly retrieve the data within `data`, change your config file: `'without_data' => true`

Get a match by its id:

```
$response = Soccerama::matches()->byId($id);
```

If you need to include other relations (check the official docs for which relations can be included):

```
$include = 'competition,matches';
// Or: $include = ['competition', 'matches'];

$response = Soccerama::seasons()->setInclude($include)->all();
```