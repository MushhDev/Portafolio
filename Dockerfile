FROM php:8.2-apache

# Copia todo el contenido del repositorio al directorio de Apache
COPY . /var/www/html/

# Habilita mod_rewrite para .htaccess (opcional, pero recomendado)
RUN a2enmod rewrite
