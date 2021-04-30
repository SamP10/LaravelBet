# A gambling laravel website

This website is a laravel scaffolded template of a betting and gambling website.
The site should be secure as it is built using laravel which offers inbuilt security, it is based off the results of 2021 premier league to populate the database and football teams page.
This website intends to be part of a wider security penetration testing on a docker business environment.
## DISCLAIMER
This is an incomplete web application that should be further developed with other functionalities such as betting slips.
This application is for academic and educational purpose only.
However, the website can serve as a template for those looking to develop a betting website.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

To configure your own environment will require composer to install laravel and it's dependencies.
Composer can be found following: * [COMPOSER](https://getcomposer.org/download/)

Install apache2 and MySQL onto your environment (On windows recommend to use * [XAMPP](https://www.apachefriends.org/download.html))
Otherwise on Linux (debian)
If using XAMPP follow the section of #AddingThisWebsite

```
sudo apt-get update && upgrade
```

### Installing

A step by step series of examples to recreate on your own env.

### Install apache2

```
sudo apt-get apache2
```

Edit the config file appropriatly to add a line saying ServerName which is either the ip or domain name of your server.

```
sudo nano /etc/apache2/apache2.conf
```

Restart apache2 service

```
sudo systemctl restart apache2
```

Adjust firewall either ufw or iptables to allow for ports 80 and 8080 tcp connections in and out.

```
sudo ufw allow in "Apache Full"
```

Install curl

```
sudo apt-get install curl
```

### Installing MySQL for the database

```
sudo apt-get install mysql-server
```

(!WARNING if using for public use ensure to use)

```
mysql_secure_installation
```

This will remove some insecure configurations that is needed for public use.

### Install PHP

```
sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql
```

This will install tools to help communicate to SQL server.
You are then required to indicate to apache to use index.php first, doing so by changing the order in the dir.conf.

```
sudo nano /etc/apache2/mods-enabled/dir.conf
```
Restart apache2 server

```
sudo systemctl restart apache2
```
Look at any packages you wish to install.

```
sudo apt-get install php-cli
```
Voila! Installation of working environment completed

## Running the tests

To check php is running create a file within /var/www/html/ named info.php

```
sudo nano /var/www/html/info.php
<?php
phpinfo();
?>
```
Navigate to the ip address to display the php infomation


## Adding this website

First we need to install GIT to pull the repository

```
sudo apt-get install git
```

Change working directory too /var/www/html/ then git clone the repository to deploy it.

```
sudo git clone https://github.com/SamP10/LaravelBet.git
```

Recommended: installing phpmyadmin to modify data within the database
Follow these guides to get up and running * [phpMyAdmin](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-20-04)
Within a console and travelling to the cloned LaravelBet directory can begin a setup of personal environment.

```
C:\user\> cd destination/LaravelBet
C:\user\destination\LaravelBet> composer create-project
```
After running the above, changing the .env file to match the details of your database, following the .env.example for default purposes should suffice.
Establishing a connection to the database server will allow migration and seeding of the database. The database server must be running to populate the database.
```
C:\user\destination\LaravelBet> php artisan migrate:fresh --seed
```
This will populate the table desired within the .env file.

```
C:user\destination\LaravelBet> php artisan serve
```
Above will start a local server which hosts the website. Simply navigating to the provided IP address will pull up the homepage.
```
C:\user\destination\LaravelBet>php artisan serve
Starting Laravel development server: http://127.0.0.1:8000
[Fri Apr 30 18:01:42 2021] PHP 7.4.8 Development Server (http://127.0.0.1:8000) started
```
## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors
* **Sam Plant** - *Code work* - [Sam Plant](https://github.com/SamP10)

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
