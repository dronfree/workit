# Workflow
```
$ php -v
PHP 8.3.10 (cli) (built: Aug 16 2024 14:13:37) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.3.10, Copyright (c) Zend Technologies

$ composer --version
Composer version 2.7.7 2024-06-10 22:11:12
PHP version 8.3.10 (/usr/local/php-8.3.10/bin/php)
Run the "diagnose" command to get more detailed diagnostics output.

$ node -v
v16.17.0

$ npm -v
8.15.0

$ composer create-project laravel/laravel workit
$ composer require laravel/breeze
$ ./artisan breeze:install blade
$ ./artisan install:api --passport
$ ./artisan passport:client --personal
(put "client_id" and "client_secret" to .env for runtime and to .env.example for distribution, restart app)
```
# Serve
```
(terminal 1)
$ ./artisan serve

(terminal 2)
$ npm run dev
```
# Tricks
```
$ ./artisan migrate:fresh --seed
$ ./artisan route:list
$ ./artisan event:list
```