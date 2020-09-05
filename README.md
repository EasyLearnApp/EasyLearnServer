# EasyLearnServer

Server development for EasyLearn application

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
    cp ./app/.env.example ./app/.env
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

    php artisan test
```

```
    php artisan make:test TeacherTest --unit

    php artisan make:test StudentTest --unit

    php artisan make:test GradeTest --unit
```

## Address

Open <http://127.0.0.1:8000>

## Seeder

```
    php artisan make:seeder TeachersSeeder

    php artisan make:seeder StudentsSeeder

    php artisan make:seeder ClassesSeeder
```