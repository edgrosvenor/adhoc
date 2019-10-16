# Ad Hoc Arguments for Laravel Commands

Allows the use of arguments in Laravel commands that are not defined in the signature. I'm not sure why
 you would ever want this. I know why I wanted it, but I'm reckless. So use at your own risk.
 
 `composer require edgrosvenor/adhoc`
 
 
## Installation

You can install the package via composer:

```bash
composer require edgrosvenor/adhoc
```

## Usage

Create your commands as normal, but have them extend Adhoc\Command instead. Then any arguments you send to
 the command will set as attributes on the command object. So for instance, if you do:
 
 ```php
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
