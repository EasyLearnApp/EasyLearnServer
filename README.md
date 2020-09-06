<p align="center">
    <img src="https://img.shields.io/github/license/MagicalStrangeQuark/EasyLearnServer"/>
    <img src="https://img.shields.io/github/last-commit/MagicalStrangeQuark/EasyLearnServer"/>
    <img src="https://img.shields.io/circleci/build/github/MagicalStrangeQuark/EasyLearnServer/master"/>
    <img src="https://img.shields.io/github/languages/code-size/MagicalStrangeQuark/EasyLearnServer"/>
    <img src="https://img.shields.io/github/issues/MagicalStrangeQuark/EasyLearnServer"/>
</p>

<h1 align="center">EasyLearnServer</h1>

<p align="center">Server development for <strong>EasyLearn</strong> application</p>

## Laravel

<https://laravel.com>

```
    composer create-project --prefer-dist laravel/laravel app
```

## Controllers, Models and Migrations

```
    php artisan make:model Teacher -mcr

    php artisan make:model Student -mcr

    php artisan make:model Grade -mcr
```

## Database

```
    sudo mysql

    DROP USER 'api'@'localhost';

    CREATE DATABASE api;

    CREATE USER 'api'@'localhost' IDENTIFIED BY 'P@ssw0rd';

    REVOKE ALL, GRANT OPTION FROM api@localhost;

    GRANT SELECT, INSERT, DROP, CREATE, ALTER, UPDATE, DELETE ON api.* TO api@localhost;

    FLUSH PRIVILEGES;
```

## Running

```
    git clone https://github.com/MagicalStrangeQuark/EasyLearnServer
```

```
    cd app

    composer install
```

Configure the database, copying the .env.example to .env and setting the database

```
    cp .env.example .env
```

```
    php artisan migrate:fresh --seed
    
    php artisan key:generate

    php artisan serve
```

## Tests

Enable SQLite Driver in /etc/php/php.ini

```
    touch ./database/database.sqlite

    php artisan config:cache

    php artisan config:clear

    php artisan config:cache --env=testing

    php artisan migrate --database=sqlite

    php artisan key:generate

    php artisan test
```

```
    php artisan make:test TeacherTest --unit

    php artisan make:test StudentTest --unit

    php artisan make:test GradeTest --unit
```

## Heroku Guide

<https://dev.to/nedsoft/how-to-host-a-laravel-app-with-mysql-database-on-heroku-52np>

## Connect to Database

```
    mysql --user apieasylearn --host db4free.net --database apieasylearn -p
```

## Deploy Routes

### Teachers

#### Index

https://easy-learn-api.herokuapp.com/api/v1/teachers

#### Show

https://easy-learn-api.herokuapp.com/api/v1/teachers/{:n}

### Students

#### Index

https://easy-learn-api.herokuapp.com/api/v1/students

#### Show

https://easy-learn-api.herokuapp.com/api/v1/students/{:n}

### Grades

#### Index

https://easy-learn-api.herokuapp.com/api/v1/grades

#### Show

https://easy-learn-api.herokuapp.com/api/v1/grades/{:n}

## Address

Open <http://127.0.0.1:8000>

## Seeder

```
    php artisan make:seeder TeachersSeeder

    php artisan make:seeder StudentsSeeder

    php artisan make:seeder ClassesSeeder
```