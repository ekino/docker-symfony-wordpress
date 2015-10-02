#!/bin/bash

echo "
      _    _              
     | |  (_)             
  ___| | ___ _ __   ___   
 / _ \ |/ / | '_ \ / _ \  
|  __/   <| | | | | (_) | 
 \___|_|\_\_|_| |_|\___(_)

  Wordpress Bundle Demo
  Demonstration builder
"

echo "\n--> Downloading and installing Wordpress...\n"

if [ -d "wordpress" ]; then
   rm -rf wordpress
fi

curl -o latest.zip https://wordpress.org/latest.zip
unzip latest.zip -d .
rm -rf latest.zip

echo "\n--> Downloading and installing Symfony...\n"

curl -LsS http://symfony.com/installer -o symfony
symfony new wordpress/symfony
rm symfony

echo "\n--> Installing Symfony EkinoWordpressBundle...\n"

cd wordpress/symfony && curl -sS https://getcomposer.org/installer | php
php composer.phar require ekino/wordpress-bundle
cd ../.. && cp code/AppKernel.php wordpress/symfony/app/

echo 'ekino_wordpress:
    resource: "@EkinoWordpressBundle/Resources/config/routing.xml"
' | cat - wordpress/symfony/app/config/routing.yml > temp && mv temp wordpress/symfony/app/config/routing.yml

echo '
ekino_wordpress:
    table_prefix: wp_ # If you have a specific Wordpress table prefix
#    wordpress_directory: /my/wordpress/directory # If you have a specific Wordpress directory structure
    load_twig_extension: true # If you want to enable native WordPress functions (ie : get_option() => wp_get_option())
    security:
        firewall_name: secured_area # This is the firewall default name
        login_url: "/wp-login.php" # Absolute URL to the wordpress login page' >> wordpress/symfony/app/config/config.yml

cp code/security.yml wordpress/symfony/app/config/security.yml

cp code/index.php wordpress/index.php
cp code/.htaccess wordpress/.htaccess

cp code/parameters.yml wordpress/symfony/app/config/parameters.yml

echo "\n--> Installing Wordpress ekino-wordpress-symfony plugin...\n"

git clone git@github.com:ekino/ekino-wordpress-symfony.git wordpress/wp-content/plugins/ekino-wordpress-symfony
cp code/wp-config.php wordpress/wp-config.php

echo "\n--> Your demo is built!\n--> You can now type 'make build-containers' and run the instance with 'make run'.\n"