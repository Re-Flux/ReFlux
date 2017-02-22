## ReFlux 1.0 Readme

## About

ReFlux is an open source forum application released under the GNU General Public Licence. It is free to download and use and is based on FluxBB v1.5.10 which was conceived and designed to be fast and lightweight whilst not sacrificing essential functionality or usability.

## Requirements

* A webserver
* PHP 4.4.0 or later
* A database such as MySQL 4.1.2 or later, PostgreSQL 7.0 or later, or SQLite 2

## Plugins

ReFlux includes two popular plugins out of the box.
* EZBBC Toolbar - Visual toolbar for popular BBCodes.
* ReCaptcha - This adds ReCapchta to the registration page for new registrations.

## Recommendations

* Make use of a PHP accelerator such as APC or XCache
* Make sure PHP has the zlib module installed to allow ReFlux to gzip output

## Links

* Homepage: http://re-flux.com
* Documentation:
* Community: http://re-flux.com/forums/
* Development: http://github.com/Re-Flux/ReFlux

===============
## INSTALLATION
===============

Installation is vry simple.....

## Preperation
* Create a database on your webserver making a note of Database Name, Database Username & Database Password
* Upload all files to the directory where you want to install the forum (eg: http://yourdomain.com/forum)

## Installation
* Browse to the url of your forum.
* Enter all the information required and then click "Start Install".

## Recommendations
* Log in as administrator and click the Administration link in the main menu. Part way down you will see a warning that says the install file still exists. Please delete using the link provided.
* Click on Options in the Admin Menu on the left and then scroll down to Registration. Make sure that "Allow new registrations" is set to NO while you are setting up your board, you dont want people registering just yet.
* To change your logo you simply need to replace the logo.png file in the img directory.

## ReCaptcha
To help combat spam and bots we have included the FluxBB ReCaptcha plugin with the installation. This simple plugin adds ReCaptcha to the registration page of your forum. To configure you will be required to register at https://www.google.com/recaptcha.
Once registered go to your forum admin page and click on ReCaptcha in the Plugins menu on the left. Enter your Site Key and Secret Key and click save.
