# CheckMobi

[![Latest Version on Packagist](https://img.shields.io/packagist/v/myckhel/checkmobi.svg?style=flat-square)](https://packagist.org/packages/myckhel/checkmobi)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
![Tests Status](https://github.com/myckhel/laravel-checkmobi/actions/workflows/php.yml/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/myckhel/checkmobi.svg?style=flat-square)](https://packagist.org/packages/myckhel/checkmobi)

## [CheckMobi Doc Link](https://checkmobi.com/documentation.html)

## Install
Via Composer
`$ composer require myckhel/checkmobi`

## Setup
The package will automatically register a service provider.

You need to publish the configuration file:

```php artisan vendor:publish --provider="Myckhel\CheckMobi\CheckMobiServiceProvider"```

This is the default content of the config file ```checkmobi.php```:

```php
<?php

return [
  "secret_key"          => env("CHECKMOBI_SECRET_KEY"),
  "retry_after"         => 120, // option to set the retry limit for each phone number verification
    /* coming soon */
  "route_middleware"    => 'auth:api', // For injecting middleware to the package's routes
];
```
Update Your Projects `.env` with:
```bash
CHECKMOBI_SECRET_KEY=XXXXXXXXXXXXXXXXXXXX
```
Run the database migration
`php artisan migrate`

## Available Api's
```php
use CheckMobi;
use Myckhel\CheckMobi\Support\MissedCall;

CheckMobi::requestValidation($params);

CheckMobi::verifyValidation($params);

CheckMobi::getAccountDetails($params);

CheckMobi::getCountriesList($params);

CheckMobi::getPrefixes($params);

CheckMobi::checkNumber($params);

CheckMobi::validationStatus($validationId, $params);

CheckMobi::sendSMS($params);

CheckMobi::getSmsDetails($params);

CheckMobi::placeCall($params);

CheckMobi::getCallDetails($callId, $params);

CheckMobi::hangUpCall($callId, $params);

MissedCall::request($params);

MissedCall::verify($params);
```

## API Usage Example

### MissedCall

```php
use Myckhel\CheckMobi\Support\MissedCall;
use CheckMobi;

class VerificationController {

  public function request(){

    return MissedCall::request([
        'number'                  => '+1 234 567 890', // E. 164 format
        'platform'                => 'web',
    ]);
  }

  public function verify(){

    return MissedCall::verify([
        'id'    => 'SMS-FF9137C1-4D39-42B0-BE86-4B5A96CE13BD', // E. 164 format
        'pin'   => '9711',
    ]);
  }

  public function exampleCheckMobi(){

    $validationResponse = CheckMobi::requestValidation([
          'number'                  => '+1 234 567 890', // E. 164 format
          'type'                    => 'reverse_cli',
          'platform'                => 'web',
    ]);

    $verificationResponse = CheckMobi::verifyValidation([
      "id": "SMS-FF9137C1-4D39-42B0-BE86-4B5A96CE13BD", // $validationResponse->id
      "pin":"9711"
    ]);
  }
}
```

#### Response Example
Request
```json
{
  "id": "RCL-B772A954-7E63-4114-8087-BAF415B5003F",
  "type": "reverse_cli",
  "pin_hash": "6f8246002c1c5967ffc5e0ec80f2d7b59a60b1e3",
  "validation_info": {
      "country_code": 40,
      "country_iso_code": "RO",
      "carrier": "Orange",
      "is_mobile": true,
      "e164_format": "+40743XXXXXX",
      "formatting": "+40 743 XXX XXX"
  }
}
```
Verify
```json
{
    "number":"+40XXXXXXXXX",
    "validated":true,
    "validation_date":1416946931,
    "charged_amount": 0.1
}
```

## Todos
- coming soon

## Testing
Run the tests with:

``` bash
vendor/bin/phpunit
```

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [myckhel](https://github.com/myckhel)
- [All Contributors](https://github.com/myckhel/checkmobi/contributors)

## Security
If you discover any security-related issues, please email myckhel1@hotmail.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
