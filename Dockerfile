FROM php:8.4-apache

# node, npm インストール（node 20系）
RUN apt-get update && \
    apt-get install -y curl gnupg && \
    curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# tailwindcss の ARM64バージョンをダウンロードして配置（Apple Silicon対応）
RUN curl -sLO https://github.com/tailwindlabs/tailwindcss/releases/latest/download/tailwindcss-linux-arm64 && \
    chmod +x tailwindcss-linux-arm64 && \
    mv tailwindcss-linux-arm64 /usr/local/bin/tailwindcss

# 作業ディレクトリ
WORKDIR /var/www/html

# ファイルをコピー（必要に応じて調整）
COPY . .

# Tailwindビルド
RUN tailwindcss -i ./httpdocs/src/input.css -o ./httpdocs/public/output.css