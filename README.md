# An extension on your daily dump commands. Forget loopig dumps in a loop to get a specific amount of dumps.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/noahnxt/dump-x.svg?style=flat-square)](https://packagist.org/packages/noahnxt/dump-x)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/noahnxt/dump-x/run-tests?label=tests)](https://github.com/noahnxt/dump-x/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/noahnxt/dump-x/Check%20&%20fix%20styling?label=code%20style)](https://github.com/noahnxt/dump-x/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/noahnxt/dump-x.svg?style=flat-square)](https://packagist.org/packages/noahnxt/dump-x)

---
###How To Use:

Usual dump:
```bash
DumpX::amount($x);
```

Dump X amount of times in a loop:
```bash
DumpX::amount($x, 5); //This will dump the first 5 loops of your loop.
```

Example:
```bash
for ($x = 1; $x <= 10; $x++) {
    DumpX::amount($x, 5);
}
```
RESULT:
![dump](https://i.imgur.com/9pYzFZw.png)

---

## Installation

You can install the package via composer:

```bash
composer require noahnxt/dump-x
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

- [Noah Gillard](https://github.com/NoahNxT)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
