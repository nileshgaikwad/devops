#!/bin/bash
mysql -u root -proot -e "drop database db_devops"
mysql -u root -proot -e "Create database db_devops"
mysql -u root -proot db_devops < /tmp/db_devops.sql
