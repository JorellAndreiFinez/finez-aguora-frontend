FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV RUN_SCRIPTS=1
ENV REAL_IP_HEADER=1

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

RUN mkdir -p storage/framework/views storage/framework/cache storage/framework/sessions bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache