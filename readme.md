# CheckMobi

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/myckhel/check-mobi.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/myckhel/check-mobi.svg?style=flat-square)](https://packagist.org/packages/myckhel/check-mobi)

## Install
Via Composer
`$ composer require myckhel/checkmobi`

## Setup
The package will automatically register a service provider.

You need to publish the configuration file:

```php artisan vendor:publish --provider="Myckhel\CheckMobi\CheckMobiServiceProvider"```

This is the default content of the config file ```checkmobi.php```:

```<?php

return [
  "secret_key"          => env("CHECKMOBI_SECRET_KEY"),
  "route_middleware"    => 'auth:api', // For injecting middleware to the package's routes
  "retry_after"         => 36000, // flag verification expiry time in seconds
];
```
Update Your Projects `.env` with:
```
CHECKMOBI_SECRET_KEY=XXXXXXXXXXXXXXXXXXXX
```

## Basic Usage
```
use CheckMobi;

CheckMobi::requestValidation([
      'number'                  => '+1 234 567 890', // E. 164 format
      'type'                    => 'reverse_cli',
      'platform'                => 'web',
]);

CheckMobi::verifyValidation([
  "id": "SMS-FF9137C1-4D39-42B0-BE86-4B5A96CE13BD", 
  "pin":"9711"
]);
```

## Available Api's Model
```
Myckhel\CheckMobi\Support\MissedCall;
```

## API Usage

### MissedCall

```
use Myckhel\CheckMobi\Support\MissedCall;

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
```
#### Response
Request
```
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
```
{
    "number":"+40XXXXXXXXX",
    "validated":true,
    "validation_date":1416946931,
    "charged_amount": 0.1
}
```

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
- [All Contributors](https://github.com/myckhel/check-mobi/contributors)

## Security
If you discover any security-related issues, please email myckhel1@hotmail.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
