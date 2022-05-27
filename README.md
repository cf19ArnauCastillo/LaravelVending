<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Software Requerido
   - Npm 
   - Laravel 9.0
   - MariaDB o Mysql
   - Editor, preferiblemente Visual Studio Code

## Como lanzar el proyecto  
    Abrimos el terminal de linux, vamos a la carpeta donde queremos lanzar la aplicación y ejecutamos:
    - git clone git@github.com:cf19ArnauCastillo/LaravelVending.git
    Ejecutamos 'cd laravelvending', una vez dentro de la carpeta ejecutamos:
    - composer install
    - copy .env.example .env
    En nuestro mysql creamos la base de datos llamada 'vending', una vez creada abrimos el archivo .env y lo editamos añadiendo la siguiente información  
    - DB_HOST=localhost
    - DB_DATABASE=vending
    - DB_USERNAME={{tu nombre de usuario de mysql o root}}
    - DB_PASSWORD={{tu contraseña o en caso de ser root dejarlo vacio}}
    Una vez editado lo guardamos y lanzamos los siguientes comandos en la terminal:
    - php artisan key:generate
    - php artisan migrate
    - sudo npm install
    Y para lanzar la aplicación ejecutaremos:
    - php artisan serve
    
## Usuario
    - Puedes crearlo en el registro
