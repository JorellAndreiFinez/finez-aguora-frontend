FROM webdevops/php-nginx:8.3-alpine

WORKDIR /app

ENV WEB_DOCUMENT_ROOT=/app/public
ENV COMPOSER_ALLOW_SUPERUSER=1

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN npm install && npm run build

RUN mkdir -p storage/framework/views storage/framework/cache storage/framework/sessions bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache