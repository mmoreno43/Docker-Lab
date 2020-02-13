# Docker-Compose Application

## docker-compose yml
The docker-compose file is made up of four parts:
- PHP
- Nginx
- Maria
- Networks


A network bridge allows the containers connected to the same bridge network to communicate with eachother. 

# PHP

I am using PHP as the server side scripting langauge to talk between my Nginx container and my MariaDB container.

## Dockerfile

By default, PHP is missing the mysqli component. The Dockerfiles creates a custom image that installs and enalbes mysqli at run time.

## Volumes

I've attached the HTML folder where all of my PHP pages are located.

# Nginx

I am using Nginx has the web front. This will host all of our website content.

## Ports

I have mapped port 81 to 80, but feel free to use a differnt port.

## Volumes

### web.conf

By creating this file we define our server block in Nginx and how Nginx will work.

### HTML

I've attached the HTML folder where all of my html pages are located. This will serve all the HTML content in these pages.

# MariaDB

I am using MariaDB as the databse, but feel free to use whatever database you are comfortable using. 

## init.sql

At run time this file is used to create the following:

- Database
- Table

## Environment Variable

By default, you have to specifiy a root password. You can see the root password will be `s3cr3t`.

# To run

`docker-compose up`

## Validation

To validate that the containers are working properly, head to any browser and type the following in the URL `http://localhost:81/index.php`. You should see the welcome screen and be able to start adding, viewing and deleting users.

# To stop

`docker-compose down`

# Delete images and containers

To remove containers and images:

`./delete.sh`