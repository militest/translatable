- [![Starts](https://img.shields.io/github/stars/laravelir/translatable?style=flat&logo=github)](https://github.com/laravelir/translatable/forks)
- [![Forks](https://img.shields.io/github/forks/laravelir/translatable?style=flat&logo=github)](https://github.com/laravelir/translatable/stargazers)
  [![Total Downloads](https://img.shields.io/packagist/dt/laravelir/translatable.svg?style=flat-square)](https://packagist.org/packages/laravelir/translatable)

- [English](README-en.md)

# پکیج لاراولی

یه پکیج خفن

### نصب

1.  برای نصب در مسیر روت پروژه خود دستور زیر را در ریشه پروژه اجرا کنید

```
composer require laravelir/translatable
```

2. Open your config/translatable.php and add the following to the providers array:

```php
Laravelr\Translatable\Providers\TranslatableServiceProvider::class,
```

3. Run the command below to publish the package config file config/translatable.php:

```
php artisan vendor:publish
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [miladimos](https://github.com/miladimos)
- [All Contributors](../../contributors)

## License

