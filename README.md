How to run
----------

First make sure your public_html/.htaccess is set up correctly (Base URL)

Get PHP Dependancies
composer install (or php composer.phar install | php)

For Compass + Bootstrap
gem install compass_twitter_bootstrap

For Coffeescript Rakefile
gem install 'uglifier'
gem install 'listen'
gem install 'rb-fsevent'


Run bundle install - Note if you dont want to use one of the features you can take it out of the gemfile first.

run compass watch to watch sass files

Ruckusing Migration
If you want to use ruckusing for migration management.

Edit ruckusing.conf.php and change the development array to your database

run
php ruckus db:setup

To use ActiveRecord
edit application/config/development.php

When viewing your app make sure you open the public_html folder otherwise assets won't show