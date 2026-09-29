FROM serversideup/php:8.2-fpm-nginx

WORKDIR /var/www/html

COPY --chown=www-data:www-data . .

RUN composer install --no-dev --optimize-autoloader

RUN php artisan storage:link || true

RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

ENV AUTORUN_ENABLED=true
ENV APP_ENV=production
ENV PHP_OPCACHE_ENABLE=1

EXPOSE 8080