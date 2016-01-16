#Laravel Skeleton with AdminLTE full demo

#What's included

* [Laravel 5.2.10](http://laravel.com/). Please note, that some core files are modified, that's why framework itself is also included (Authentication and Registration traits modified).
* [AdminLTE-Laravel](https://github.com/acacha/adminlte-laravel). With slight modifications and refactoring.
* [AdminLTE 2.3.1](https://github.com/almasaeed2010/AdminLTE). You can see and AdminLTE theme preview at: http://almsaeedstudio.com/preview/. Based on 2.3.1 version, Bootstrap is additionally updated to 3.3.6 version.

###Installation

It is a complete skeleton project, so just clone the repository to your oqn place, run composer install, run migrations and that's it!

##First steps, database creation, migrations and login

Once package installed you have to follow the usual steps of any laravel project to Login to the admin interface:

- Install required dependencies with ```composer install```;
- Create a database or use pre-configured sqlite storage;
- Create/check .env file and configure database access (database name, password, etc);
- Run migrations with command $ php artisan migrate;
- All resources are pre-built and already included, but you can of course rebuild everything. Just perform required steps for installing [gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md) and run ```gulp``` within your project root;
- Register a first user and log in with it.

##AdminLTE

AdminLTE is a free premium admin control panel theme, that is based on bootstrap 3.x and created by Abdullah Almsaeed. See:

https://github.com/almasaeed2010/AdminLTE