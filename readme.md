### Welcome!

This template will be your guide to display your skill set to developers at Rimsys.
Since this is a front-end role, we have built the API for you although you are free to adjust the API as you see fit. We will be focused on the implementation of your resume and will have questions as you move along in your presentation.

### This Project utilizes the following core technologies:
* [Nuxt.js](https://nuxtjs.org/)
* [Vue.js](https://vuejs.org/)
* [TypeScript](https://www.typescriptlang.org/)
* [Tailwind CSS](https://tailwindcss.com/)
* [Laravel](https://laravel.com/)

### Prerequisites
* Have [PHP](https://www.php.net/) installed on your computer
* Have [Composer v2.x](https://getcomposer.org/download/) installed on your computer
* Have [NodeJS v16.x](https://nodejs.org/en/) installed on your computer

### Installation
* Clone from GitHub Repo
* Run `yarn` to install front-end dependencies and `composer install` to install back-end dependencies
* copy `.env.example` to `.env`. This is how the client and server will communicate.

### Connecting to a database:
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

### Resume API Routes:
  * GET Request to retrieve your resume: `$axios.get('resume/1')`
  * PUT Request to update your resume: `$axios.put('resume/1')`
### Experience API Routes:
  * GET Request to retrieve your experience: `$axios.put('resume/1/experiences')`
  * PUT Request to update an experience: `$axios.put('/resume/1/experiences/2')`
  * DELETE Request to delete an experience: `$axios.delete('/resume/1/experiences/2')`
