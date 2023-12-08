#!/bin/bash
mkdir -p /var/www/html /var/log/httpd/ /var/log/mariadb /var/lib/mysql /var/log/php-fpm/
chown -R mysql.mysql /var/lib/mysql
