FROM php:8.2-cli

# install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev

# install php extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# set working directory
WORKDIR /var/www

# copy project
COPY . .

# install laravel dependencies
RUN composer install

# expose port
EXPOSE 8000

# run laravel
CMD php artisan serve --host=0.0.0.0 --port=8000