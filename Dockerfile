FROM php:8.1-cli

# Instala dependências necessárias
RUN apt-get update && apt-get install -y libpq-dev pkg-config

# Habilita extensão do PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql

# Copia a aplicação para o container
COPY . /var/www/html/

# Define o diretório de trabalho para o servidor embutido do PHP
WORKDIR /var/www/html/public

# Expõe a porta que o PHP Built-in Server vai usar
EXPOSE 8080

# Inicia o servidor PHP embutido
CMD ["php", "-S", "0.0.0.0:8080"]

