FROM php:8.2-apache-bookworm
ARG APP_VERSION
WORKDIR /var/www/html
COPY index.php index.php
RUN echo "SetEnv APP_VERSION ${APP_VERSION}" >> /etc/apache2/conf-enabled/environment.conf
EXPOSE 80

