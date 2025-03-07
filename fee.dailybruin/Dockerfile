FROM php:8.4.3-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

COPY . /var/www/html/

# Ensure proper file permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

EXPOSE 80

USER www-data

CMD ["apache2-foreground"]
