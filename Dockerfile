FROM node:18-slim

# Install PHP and extensions
RUN apt-get update && apt-get install -y \
    php php-cli php-mbstring php-xml php-bcmath php-curl php-mysql unzip curl git && \
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

WORKDIR /app

# Copy project files
COPY . .

# Install backend dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

RUN php artisan key:generate && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan storage:link

EXPOSE 8000

# Serve from /public folder
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
