#!/bin/bash
mysql -u root -proot -e "grant all privileges on db_devops.* to root@'%' identified by 'root';"
mysql -u root -proot -e "grant all privileges on db_devops.* to root@localhost identified by 'root';"
