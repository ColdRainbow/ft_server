FROM debian:buster

RUN apt-get update && apt-get install -y wget nginx openssl default-mysql-server unzip php php-mysql php-fpm php-intl php-mbstring php-soap php-xmlrpc php-zip php-gd php-curl php-json php-gettext php-xml php-phpseclib

COPY ./srcs/mysql.sql /tmp/mysql.sql
COPY ./srcs/nginx.conf /etc/nginx/sites-enabled/localhost
COPY ./srcs/wp-config.php /tmp/wp-config.php
COPY ./srcs/load_server.sh /tmp/load_server.sh
COPY ./srcs/change_autoindex.sh ./change_autoindex.sh
COPY ./srcs/init.sh ./init.sh

RUN sh ./tmp/load_server.sh

EXPOSE 80 443

ENTRYPOINT sh init.sh && bash