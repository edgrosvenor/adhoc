# Ad Hoc Arguments for Laravel Commands
![StyleCI](https://github.styleci.io/repos/214572606/shield?branch=master)
![ChipperCI](https://app.chipperci.com/projects/21f89407-1fb4-468c-9c3e-c4661ae0dc89/status/master)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/edgrosvenor/adhoc.svg?style=flat-square)](https://packagist.org/packages/edgrosvenor/adhoc)

Allows the use of arguments in Laravel commands that are not defined in the signature. I'm not sure why
 you would ever want this. I know why I wanted it, but I'm reckless. So use at your own risk.

## Installation

You can install the package via composer:

```bash
composer require edgrosvenor/adhoc
```

## Usage

Create your commands as normal, but have them extend Adhoc\Command instead. Then any arguments you send to
 the command will set as attributes on the command object. So for instance, if you do:
 
 ```bash
php artisan do:something adhoc=fun
```
where adhoc is not in the signature of the command, in the execute method you can access it like this:
```php
$this->adhoc; // fun
```

## Todo
I would like to find a cleaner way to extract the arguments. Without doing naughty things to the Symfony console, I
 can only seem to get the input as a string so I have to parse it by hand. It works, but I don't like the way it loks.
 
I also don't put arguments into the arguments array that Laravelians usually use to get arguments passed to their
 commands. So if you reach for `$this->arguments('myadhocargument')` it won't be there. I think mabye I should add it.
 
Finally, I think I might have a personal use case for ad hoc options. But until I am happier with how I'm extracting
 arguments I don't want to mess with options.

## Credits

- [Ed Grosvenor](https://github.com/exactsports)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
