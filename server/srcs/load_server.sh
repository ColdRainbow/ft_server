chmod 755 ./tmp/load_server.sh
chmod 755 ./change_autoindex.sh

service mysql start
mysql < ./tmp/mysql.sql

mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/jkate.pem -keyout /etc/nginx/ssl/public.key -subj "/C=RU/ST=Moscow/O=School_21/OU=jkate/CN=localhost"
openssl rsa -noout -text -in /etc/nginx/ssl/localhost_public.key

mkdir /var/www/html/phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.zip
unzip ./phpMyAdmin-5.0.4-all-languages.zip -d /var/www/html/phpmyadmin/

wget http://wordpress.org/latest.tar.gz
tar xfv latest.tar.gz
mv wordpress/ /var/www/html/
mv /tmp/wp-config.php /var/www/html/wordpress/

chown -R www-data /var/www/html
chmod -R 755 /var/www/html
