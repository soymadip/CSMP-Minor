#!/bin/sh
set -e

# Ensure required directories exist
mkdir -p /var/www/storage/app/public \
         /var/www/storage/framework/cache/data \
         /var/www/storage/framework/sessions \
         /var/www/storage/framework/testing \
         /var/www/storage/framework/views \
         /var/www/storage/logs \
         /var/www/bootstrap/cache


# Install dependencies if vendor is missing or composer.json changed
if [ ! -d "vendor" ]; then
    composer install --no-interaction --optimize-autoloader
fi

# Generate key if not set
if ! grep -q "APP_KEY=base64" .env; then
    php artisan key:generate
fi

# Wait for database
echo "Waiting for database connection (${DB_HOST}:${DB_PORT})..."
max_retries=30
counter=0
until php -r "try { new PDO('mysql:host=${DB_HOST};port=${DB_PORT};dbname=${DB_DATABASE}', '${DB_USERNAME}', '${DB_PASSWORD}'); exit(0); } catch (Exception \$e) { exit(1); }"; do
    counter=$((counter + 1))
    if [ $counter -gt $max_retries ]; then
        echo "Error: Database connection timed out after $max_retries attempts."
        exit 1
    fi
    echo "Database not ready yet (attempt $counter). Retrying in 2 seconds..."
    sleep 2
done
echo "Database is ready!"

# Run migrations
php artisan migrate --force

# Execute the container's main command (php-fpm)
exec "$@"
