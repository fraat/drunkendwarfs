# install dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Run database migrations and seeds
php artisan migrate --force
php artisan db:seed --force

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# create all caches
php artisan config:cache
php artisan route:cache
php artisan view:cache