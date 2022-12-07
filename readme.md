### Welcome!

This template will be your guide to display your skill set to developers at Rimsys.
Since this is a front-end role, we have built the API for you although you are free to adjust the API as you see fit.
We will be focused on the implementation of your resume and will have questions as you move along in your presentation.

### Installation

* Clone from GitHub Repo
* Run `yarn` to install front-end dependencies and `composer install` to install back-end dependencies
* copy `.env.example` to `.env`. This is how the client and server will communicate.

## Connecting to a database:
* Create a MySQL database
* Go into your `.env` file and fill out the following secrets:
  * `DB_DATABASE=`
  * `DB_USERNAME=`
  * `DB_PASSWORD=`

### Starting up your Local Environment
* Run `yarn seed` and you will see data is populated into your database
* Run `yarn dev` in one terminal for our Nuxt dev setup
* Run `yarn api` (alias for `./artisan serve`) in another terminal for our Laravel API

### Packages installed that you can utilize if you choose to
* nuxt-tailvue
* @nuxtjs/axios
* @nuxtjs/tailwindcss
* typescript
