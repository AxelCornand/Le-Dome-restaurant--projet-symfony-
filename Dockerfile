FROM php:8.3-fpm-alpine

# Installation des dépendances système
RUN apk add --no-cache \
    git \
    unzip \
    libzip-dev \
    postgresql-dev \
    icu-dev \
    oniguruma-dev \
    bash

# Installation des extensions PHP nécessaires pour Symfony
RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    zip \
    intl \
    opcache \
    mbstring

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installation de Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O - | bash && \
    mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Configuration du répertoire de travail
WORKDIR /var/www/symfony

# Permissions
RUN chown -R www-data:www-data /var/www

USER www-data

EXPOSE 9000

CMD ["php-fpm"]