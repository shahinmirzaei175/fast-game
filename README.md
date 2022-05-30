## Fast Game

Fast Game is a web application for lottery.

## Installation

- git clone
- composer update
- mv .env.example .env
- php artisan key:generate
- connect to main database (mysql)
- php artisan migrate
- Install redis on server(use redis db for queues)
- change queue driver to redis
- php artisan queue:work (run queue on redis)


## Postman endpoints
./doc/postman-endpoints.json


## Test

- run this command for feature testing
- php artisan test
