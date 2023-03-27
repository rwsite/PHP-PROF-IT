FROM php:8.2-fpm-alpine

#RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#RUN php composer-setup.php --install-dir=/usr/bin/ --filename=composer
#RUN php -r "unlink('composer-setup.php');"

#COPY . /app
#WORKDIR /app
#CMD ["php", "-S", "0.0.0.0:8082"]

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Указываем рабочую директорию для PHP
WORKDIR /var/www

# Запускаем контейнер
CMD ["php-fpm"]
EXPOSE 9000