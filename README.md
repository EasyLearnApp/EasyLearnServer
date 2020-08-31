# EasyLearnServer

Server Development for the EasyLearn Project

## CodeIgniter

<https://codeigniter.com>

```
    composer create-project codeigniter4/appstarter app
```

## Running

```
    cd app
    
    php spark serve
```

## Address

<http://localhost:8080>

## Database

```
    sudo mysql

    DROP USER 'codeigniter'@'localhost';

    CREATE DATABASE codeigniter;

    CREATE USER 'codeigniter'@'localhost' IDENTIFIED BY 'P@ssw0rd';

    GRANT ALL PRIVILEGES ON codeigniter . * TO 'codeigniter'@'localhost';

    FLUSH PRIVILEGES;
```

## Migrations

```
    php spark migrate
    
    php spark migrate:create <filename>

    php spark migrate:rollback
```