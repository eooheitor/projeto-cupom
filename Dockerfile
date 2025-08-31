FROM php:8.2-fpm

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    zip \
    curl \
    npm \
    build-essential \
    postgresql-client \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && docker-php-ext-enable pdo_pgsql


# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copia apenas o composer.json e instala dependências PHP primeiro
COPY composer.json composer.lock ./
RUN composer install --no-interaction --optimize-autoloader

# Copia o restante do código
COPY . .

# Instala dependências Node e Tailwind
RUN npm install
RUN npm run dev

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
