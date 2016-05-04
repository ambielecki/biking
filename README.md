# Biking Around The North Shore of Boston

## Live URL
<http://cscie12.andrewbielecki.me>

## Description
A site describing some of the mountain biking and road biking around the North Shore and Metro West areas of Boston.

## Details
Login / Signup pages are implemented with PHP and a MySQL database, so that won't work locally unless you want to set up a dbconfig.php 
(it's not in version control as the setting are different locally and in production) and a MySQL DB (I provided SQL scripts in the zip to setup the tables).
 It's a pretty minimal proof of concept setup. There's some server side validation and sanitization of inputs, but it would require a lot more work before really going live.
User details are only contained in session variables, I'd need to implement client side cookies and a decent amount of code to make a remember me type function. I also would like to 
configure usernames for something like this, but in reality I would use a framework to make this app in a real world scenario, and that's a lot of effort to make sure things aren't 
being duplicated.

I have not implemented adding new meetups on the meetup page yet, but meetups from the DB are displayed and if a user is logged in they can indicate whether they are interested in going or not.  Just hit the limit of how much php I want to write for interacting with the DB without a framework.
 
login: test@user.com
pwd: foobarfizzbuzz

## Know Validation Errors

HTML All Pages- Bad Value from Google Fonts loading of fonts - this is Google's syntax

HTML - Middlesex Fells Page - Bad value gallery1 on rel, these errors are produced as a result of the fancybox image viewer

CSS Errors from using Bootstrap

## Outside code

*   Bootstrap

    [Getbootstrap](http://getbootstrap.com/)
    
*   FontAwesome

    [Font Awesome](https://fortawesome.github.io/Font-Awesome/)
    
*   Weather Icons

    [Weather Icons](https://erikflowers.github.io/weather-icons/)
    
*   OpenWeatherMap

    [OpenWeatherMap](http://openweathermap.org/)
    
*   OpenWeatherMap PHP API

    [cmfcmf/OpenWeatherMap-PHP-API](https://github.com/cmfcmf/OpenWeatherMap-PHP-Api)
    
*   Composer - for loading PHP packages

    [Composer](https://getcomposer.org/)

*   Footer CSS

    [Modern Clean CSS "Sticky footer"](http://mystrd.at/modern-clean-css-sticky-footer/)
    
*   CSS Vertical Align

    [Vertical align anything with just 3 lines of CSS](http://zerosixthree.se/vertical-align-anything-with-just-3-lines-of-css/)
    
*   Gradient Mixin

    [Useful scss mixins(rounded corners, gradients, text-field, button)](https://gist.github.com/garyharan/957284)
    
*   Customized Navbar Colors for Bootstrap

    [TWBSColor]( http://work.smarchal.com/twbscolor/)
    
*   Github webhook for SCSS compilation
    
    [Steve Grunwell](https://stevegrunwell.com/blog/automatically-recompile-sass-upon-deployment-using-git-hooks/)
    
*   Biking Favicon

    [Faviconshut](http://www.faviconshut.com)
    
*   FancyBox Image Gallery
    
    [fancyBox](http://fancyapps.com/fancybox/)
    
*   jQuery

    [jQuery](https://jquery.com/)
    
*   jQuery Validation

    [jQueryValidation](https://jqueryvalidation.org/)
    
    
   