## Core Buster Movie Rental Application

### BACKGROUND

This repository is a modern take on an exercise from Martin Fowler's book, "Refactoring." I was already knowledgeable
of this exercise and decided to write this application as a modern take on the exercise while doing a coding test for a 
prospective employer.

I wrote this application using the following technologies:

- **`PHP version 7.3.25`** 
- **`MySQL version 5.7.24`** 
- **`Laravel version 7.29`** 
- **`Vue.js version 2.5.17`** 
- **`Bootstrap version 4.0.0`**

### CODE SETUP

This application uses Lando to set up a local development environment. While I do have experience writing custom
Docker compose files, as well, I have found Lando extremely helpful and reliable for getting a local dev environment up 
and running rather quickly and smoothly. 

- Install Lando: https://docs.lando.dev/basics/installation.html
- Install Composer: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
- Install Node Package Manager: https://docs.npmjs.com/downloading-and-installing-node-js-and-npm

Unpack contents of core_buster.zip

In a terminal, run the following:

`lando start`

To see the web and database settings, run the following:

`lando info`

See if you can access the website at http://core-buster.lndo.site/.

If the website loads correctly, use the following to log into the application:

- E-mail Address: admin@corebuster.com
- Password: admin

If the website did not load correctly in a browser, please check the settings in the `~/.env` file and also in the 
`~/config/database.php` file to ensure all settings are correct.

### DATABASE SETUP

The database connection info is found in the `~/.env` file and in the `~/config/database.php` files.

Create a new database connection from the settings in those configuration files and create a new database for 
`core_buster` in your MySQL IDE of choice. 

I have included a standalone SQL file you can import into your IDE of choice, `core_buster.sql`, or you can run the Laravel/Eloquent migrations:

`lando artisan migrate`

### DEPENDENCIES

Run the following to install dependencies:

`lando composer install`

`npm install`

`npm run dev`

If you are curious as to what dependency packages I chose to use for this application, feel free to take a look at 
`composer.json` and `package.json`.

After performing the above tasks, you should have a working Core Buster application and be able to login and see the 
data being returned from the database. 

### EXAMINING CODE

The main files for examining logic in this application include:

- `database/migrations/*`
- `app/Http/Controllers/HomeController.php`
- `app/Providers/RentalsServiceProvider.php`
- `app/Providers/RepositoryServiceProvider.php`
- `app/Repositories/RentalsRepository.php`
- `resources/js/components/Rentals.vue`
- `resources/js/app.js`
- `routes/web.php`
