FROM php:8.2-apache

# 推奨: 必要なら拡張を追加
RUN docker-php-ext-install pdo pdo_mysql

# Apache のドキュメントルートを /var/www/html/src に変更
ENV APACHE_DOCUMENT_ROOT /var/www/html

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# mbstring 等インストール（日本語対応）
RUN docker-php-ext-install mbstring

COPY ./php.ini /usr/local/etc/php/