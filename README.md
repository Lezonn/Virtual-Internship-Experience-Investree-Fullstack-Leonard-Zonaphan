# Article - API
A restful API with jwt authentication using laravel passport. this restful API able to manage request to CREATE, READ, UPDATE, DELETE articles.

## How to run project in your local
  <strong>Configure the database</strong>
  * Open XAMPP and start Apache & MySQL
  * Open phpmyadmin
  * Create new database article-api in phpmyadmin

  <strong>Setup the project</strong>
  * Clone project to any folder
  * Open git bash / command prompt in your project folder
  * Install project dependencies from composer
    ```
    composer install
    ```
  * Copy .env file template
    ```
    copy .env.example .env
    ```
  * Open project in visual studio code
  * Open .env file, update database configuration like below<br />
    ```
    DB_DATABASE=article-api
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    Write command below in visual studio code terminal / command prompt / git bash at your project folder again<br />
  * Generate APP_KEY in .env
    ```
    php artisan key:generate
    ```
  * Create database table and dummy data
    ```
    php artisan migrate:fresh --seed 
    ```
  * Create encryption keys to generate secure access tokens.
    ```
    php artisan passport:install
    ```
  * Run the application
    ```
    php artisan serve
    ```
  * For default xampp configuration you can access the website at the link below <br />
    (http://localhost:8000/)
    
  <strong>Run unit test</strong>
  * To run unit test you need to write command in visual studio code terminal / command prompt / git bash at your project folder <br />
    ```
    vendor/bin/phpunit
    ```
    If you run unit test you need to do migration again to populate table with dummy data.
## Tools
- Bootstrap 5
- Composer
- PHP 8.X
- Laravel 9.x
- XAMPP
- Postman

## Authors
| Name                            |
| :-----------------------------  |
| Leonard Zonaphan                |
