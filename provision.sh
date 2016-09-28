#Step 1. First make sure that all your system packages are up-to-date 
#by running these following apt-get commands in the terminal.
sudo apt-get update
sudo apt-get upgrade

#Step 2. Installing Node.js using repository.
#The default Ubuntu repos do contain a version of Node.js. 
#It is never the latest version but is usually known to be quite stable:
#install nodejs
sudo apt-get install nodejs

#This will install Node.js, however we still need to install the 
#package manager (NPM) so that 3rd party modules can be installed:
sudo apt-get install npm

#install nginx
sudo apt-get install nginx -y > /dev/null

#It is recommended that you enable the most restrictive profile that will
#still allow the traffic you've configured. Since we haven't configured SSL 
#for our server yet, in this guide, we will only need to allow traffic on 
#port 80.

#You can enable this by typing:
sudo ufw allow 'Nginx HTTP'

#install php with postgresql and phpPgAdmin
#The following command will automatically install all packages needed 
#by PostgreSQL, like Apache, PHP etc.
sudo apt-get -y install postgresql postgresql-contrib phppgadmin

#Set postgres password to: vagrant
#install mongodb