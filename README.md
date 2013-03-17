# Starcs

Starcs stands for __S__lim (Framework), __T__wig, __A__ctive__R__ecord, __C__offeescript and __S__ASS.  Starcs is a wrapper for a bunch of awesome tools to start a new PHP web application with.

## Prerequisites

Make sure you have the following installed:

* [Composer](http://getcomposer.org/)
* Ruby [Mac/Linux](https://rvm.io/) | [Win](http://rubyinstaller.org/)
	* [SASS](http://rubygems.org/gems/sass)
		* [Compass](https://rubygems.org/gems/compass)
			* [Compass_twitter_bootstrap](https://rubygems.org/gems/compass_twitter_bootstrap)
	* [Uglifier](https://github.com/lautis/uglifier)
	* [Listen](https://rubygems.org/gems/listen)
	* [Rb-fsevent](https://rubygems.org/gems/rb-fsevent)
	* [Rake](https://rubygems.org/gems/rake)
* [NPM](https://npmjs.org/)
	* [Coffeescript](https://npmjs.org/package/coffee-script)
	
## Optional

If you use Sublime Text 2 with the Tutsplus Fetch plugin, add bootstrap's javascript and this git repo.

```
{
	"files":
	{
		"jquery": "http://code.jquery.com/jquery.min.js",
		"bootstrap.min.js": "https://raw.github.com/twitter/bootstrap/master/docs/assets/js/bootstrap.min.js"
	},
	"packages":
	{
		"starcs": "https://github.com/acoustep/starcs/archive/master.zip",
		"html5_boilerplate": "https://github.com/h5bp/html5-boilerplate/zipball/master"
	}
}
```
## Installation

First make sure your public_html/.htaccess is set up so that the base URL is correct.

In command line run the following

```
composer install 
gem install compass_twitter_bootstrap
```
If you wish to run coffeescript tasks with Rake then make sure you install the following gems

```
gem install 'uglifier'
gem install 'listen'
gem install 'rb-fsevent'
bundle install
```
If you do not then remove them for your Gemfile located in the project's root directory before running bundle install for compass bootstrap.

### Editing Configuration
Open config.php in the projects root directory.  Here you can set some of the project defaults.  Environment, Project title and various SEO stuff.

### Editing The Database Connection
The database settings live in application/config/development.example.php and production.example.php - remove the .example from the file names and edit the configuration.


### Using Ruckusing Migrations 
If you want to use ruckusing for migration management (which I recommend and works great alongside PHP ActiveRecord) then change ruckusing.conf.example.php to ruckusing.conf.php and edit the development array to your database settings.

Then run
```
php ruckus db:setup
```

### Additional Info

When viewing your app make sure you open the public_html folder other wise your assets won't show.

## Editing your Application

### Routes
Routes live in ```application/routes.php```.

### Templates
Twig Templates are located inside of ```application/views/```.  
The layout template is located in ```application/views/layouts/default.twig.html```.

### Models
Active Record models are in ```application/models/```.

### Assets

#### Coffeescript 
Coffeescript is managed inside of ```application/assets/coffeescript/```

```scripts.coffee``` is the default file to edit.  If you add more makesure you edit the ```Rakefile``` and include them in ```FILENAMES```.

You can then run

* ```Rake build```
* ```Rake watch```
* ```Rake clean```

Output is built and minified to ```public_html/js/```.

#### Compass
Sass Files are managed in ```application/assets/sass/```.

Use ```compass watch``` to output css to ```public_html/css``` you can edit output settings in ```config.rb```.

## Further reading
Make sure you check out the websites and documentation for each component of Starcs.

* [Slim](http://www.slimframework.com/)
* [Twig](http://twig.sensiolabs.org/)
* [PHP ActiveRecord](http://www.phpactiverecord.org/)
* [CoffeeScript](http://coffeescript.org/)
* [Compass](http://compass-style.org/)
* [Compass Twitter Bootstrap](https://github.com/vwall/compass-twitter-bootstrap)
* [Ruckusing migrations](https://github.com/ruckus/ruckusing-migrations)
* [Rakefile](https://gist.github.com/andrewberls/3118851)
* [Using Twig with Slim](http://silentworks.co.uk/blog/development/using-twig-with-slim-framework.html)
* [Using PHP ActiveRecord with Slim](http://silentworks.co.uk/blog/development/using-phpactiverecord-with-slim-framework.html)

## Credits

All credit goes to everyone that's worked on all the dependancies! All I've done is put them together in a little package.

## To Do
* PHPUnit integration
* Demo
* Alternative Foundation Version