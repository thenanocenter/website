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

Copy .env.example to .env

Edit the following lines to:

`APP_URL=http://thenanocenter.vm`

`DB_HOST=database`
`DB_DATABASE=homestead`

Run the commands:

`cd` to the project directory

`docker run --rm -v $(pwd):/app composer install`

`docker-compose up`

That will take a while the first time it is run. 

When docker-compose containers are up (you will see console logs from app_1, database_1 etc. )... In a new terminal window, run:

`docker-compose exec app php artisan key:generate`

An app key will be generated and saved in .env

`docker-compose exec app php artisan storage:link`

`docker-compose exec app php artisan migrate`

Now access the site at http://thenanocenter.vm or http://localhost

For database import / export use phpmyadmin at http://thenanocenter.vm:8080

To stop the docker containers, go to the docker-compose window, hit 'ctrl + c' or run `docker-compose stop`

To start the docker container, run `docker-compose up`

This includes a webpack watch task

The watch task outputs developer assets (un-minified)

Before committing your changes you may build the assets for production by running:

`docker-compose exec frontend npm prod`