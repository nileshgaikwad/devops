#!/bin/bash
mysql -u root -proot -e "grant all privileges on db_devops.* to root@'%' identified by 'root';"
mysql -u root -proot -e "grant all privileges on db_devops.* to root@localhost identified by 'root';"

echo "Updating mysql configs in /etc/mysql/my.cnf."
sudo sed -i "s/.*bind-address.*/bind-address = 0.0.0.0/" /etc/mysql/my.cnf
echo "Updated mysql bind address in /etc/mysql/my.cnf to 0.0.0.0 to allow external connections."
sudo service mysql stop
sudo service mysql start
