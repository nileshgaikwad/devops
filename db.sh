#!/bin/bash
mysql -u root -p root -e "Create database db_devops"
mysql -u root -p root db_devops < /tmp/db_devops.sql
