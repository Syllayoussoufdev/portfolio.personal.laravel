#!/bin/bash
set -e

cd /var/www/html

if [ ! -f vendor/autoload.php ]; then
    composer install --no-interaction --prefer-dist
fi

if [ ! -f .env ]; then
    cp .env.example .env
fi

php artisan key:generate --no-interaction 2>/dev/null || true

if [ ! -f public/build/manifest.json ]; then
    npm install --prefer-offline
    npm run build
fi

apache2-foreground
