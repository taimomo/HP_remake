FROM php:8.2-apache

# 必要な PHP 拡張
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    zip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring
# Apache ドキュメントルート設定（httpdocsに合わせる）
ENV APACHE_DOCUMENT_ROOT /var/www/html

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# php.ini をコピー（日本語対応など）
COPY ./php.ini /usr/local/etc/php/
