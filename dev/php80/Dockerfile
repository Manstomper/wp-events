FROM php:8.0.14-fpm-alpine3.15

RUN apk update \
    && apk add --no-cache \
        # Dependency required by the intl extension
        icu-dev \
        # Dependencies required by the gd extension
        libjpeg-turbo-dev \
        libpng-dev \
    # intl
    && docker-php-ext-install -j$(nproc) intl \
    # gd
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    # mysqli
    && docker-php-ext-install mysqli \
    # Remove unnecessary files
    && rm -rf /usr/src/php* \
    && rm -rf /usr/local/lib/php/test \
    && rm /usr/local/bin/phpdbg \
    && rm -rf /var/cache/*

# Composer
COPY --from=composer:2.2.5 /usr/bin/composer /usr/local/bin/composer

# WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

# Config
ADD ./dev/php80/fpm.conf /usr/local/etc/php-fpm.d/zz-site.conf
ADD ./dev/php80/php.ini /usr/local/etc/php/conf.d/site.ini
