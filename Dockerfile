# On part d'une image PHP 8.3 avec Apache (le serveur web)
FROM php:8.3-apache


# 1. Installation des dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl

# 2. Installation des extensions PHP pour Laravel et MySQL
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Installation de Node.js et NPM (pour Vite)
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 3. Activation du module Rewrite d'Apache (indispensable pour les routes Laravel)
RUN a2enmod rewrite

# Installer Composer proprement dans l'image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. On définit le dossier de travail
WORKDIR /var/www/html

# 5. On change le "DocumentRoot" d'Apache pour pointer vers le dossier /public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf