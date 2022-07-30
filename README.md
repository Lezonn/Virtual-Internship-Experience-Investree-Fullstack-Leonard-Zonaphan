# Article - UI
A website to view articles made by anyone. To create an article we need to create an account and login. We can also add categories to our articles.

## How to run project in your local
  <strong>Configure the database</strong>
  * Open XAMPP and start Apache & MySQL
  * Open phpmyadmin
  * Create new database article-ui in phpmyadmin

  <strong>Setup the project</strong>
  * Clone project to any folder
  * Open git bash / command prompt in your project folder
  * Write command below <br />
    composer install <br />
    copy .env.example .env <br /><br />
  * Open project in visual studio code
  * Open .env file, update database configuration like below<br />
    DB_DATABASE=article-ui<br />
    DB_USERNAME=root<br />
    DB_PASSWORD= <br /><br />
  * Write command below in visual studio code terminal / command prompt / git bash <br /><br />
    Generate APP_KEY in .env
    ```
    php artisan key:generate
    ```
    Create database table and dummy data
    ```
    php artisan migrate:fresh --seed 
    ```
    Run the application
    ```
    php artisan serve
    ```
  * For default xampp configuration you can access the website at the link below <br />
    (http://localhost:8000/)
    
  <strong>Run unit test</strong>
  * To run unit test you need to write command in visual studio code teriman / command prompt / git bash at your project path <br />
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

## Authors
| Name                            |
| :-----------------------------  |
| Leonard Zonaphan                |
