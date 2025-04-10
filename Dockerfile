FROM php:8.4-apache

# 必要な PHP 拡張とNode.jsのために必要なパッケージをインストール
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    zip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    curl \
    && docker-php-ext-install pdo pdo_mysql mbstring

# Node.js (LTS版: 20系)のインストール
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Apacheのドキュメントルート設定（httpdocsに合わせる）
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# php.iniをコピー（日本語対応などを含む設定）
COPY ./php.ini /usr/local/etc/php/

# 作業ディレクトリを設定（npm等の操作を行う場合に便利）
WORKDIR /var/www/html