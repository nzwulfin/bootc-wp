FROM quay.io/centos-bootc/centos-bootc-dev:stream9
#FROM quay.io/centos-bootc/fedora-bootc:eln

RUN dnf -y install httpd mariadb mariadb-server php-fpm php-mysqlnd && rm /var/log/*.log /var/lib/dnf -rf

ADD core.conf /usr/lib/sysusers.d/
ADD wp-setup.service dir-setup.service /etc/systemd/system/
ADD --chmod=755 wp-setup.sh dir-setup.sh /etc
ADD lamp.local-2023-03-09-0123.sql /etc
ADD wp.tgz /etc/www

RUN systemctl enable dir-setup wp-setup httpd mariadb php-fpm

RUN ostree container commit
