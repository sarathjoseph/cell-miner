#!/usr/bin/env bash

apt-get update
apt-get install -y python-software-properties
add-apt-repository ppa:ondrej/php5
add-apt-repository ppa:ondrej/apache2
apt-add-repository ppa:chris-lea/node.js
apt-get update
apt-get install -y php5
apt-get install -y php5-mcrypt
apt-get install -y apache2
apt-get install -y libapache2-mod-php5
echo "mysql-server-5.5 mysql-server/root_password password root" | debconf-set-selections
echo "mysql-server-5.5 mysql-server/root_password_again password root" | debconf-set-selections
apt-get install -y mysql-server
apt-get install -y php5-mysql
apt-get install -y nodejs
apt-get install -y git
rm -rf /var/www
ln -fs /vagrant/www /var/www
ln -fs /vagrant/setup /home/vagrant/setup
ln -fs /vagrant/files /home/vagrant/files
# mysql -u root --password='root' < /home/vagrant/setup/sdd_db.sql
cp /home/vagrant/setup/000-default.conf /etc/apache2/sites-available/000-default.conf
service apache2 restart
rm -rf /home/vagrant/setup