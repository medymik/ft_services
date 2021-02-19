FROM alpine:latest

RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories
RUN apk update
RUN apk add nginx
RUN apk add php7-fpm php7-mcrypt php7-soap php7-openssl php7-gmp php7-pdo_odbc php7-json php7-dom php7-pdo php7-zip php7-mysqli php7-sqlite3 php7-apcu php7-pdo_pgsql php7-bcmath php7-gd php7-odbc php7-pdo_mysql php7-pdo_sqlite php7-gettext php7-xmlreader php7-xmlrpc php7-bz2 php7-iconv php7-pdo_dblib php7-curl php7-ctype php7-session php7-mbstring
RUN apk add supervisor telegraf
# nginx
COPY srcs /tmp/
RUN mv /tmp/nginx.conf /etc/nginx/nginx.conf
RUN mkdir -p /run/nginx
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz
RUN tar -xvf phpMyAdmin-4.9.7-all-languages.tar.gz
RUN mv phpMyAdmin-4.9.7-all-languages /www

COPY telegraf.conf /etc/telegraf.conf
ADD srcs/config.inc.php /www/config.inc.php
ADD supervisord.conf /etc/supervisord.conf

EXPOSE 5000

CMD [ "/usr/bin/supervisord" ]
