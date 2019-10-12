# NOT YET READY
# Ad Hoc Options and Arguments for Laravel Commands

Allows the use of arguments and options in Laravel commands that are not defined in the signature. I'm not sure why
 you would ever want this. I know why I wanted it, but I'm reckless. So use at your own risk.
 
 `composer require edgrosvenor/adhoc`
 
 
## Installation

You can install the package via composer:

```bash
composer require edgrosvenor/adhoc
```

## Usage

Creat your commands as normal, but have them extend Adhoc\Command instead. Then any arguments or options you send to
 the command will be read into their respective arrays even if they aren't on the signature.

## Credits

- [Ed Grosvenor](https://github.com/exactsports)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
