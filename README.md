# A Greenhouse app for Strata

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/greenhouse.svg?style=flat-square)](https://packagist.org/packages/astrogoat/greenhouse)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/greenhouse/run-tests?label=tests)](https://github.com/astrogoat/greenhouse/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/greenhouse/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/greenhouse/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/greenhouse.svg?style=flat-square)](https://packagist.org/packages/astrogoat/greenhouse)

---
This repo can be used to scaffold a Strata CMS App package. Follow these steps to get started:

1. Press the "Use template" button at the top of this repo to create a new repo with the contents of this greenhouse
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files
3. Remove this block of text.
4. Have fun creating your package.
---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require astrogoat/greenhouse
```

## Usage

Include the script in your Blade file:

```php
    @include('greenhouse::script')
```

When enabled this will add the greenhouse javascript. You now have access to greenhouse's placement elements.

Should you want to use the greenhouse element you can also add the following to a page, or section:
```php
    @include('greenhouse::main')
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [megan](https://github.com/astrogoat)
- [All Contributors](../../contributors)



## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
