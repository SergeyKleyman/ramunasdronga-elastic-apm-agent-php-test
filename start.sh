#!/usr/bin/env bash

docker-compose up --build -d
docker-compose exec fpm composer install
docker-compose logs -f fpm

docker-compose down
