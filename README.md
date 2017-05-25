# PHP Jalisco - Scaling PHP

This is an oversimplifed demo of an PHP application ready to scale ^_^

Dockerfile is in place.

## How to get started

1. Install deps `composer install`
2. Configure your environment variables in `.env` see `.env.example`
3. Run it. `php -S 0.0.0.0:4000 index.php`
3. Visit http://localhost:4000

## Using Docker
1. Run `docker build -t phpjalisco-scaling-php`
2. Run `docker run -t phpjalisco-scaling-php -p 4000:80`
3. Visit http://localhost:4000
