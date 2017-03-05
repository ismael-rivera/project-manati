# Step 1. First make sure that all your system packages are up-to-date 
# by running these following apt-get commands in the terminal.
# We should only update to the most stable of these.
#----------------------------------------------------------------------

#sudo apt-get update
#sudo apt-get upgrade



# Step 2. Installing Node.js using repository.
# The default Ubuntu repos do contain a version of Node.js. 
# It is never the latest version but is usually known to be 
# quite stable:
# This will install Node.js, however we still need to install the 
# package manager (NPM) so that 3rd party modules can be installed'
# Update nodejs by installing n but first clear npm cache, 
# then install n. Following, have n sudo update to the latest stable 
# version of nodejs. [Warning] nodejs old version will still be installed. 
# Accessible through 'nodejs' command.
#-------------------------------------------------------------------------

#install nodejs
#sudo apt-get install nodejs
#sudo apt-get install npm
#sudo npm cache clean -f
#sudo npm install -g n 
#sudo n stable



#
#
#    _____           _       _     ____            
#   / ____|         | |     | |   |  _ \           
#  | (___   ___ ___ | |_ ___| |__ | |_) | _____  __
#   \___ \ / __/ _ \| __/ __| '_ \|  _ < / _ \ \/ /
#   ____) | (_| (_) | || (__| | | | |_) | (_) >  < 
#  |_____/ \___\___/ \__\___|_| |_|____/ \___/_/\_\
#                                                 
#
#                                                 
#-------------------------------------------------------------------------



#
#   _   _  _____ _____ _   ___   __
#  | \ | |/ ____|_   _| \ | \ \ / /
#  |  \| | |  __  | | |  \| |\ V / 
#  | . ` | | |_ | | | | . ` | > <  
#  | |\  | |__| |_| |_| |\  |/ . \ 
#  |_| \_|\_____|_____|_| \_/_/ \_\
#
#
#                                                                 
# Install Nginx
# It is recommended that you enable the most restrictive profile that will
# still allow the traffic you've configured. Since we haven't configured SSL 
# for our server yet, in this guide, we will only need to allow traffic on 
# port 80. You can enable this by uncommenting the second command 
# on the following snippet:
#-------------------------------------------------------------------------

#sudo apt-get install nginx -y > /dev/null
#sudo ufw allow 'Nginx HTTP'


#
#                             _            ___  
#      /\                    | |          |__ \ 
#     /  \   _ __   __ _  ___| |__   ___     ) |
#    / /\ \ | '_ \ / _` |/ __| '_ \ / _ \   / / 
#   / ____ \| |_) | (_| | (__| | | |  __/  / /_ 
#  /_/    \_\ .__/ \__,_|\___|_| |_|\___| |____|
#           | |                                 
#           |_|                                 
#
#--------------------------------------------------------------------------

#
#   _____          _                            _ 
#  |  __ \        | |                          | |
#  | |__) |__  ___| |_ __ _ _ __ ___  ___  __ _| |
#  |  ___/ _ \/ __| __/ _` | '__/ _ \/ __|/ _` | |
#  | |  | (_) \__ \ || (_| | | |  __/\__ \ (_| | |
#  |_|   \___/|___/\__\__, |_|  \___||___/\__, |_|
#                      __/ |                 | |  
#   _____  _    _ ____|___/                  |_|  
#  |  __ \| |  | |  __ \                          
#  | |__) | |__| | |__) |                         
#  |  ___/|  __  |  ___/                          
#  | |    | |  | | |                              
#  |_|    |_|  |_|_|                              
#                                                
#                                                   
#                                             
# Install php with postgresql and phpPgAdmin. The following command will 
# automatically Install all packages needed by PostgreSQL, like Apache, PHP etc. 
# Then sudo into postgress #terminal. After that, create your superuser.
# * Set postgres password to: vagrant *
#-------------------------------------------------------------------------

#sudo apt-get -y install postgresql postgresql-contrib phppgadmin
#sudo su - postgres
#createuser --superuser --pwprompt greenonyx




#
#   __  __  ____  _   _  _____  ____      _ _     
#  |  \/  |/ __ \| \ | |/ ____|/ __ \    | | |    
#  | \  / | |  | |  \| | |  __| |  | | __| | |__  
#  | |\/| | |  | | . ` | | |_ | |  | |/ _` | '_ \ 
#  | |  | | |__| | |\  | |__| | |__| | (_| | |_) |
#  |_|  |_|\____/|_| \_|\_____|\____/ \__,_|_.__/ 
#                                                
#                                                     
#
#---------------------------------------------------------------------------




   _____                  _       _  _____ 
  / ____|                | |     | |/ ____|
 | |  __ _ __ _   _ _ __ | |_    | | (___  
 | | |_ | '__| | | | '_ \| __|   | |\___ \ 
 | |__| | |  | |_| | | | | || |__| |____) |
  \_____|_|   \__,_|_| |_|\__\____/|_____/ 
                                           
                                           


