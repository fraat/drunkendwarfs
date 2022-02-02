<?php

# utility
apt-get -y install htop joe mc rsync curl sudo zstd
# putty terminal to debian 10 issue resolve
apt-get -y install ncurses-term
apt-get -y install git subversion
apt-get -y install imagemagick
apt-get -y install ufw fail2ban
apt-get -y install supervisor

# put joe backup files into specific backup folder (no ~ files)
mkdir -p /root/joe-backups && sed -i "s~ -backpath path~-backpath /root/joe-backups~g" /etc/joe/joerc

# install webserver
apt-get -y install php-fpm php php-mysqlnd php-curl php-ssh2 php-gd phpunit php-imap php-zip \
  php-zmq php-int php-ldap php-bcmath php-soap php-redis php-imagick
phpenmod zmq

apt-get -y install redis-server
apt-get -y install nginx

mkdir /etc/nginx/ssl
chown www-data:www-data /etc/nginx/ssl

apt-get -y install composer
mkdir -p /var/www/.composer/cache/files/
chown www-data:www-data /var/www/.composer/cache/files/
chmod 755 /var/www/.composer/cache/files/

# required for artisan tinker
mkdir -p /var/www/.config/psysh
chown www-data /var/www/.config/psysh
chmod 755 /var/www/.config/psysh

# database
apt-get -y install mariadb-server

mysql -e \'CREATE DATABASE `scadawire`;\'');
mysql -e \"GRANT ALL ON \`scadawire\`.* TO 'scadawire'@'localhost' IDENTIFIED BY 'PASSWORD';\"
mysql -e \'GRANT CREATE USER on *.* to `scadawire`@localhost with grant option;\'
mysql -e \'FLUSH PRIVILEGES;\'


# after install
sudo -u www-data composer install
sudo -u www-data cp .env.example .env
sudo -u www-data php artisan key:generate
sed -i "s/DB_PASSWORD=.*/DB_PASSWORD=' . $password . '/g" .env
sed -i "s/DB_HDBPP_PASSWORD=.*/DB_HDBPP_PASSWORD=' . $passwordHdbpp . '/g" .env
sudo -u www-data php artisan storage:link

sudo -u www-data php artisan deploy.php

# cleanup
apt-get clean');
?>
