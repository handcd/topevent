###############################
# Dockerfile for building WIT #
# Based on Ubuntu             #
###############################

# Set the image to Ubuntu
FROM ubuntu

# Author
MAINTAINER Humberto Alcocer

# Update the repository sources list
RUN apt-get udpate

# Upgrade the repository
RUN apt-get upgrade

###################### BEGIN INSTALLATION ######################
RUN apt-get install -y apache2 php libapache2-mod-php php-mcrypt php-mysql && DEBIAN_FRONTEND=noninteractive apt-get install -y mysql-server 
RUN ufw allow in "Apache Full"

VOLUME /var/lib/mysql
EXPOSE 3306
