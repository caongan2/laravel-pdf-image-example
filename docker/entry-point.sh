composer update
cp .env.example .env
php artisan key:generate
chmod -R 777 public
chmod -R 777 storage
php artisan storage:link
php artisan optimize
# chown -R $USER:www-data storage
# chown -R $USER:www-data bootstrap/cache
# php artisan migrate
