# WEB-2023-G4B Repository

## How to Run

### General Setup
Run by typing in the root:

```sh
php -S localhost:8000 -n -c "./php_ini/windows/php.ini"
```


## S01E01

???

## S01E02

- Focuses on calling methods on a class object. In each example, it creates a `SomeClass` instance and calls one of its methods.

### Notes:
- The database method requires MySQL installed and a database setup.
- All generated files (like `google_content` and `generated_image`) are in the `generated` folder.
- In the `Util` folder, there should be a `police.ttf` file (any font can work).

## S01E03

???

## S01E04

### Laravel Setup
Go to `/common/S01E04-05/iut-pw-symphony-laravel/` and type:

```sh
php artisan serve
```

### Symphony Setup
Go to `/common/S01E04-05/iut-pw-symphony-symphony/public/` and type:

```sh
php -S 127.0.0.1:8000
```

### PHPStan Analysis
To scan files for errors, go to `/common/S01E04-05/` and type:

```sh
php vendor/bin/phpstan analyse --level <file_to_scan>
```

#### Examples:
- `php vendor/bin/phpstan analyse --level max iut-pw-part1`
- `php vendor/bin/phpstan analyse --level max iut-pw-laravel`
- `php vendor/bin/phpstan analyse --level max iut-pw-symphony`

## S01E05

### Installation
In `/common/S01E04-05`, type:

```sh
composer require --dev phpunit/phpunit
```


### Running Tests
- Go to `/common/S01E04-05`
- Run with `phpunit`


