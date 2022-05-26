#!/bin/sh

docker-compose stop node \
    && docker-compose run --rm -v "$(pwd)/public/app/themes/demo/assets:/usr/src" -w /usr/src node sh -c "npm update && npm audit fix" \
    && docker-compose start node
