# Docker-Compose Application

## docker-compose yml
The docker-compose file is made up of four parts:
- PHP
- Nginx
- Maria
- Networks


A network bridge allows the containers connected to the same bridge network to communicate with eachother. 

## Dockerfile

By default, PHP is missing the mysqli component. The Dockerfiles creates a custom image that installs and enalbes mysqli at run time.

## web.conf

By creating this file we define our server block in Nginx and how Nginx will work.

## init.sql

At run time this file is used to create the following:

-Database
-Table

# To run

`docker-compose up`

# To stop

`docker-compose down`

# Delete images and containers

To remove containers and images:

`./delete.sh`