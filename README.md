<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Test

This is a larvel coding testing for the role of backend developer, this laravel Test takes some json payload through API request and run some custom validation on the payload

### Payload Sample

```
{
    "first_name": {
        "value": "John",
        "rules": "alpha|required"
    },
    "last_name": {
        "value": "Doe",
        "rules": "alpha|required"
    },
    "email": {
        "value": "Doe",
        "rules": "email"
    },
    "phone": {
        "value": "08175020329",
        "rules": "number"
    }
}
```

### Techonologies

- PHP v8.1
- Git
- composer
- postman

## How to install and run on localhost

- Run `git clone git@github.com:OfficialOzioma/my-laravel-test.git`
- Run `cd my-laravel-test`
- Run `composer install`
- Run `php artisan serve`
- Send a POST request to `http://127.0.0.1:8000/api/user` on the postman

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
