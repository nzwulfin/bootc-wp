#!/bin/bash
mariadb -u root <<-EOF
CREATE DATABASE wp DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
GRANT ALL ON wp.* TO 'wpuser'@'localhost' IDENTIFIED BY 'redhat';
FLUSH PRIVILEGES;
EOF
IP=$(ip ad sh |grep 122| awk '{ print $2 }' |rev| cut -c4- |rev)
sed -i "s/192.168.122.169/$IP/" /etc/lamp.local-2023-03-09-0123.sql
mariadb --user root wp< /etc/lamp.local-2023-03-09-0123.sql
cp -r /etc/www/* /var/www/html/
restorecon -R /var/www/html

