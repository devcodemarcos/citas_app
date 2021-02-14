<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Citas App

Sigue las siguentes instrucciones en orden acendente para iniciar el proyecto:

- $ git clone https://github.com/devcodemarcos/citas_app.git
- $ composer install
- $ cp .env.example .env

En el archivo **.env** colocar el valor **citas_db** en la constante **DB_DATABASE** ej: **DB_DATABASE=citas_db**

- $ php artisan key:generate
- $ php artisan migrate
- $ php artisan db:seed
- $ npm install
- $ npm run dev