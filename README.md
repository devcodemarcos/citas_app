<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Citas App

Sigue las instrucciones en orden ascendente para iniciar el proyecto:

- $ git clone https://github.com/devcodemarcos/citas_app.git
- $ cd citas_app
- $ composer install
- $ cp .env.example .env

En el archivo **.env** colocar el valor **citas_db** en la constante **DB_DATABASE**

Crear la base de datos en MySQL con el nombre de **citas_db**

- $ php artisan key:generate
- $ php artisan migrate
- $ php artisan db:seed
- $ npm install
- $ npm run dev

Omite el siguiente paso si estas usando un entorno como xampp, laragon, etc...

- $ php artisan serve
