## Step Laravel Installation

$ cd /var/www/html <br/>
$ git clone https://github.com/laravel/laravel.git <br/>
$ mv laravel laravel-wordpress <br/>
$ cd /var/www/laravel-wordpress <br/>
$ sudo composer install <br/>
$ sudo chown -R www-data.www-data /var/www/html/laravel-wordpress <br/>
$ sudo chmod -R 755 /var/www/html/laravel-wordpress <br/>
$ sudo chmod -R 777 /var/www/html/laravel-wordpress/storage <br/>
$ sudo mv .env.example .env <br/>
$ php artisan key:generate <br/>
$ vi .env <br/>

## Steps Create BD for Larevel

mysql> CREATE DATABASE laravel_wordpress; <br/>
mysql> GRANT ALL ON laravel_wordpress.* to 'laravel'@'localhost' IDENTIFIED BY 'secret'; <br/>
mysql> FLUSH PRIVILEGES; <br/>
mysql> quit <br/>

## SET .env

DB_CONNECTION=mysql <br/>
DB_HOST=127.0.0.1 <br/>
DB_PORT=3306 <br/>
DB_DATABASE=laravel_wordpress <br/>
DB_USERNAME=laravel <br/>
DB_PASSWORD=secret <br/>

## Apache config
$ sudo nano /etc/apache2/sites-enabled/000-default.conf <br/>

add: <br/>
        <Directory /> <br/>
                Options FollowSymLinks <br/>
                AllowOverride None <br/>
        </Directory> <br/>
        <Directory /var/www/html/laravel-wordpress> <br/>
                AllowOverride All <br/>
        </Directory>

$ sudo service apache2 restart <br/>
        
## Instaling Wordpress

$ sudo curl -O https://wordpress.org/latest.tar.gz <br/>
$ sudo tar xzvf latest.tar.gz <br/>
$ sudo touch wordpress/.htaccess <br/>
$ sudo cp wordpress/wp-config-sample.php wordpress/wp-config.php <br/>
$ sudo mkdir wp-content/upgrade <br/>
$ sudo chmod g+w wp-content <br/>
$ sudo chmod -R g+w wp-content/themes <br/>
$ sudo chmod -R g+w wp-content/plugins <br/>
$ curl -s https://api.wordpress.org/secret-key/1.1/salt/ <br/>


## Steps Create BD for Wordpress

mysql> CREATE DATABASE wordpress_laravel; <br/>
mysql> GRANT ALL ON wordpress_laravel.* to 'laravel'@'localhost' IDENTIFIED BY 'secret'; <br/>
mysql> FLUSH PRIVILEGES; <br/>
mysql> quit <br/>



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
