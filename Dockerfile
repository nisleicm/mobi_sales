# Imagem base com PHP e Composer
FROM composer:2 AS build

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos de configuração e dependências
COPY ./composer.json ./composer.lock ./
RUN composer install --ignore-platform-reqs --no-scripts --no-autoloader

# Copia os arquivos do aplicativo
COPY . .

# Gera o autoloader do Composer
RUN composer dump-autoload --no-scripts --no-dev --optimize

# Define a imagem base do PHP com Nginx
FROM php:8.0-fpm AS final

# Instala as extensões necessárias do PHP
RUN yum update && yum install -y \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do aplicativo da imagem intermediária
COPY --from=build /var/www/html .

# Define as permissões corretas nos diretórios
RUN chown -R www-data:www-data storage bootstrap/cache

# Define o comando de inicialização do contêiner
CMD ["php-fpm"]

