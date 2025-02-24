# Використовуємо офіційний образ PHP з Apache
FROM php:8.3-apache

# Включаємо модулі PHP
RUN docker-php-ext-install pdo pdo_mysql

# Включаємо mod_rewrite для .htaccess
RUN a2enmod rewrite

# Копіюємо файли сайту у контейнер
COPY ./src /var/www/html
# COPY ./src /var/www/src

# Налаштовуємо права доступу
RUN chown -R www-data:www-data /var/www/html 
RUN chmod -R 755 /var/www/html 

# Відкриваємо порт
EXPOSE 80