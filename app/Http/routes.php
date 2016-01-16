<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['auth']], function () {
        $this->get('demo/{section?}', 'DemoController@index')->name('app.demo');
    });

    // Authentication Routes...
    $this->get('login', 'Auth\AuthController@showLoginForm')->name('auth.login');
    $this->post('login', 'Auth\AuthController@login');
    $this->get('logout', 'Auth\AuthController@logout')->name('auth.logout');

    // Registration Routes...
    $this->get('register', 'Auth\AuthController@showRegistrationForm')->name('auth.register');
    $this->post('register', 'Auth\AuthController@register');

    // Password Reset Routes...
    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm')->name('auth.reset');
    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail')->name('auth.email');
    $this->post('password/reset', 'Auth\PasswordController@reset');
});
