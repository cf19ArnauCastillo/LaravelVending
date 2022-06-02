<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Software Requerido
   - Npm 
   - Laravel 9.0
   - MariaDB o Mysql
   - Editor, preferiblemente Visual Studio Code

## Como lanzar el proyecto  
    Abrimos el terminal de linux, vamos a la carpeta donde queremos lanzar la aplicación y ejecutamos:
    - sudo apt install php
    - sudo apt-get install php-xml
    - sudo apt install-php-curl
    - sudo apt install git
    - sudo apt install composer
    - composer update
    - git clone https://github.com/cf19ArnauCastillo/LaravelVending.git
    Ejecutamos 'cd /LaravelVending', una vez dentro de la carpeta ejecutamos:
    - composer install
    - cp .env.example .env
    - sudo apt install mariadb-server
    - sudo apt-get install php-mysql
    - sudo mysql
    - crate database vending;
    - grant all on *.* to 'usuario'@'localhost' identified by 'contrasena' with grant option;
    - flush privileges;
    Una vez creada abrimos el archivo .env y lo editamos añadiendo la siguiente información  
    - DB_HOST=localhost
    - DB_DATABASE=vending
    - DB_USERNAME=usuario
    - DB_PASSWORD=contrasena
    Una vez editado lo guardamos y lanzamos los siguientes comandos en la terminal:
    - php artisan key:generate
    - php artisan migrate
    Y para lanzar la aplicación ejecutaremos:
    - php artisan serve
    
## Usuario
    - Al iniciar la aplicación en la parte superior derecha puedes registrarte para tener tu propio usuario.
