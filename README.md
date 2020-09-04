# EasyLearnServer

Server Development for the EasyLearn Project

## CodeIgniter

<https://laravel.com>

```
    composer create-project --prefer-dist laravel/laravel app
```

## Controllers

```
    php artisan make:controller TeacherController --resource
```

## Models

```
    php artisan make:model Teacher
```

## Database

```
    sudo mysql

    DROP USER 'api'@'localhost';

    CREATE DATABASE api;

    CREATE USER 'api'@'localhost' IDENTIFIED BY 'P@ssw0rd';

    GRANT ALL PRIVILEGES ON api . * TO 'api'@'localhost';

    FLUSH PRIVILEGES;
```

## Migrations

```
    php artisan make:migration CreateTeachersTable
```

## Running

```
    cd app

    composer install

    php artisan migrate:fresh --seed
    
    php artisan key:generate

    php artisan test
    
    php artisan serve
```

## Tests

Enable SQLite Driver in /etc/php/php.ini

php artisan migrate

php artisan config:cache

php artisan config:clear

php artisan config:cache --env=testing

## Address

<http://127.0.0.1:8000>

## Seeder

```
    php artisan make:seeder TeachersSeeder
```