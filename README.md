# Bugloos Challenge

A simple Laravel application which uses `habibeh1992/converter` package.

## How to run

First, install the requirements using composer:

```
composer install
```

Then, create the `.env` file and then generate the app key for the tests:

```
cp .env.example .env
php artisan key:generate
```

Finally, you can run the tests:

```
php artisan test
```
