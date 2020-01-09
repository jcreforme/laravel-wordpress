## Step Laravel Installation

$ cd /var/www/html

$ git clone https://github.com/laravel/laravel.git
$ mv laravel laravel-wordpress 
$ cd /var/www/laravel-wordpress
$ sudo composer install
$ sudo chown -R www-data.www-data /var/www/html/laravel-wordpress
$ sudo chmod -R 755 /var/www/html/laravel-wordpress
$ sudo chmod -R 777 /var/www/html/laravel-wordpress/storage
$ sudo mv .env.example .env
$ php artisan key:generate
$ vi .env

## Steps Create BD for Larevel

mysql> CREATE DATABASE laravel_wordpress;
mysql> GRANT ALL ON laravel_wordpress.* to 'laravel'@'localhost' IDENTIFIED BY 'secret';
mysql> FLUSH PRIVILEGES;
mysql> quit

## SET .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_wordpress
DB_USERNAME=laravel
DB_PASSWORD=secret

## Apache config
$ sudo nano /etc/apache2/sites-enabled/000-default.conf

add:
        <Directory />
                Options FollowSymLinks
                AllowOverride None
        </Directory>
        <Directory /var/www/html/laravel-wordpress>
                AllowOverride All
        </Directory>

$ sudo service apache2 restart
        
## Instaling Wordpress

$ sudo curl -O https://wordpress.org/latest.tar.gz
$ sudo tar xzvf latest.tar.gz
$ sudo touch wordpress/.htaccess
$ sudo cp wordpress/wp-config-sample.php wordpress/wp-config.php
$ sudo mkdir wp-content/upgrade
$ sudo chmod g+w wp-content
$ sudo chmod -R g+w wp-content/themes
$ sudo chmod -R g+w wp-content/plugins
$ curl -s https://api.wordpress.org/secret-key/1.1/salt/


## Steps Create BD for Wordpress

mysql> CREATE DATABASE wordpress_laravel;
mysql> GRANT ALL ON wordpress_laravel.* to 'laravel'@'localhost' IDENTIFIED BY 'secret';
mysql> FLUSH PRIVILEGES;
mysql> quit



<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
