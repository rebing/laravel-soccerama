# Laravel Sportmonks Soccer API

Laravel wrapper for [Sportmonks](https://www.sportmonks.com/sports/soccer) (live) score API calls. 
Documentation for the API can be found [here](https://www.sportmonks.com/sports/soccer)

## Installation

**1-** Require the package via Composer in your `composer.json`.
```json
{
  "require": {
    "kirill-latish/laravel-sportmonks-soccer": "^2.0"
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
Sportmonks\SoccerAPI\SoccerAPIServiceProvider::class,
```

**4-** Add the facade to your `app/config/app.php` file
```php
'SoccerAPI' => Sportmonks\SoccerAPI\Facades\SoccerAPI::class,
```

**5-** Publish the configuration file

```bash
$ php artisan vendor:publish --provider="Sportmonks\SoccerAPI\SoccerAPIServiceProvider"
```

**6-** Review the configuration file and add your token (preferably through env: `'api_token' => env('API_TOKEN')` )

```
config/soccerapi.php
```

**7-** Review the configuration file and add your timezone (preferably through config file: `'timezone' => config('app.timezone')` )

```
config/soccerapi.php
```

## Usage

Refer to the official [docs](https://www.sportmonks.com/sports/soccer) as to which calls can be made and check the calls in traits under [Sportmonks\SoccerAPI\Requests](Sportmonks\SoccerAPI\Requests).

For example, get all leagues (if using facade):

```
use SoccerAPI;

...

$response = SoccerAPI::leagues()->all();
```

The above returns an object containing a `data` array.
If you want to directly retrieve the data within `data`, change your config file: `'without_data' => true`

Get a match by its id:

```
$response = SoccerAPI::fixtures()->byId($id);
```

If you need to include other relations (check the official docs for which relations can be included):

```
$include = 'league,fixtures';
// Or: $include = ['league', 'fixtures'];

$response = SoccerAPI::seasons()->setInclude($include)->all();
```
