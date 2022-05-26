#!/bin/sh

cp -n ./.env.local ./.env

docker build . -f "$(pwd)/dev/nginx/Dockerfile" -t rig/nginx:1.21.5 \
    && docker build . -f "$(pwd)/dev/php80/Dockerfile" -t rig/php:8.0.14 \
    && docker-compose up -d \
    && docker-compose stop \
    && docker-compose run --rm -v "$(pwd):/app-mount" -w /app-mount php sh -c "composer install --no-interaction" \
    && docker-compose run --rm -v "$(pwd):/usr/src" -w /usr/src node sh -c "npm install" \
    && docker-compose restart mysql php nginx node
