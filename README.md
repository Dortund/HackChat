##Requirements:
- Apache2
- php5
- mysql-server
- Composer

##Setting up:
Clone the hackchat repository in a web-accesible folder

Perform the following Composser commands in said folder
- composer global require "fxp/composer-asset-plugin:~1.0.0"
- composer update

####Create a mysql database
- Default database name: hackchatdb.
- Default root password: wouter.
- import hackchatdb.sql into said database.
If you have a different database name or password, change the entries in config/db.php

##Viewing
You should now be able to view the page on <web-accesible foler>/hackchat/web

You can now login as admin using username: admin, password: admin.
