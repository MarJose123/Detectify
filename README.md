# Easily track and analyze website traffic in your Laravel app. Capture details like IP address, browser, and geo-location, and block unwanted access using IP filtering. Future versions will enhance detection capabilities, including bots and suspicious activity.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marjose123/detectify.svg?style=flat-square)](https://packagist.org/packages/marjose123/detectify)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/marjose123/detectify/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/marjose123/detectify/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/marjose123/detectify/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/marjose123/detectify/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marjose123/detectify.svg?style=flat-square)](https://packagist.org/packages/marjose123/detectify)

###### _Easily track and analyze website traffic in your Laravel app. Capture details like IP address, browser, and geo-location, and block unwanted access using IP filtering._

## Installation

You can install the package via composer:

```bash
composer require marjose123/detectify
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="detectify-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="detectify-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="detectify-views"
```

## Usage

```php
$detectify = new MarJose123\Detectify();
echo $detectify->echoPhrase('Hello, MarJose123!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [MarJose123](https://github.com/MarJose123)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
