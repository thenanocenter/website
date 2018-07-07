# The Nano Center

Laravel 5.6

## Installation

```
composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
```

Fill out your database information in .env then run the database migrations

```
php artisan migrate
```

## Post Installation

Once installed, setup the default roles and permissions via the command:

```
php artisan init:roles
```

You can add yourself as an administrative user with the command

```
php artisan make:admin
```

Finally, you can populate your database with fake data by using

```
php artisan db:seed
```

## Assets

### Fonts

Fonts are loaded by typekit, use a local development domain of thenanocenter.vm or localhost These domains are whitelisted.


## Docker

Install docker and docker compose

Add 127.0.0.1     thenanocenter.vm to your hosts file

On osx `sudo nano /etc/hosts` and `sudo killall -HUP mDNSResponder`

Run the commands:

`docker run --rm -v $(pwd):/app composer install`

`docker-compose up`

`docker-compose exec app php artisan key:generate`

`docker-compose exec app php artisan storage:link`

`docker-compose exec app php artisan migrate`

To stop the docker containers, hit 'ctrl + c' run `docker-compose stop`

To start the docker container, run `docker-compose up`