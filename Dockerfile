FROM php:8.2-apache
RUN a2enmod rewrite headers expires
RUN apt-get update \
    && apt-get install -y --no-install-recommends curl \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80

