

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Step 1 - Clone the repository

We can use git on your local computer to clone it from github or gitlab onto your local computer in a folder location of your choice. Note: Make sure you have git installed locally on your computer first.

git clone link_to_repository

Step 2 - Branch off the main branch

You will need to be inside that project folder to branch off. So change directory to enter the cloned project folder.

cd project_folder

Then branch off:

git checkout -b new_branch_name

Step 3 - Install Composer Dependencies

Whenever you clone a new Laravel project you must now install all of the project dependencies.

composer install

Note: If you run into any errors during the install process. Run:

composer update

or

php composer.phar update

Step 4 - Create a copy of your .env file

We will make a copy of the .env.example file and create a .env file that we will edit inorder to configure the database.

cp .env.example .env

Step 5 - Generate an app encryption key

Laravel requires you to have an app encryption key which is randomly generated and stored in your .env file. The app will use this encryption key to encode application cookies and password hashes.

php artisan key:generate

If you check the .env file again, you will see a long random string of characters in the APP_KEY field. If you dont see the string then use the second command below to get the string, copy it and paste it in the .env file where APP_KEY=;

or

php artisan key:generate –show

Step 6 - Create a database for your project.

Step 7 - In the .env file, add database information   To allow Laravel to connect to the database that you just created in the previous step, we must add the connection credentials in the .env file to match the credentials of the database you just created. This will allow us to run migrations and seed the database.

- DB_HOST=localhost
- DB_PORT=3306
- DB_DATABASE=your_database_name
- DB_USERNAME=your_username
- DB_PASSWORD=your_userpassword

To allow Laravel to connect to the email 

- MAIL_MAILER=smtp
- MAIL_HOST=smtp.gmail.com
- MAIL_PORT=587
- MAIL_USERNAME=your_email
- MAIL_PASSWORD=your_App_password
- MAIL_ENCRYPTION=tls
- MAIL_FROM_ADDRESS=your_email
- MAIL_FROM_NAME="${APP_NAME}"
- 
Depending on your application, you might need to make some changes to your app.php file in the config folder such as the timezone. If you do make any changes be sure to flush the cache.

 - php artisan optimize:clear
 - php artisan config:clear
 - php artisan cache:clear
 - php artisan config:cache
 
Step 8 - Migrate the database

Once your credentials are in the .env file, now you can migrate your database.

php artisan migrate

Note:check your database to see the if all was migrated as expected.

Step 9 - Seed the database

If your project has the seeding file setup then, seeding will fill your database with dummy data.

After the migrations are complete and you have the database structure required, then you can seed the database

php artisan db:seed

You may use the –class option to specify a specific seeder class to run individually:

php artisan db:seed –class=TrainSeeder

This will fill only the specified table in the database. Check your database to confirm the if the data has been inserted successfully.
## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
