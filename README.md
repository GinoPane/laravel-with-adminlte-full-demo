#Laravel Skeleton With AdminLTE Full Demo

#What's included

* [Laravel 5.2.26](http://laravel.com/). Default auth controllers are modified.
* [AdminLTE-Laravel](https://github.com/acacha/adminlte-laravel). With slight modifications and refactoring.
* [AdminLTE 2.3.1](https://github.com/almasaeed2010/AdminLTE). You can see and AdminLTE theme preview at: http://almsaeedstudio.com/preview/. Based on 2.3.1 version, Bootstrap is additionally updated to 3.3.6 version.

###Installation

It is a complete skeleton project, so just clone the repository to your own place, perform some steps from below list and that's it!

##First steps, database creation, migrations and login

Once package installed you have to follow the usual steps of any Laravel project to log in to the admin interface:

- Install required dependencies with ```composer install```;
- Create a database or use pre-configured sqlite storage;
- Create/check .env file and configure database access (database name, password, etc);
- Update database seeders, especially UserTableSeeder, which creates the first default user;
- Run migrations with command ```$ php artisan migrate```;
- Run database seeds: ```$ php artisan db:seed``` (included sqlite database file 'default.database.sqlite' contains already migrated and seeded database, so you can use it from scratch if you wish, just rename the file to the name from your configuration, by default it is 'database.sqlite');
- All resources are pre-built and already included, but you can of course rebuild everything. Just perform required steps for installing [gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md) and run ```gulp``` within your project root;
- Register the first user or use the existing one (User admin@laravel.loc with password 'admin') and log in with it.

##AdminLTE

AdminLTE is a free premium admin control panel theme, that is based on bootstrap 3.x and created by Abdullah Almsaeed. See: https://github.com/almasaeed2010/AdminLTE