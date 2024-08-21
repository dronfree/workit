# Install
```
$ mkdir workit

$ cd workit

$ git clone git@github.com:dronfree/workit.git .

$ composer install

$ npm install

$ cp .evn.example .env

$ touch database/database.sqlite

$ php artisan migrate:fresh --seed

$ php artisan passport:install
(Would you like to run all pending database migrations? answer no)

$ php artisan passport:client --personal
(specify PASSPORT_PERSONAL_ACCESS_CLIENT_ID and PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET in .env)


$ php artisan serve
(terminal 1)

$ npm run dev
(terminal 2)
```

# Run

Go to http://localhost:8000

# Usage

1. There are 9 managers from manager1@test.com to manager9@test.com
2. Password for all is "demo123"
3. Login with credentials (manager1@test.com / demo123 )
4. Personal access token and two cURL example API calls will be on your dashboard.

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