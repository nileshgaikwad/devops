#!/bin/bash
mysql -e -u root -p "root" "Create database db_devops"
mysql -u root -p "root" db_devops < /tmp/db_devops.sql
