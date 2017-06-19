<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Tchat Application Laravel 

Tchat is a web application chat network

## Run Tchat
1- create database in MySQL PHP MY ADMIN 

2- make migrate to database via this command in terminal php artisan migrate to migrate database and run the project

3- you can run Tchat via localhost[http://localhost/Tchatf/public/login](http://localhost/Tchatf/public/login)

- or

4- you can run Tchat via artisan command (php artisan serve)

## project structure files 

1- using Default login and registration system in laravel

2- add auth to routes

3- models files in /app/(messages.php - messages_replay.php)

4- controllers files in app/http/controllers/homecontrollers

5- views files in resources/views/(auth & layout)->this for registration and login default in laravel and (home.blade.php-messages.blade.php) this contain our chat body and styles..etc

6- routes in routes/web.php

