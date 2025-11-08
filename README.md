# jadob/skeleton

This is a minimal project structure for jadob/jadob `0.9.x` version, which includes:
- Support for CLI commands
- Twig Template engine

## Getting started

Start by installing dependencies and creating a `.env` file:

````shell
composer install
cp .env.dist .env
````

This project comes with Docker Compose stack, start it:

````shell
docker compose up -d
````

When it is done, you can start the web server (in this case, the built-in PHP dev-server):

````shell
cd public
php -S 127.0.0.1:8001
````

Your application will be available at the http://127.0.0.1:8001.








