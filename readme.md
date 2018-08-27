# The Nano Center

The Nano Center Website runs off Laravel 5.6. 

While it may be possible to run via a local XAMPP or MAMP setup, the two recommended local hosting solutions (Vagrant and Docker) are [outlined at the bottom under the Server Setup section](#server-setup)

If you already have a local server setup, you can continue with installation below:

## Installation

```
composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
```

Make sure you have a database created to be used

**Then fill out your database information in the newly generated .env file** 

then run the database migrations to create the needed tables for the application:

```
php artisan migrate
```

## Post Installation Database Population

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

## Assets and Frontend

Webpack (Using [Laravel Mix](https://laravel.com/docs/5.6/mix)) is used for compiling CSS, JS, and Images:

**CSS** is generated via Sass, **be careful not to directly edit /public/css/app.css as your work will likely be overwritten** the next time the file is generated. 
Instead, edit /resources/sass/app.scss and use the npm script below to generate the updated public assets

**Javascript** is also compiled using NPM, **be sure to edit javascript code in /resources/js/app.js, and not in the public directory**

**Images** should also be added to /resources/img, and not the public directory as they will be copied during the NPM script

When your resource files have been updated, you can generate the public files by running the command:

```
npm run dev
```

You can learn more about Laravel Mix here - https://laravel.com/docs/5.6/mix

### Fonts

Fonts are loaded by typekit, use a local development domain of thenanocenter.vm or localhost These domains are whitelisted.

# Server Setup

The two recommended methods for hosting locally are Laravel Homestead or Docker

## Vagrant - Laravel Homestead

[Laravel Homestead Setup Information](https://laravel.com/docs/5.6/homestead)

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