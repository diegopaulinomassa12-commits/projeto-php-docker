FROM php:8.2-apache

COPY index.php /var/www/html/
COPY imagem.jpg /var/www/html/

EXPOSE 80
