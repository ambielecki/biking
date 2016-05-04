# Biking Around The North Shore of Boston

## Live URL
<http://cscie12.andrewbielecki.me>

## Description
A site describing some of the mountain biking and road biking around the North Shore and Metro West areas of Boston.

## Active Pages
*   Home page <http://cscie12.andrewbielecki.me/>
*   Middlesex Fells <http://cscie12.andrewbielecki.me/mtb/fells.php/>
*   Meetup Page <http://cscie12.andrewbielecki.me/meetup.php>
*   Login <http://cscie12.andrewbielecki.me/login.php>
*   Signup <http://cscie12.andrewbielecki.me/signup.php>

## Login Information

login: test@user.com

pwd: foobarfizzbuzz

## Page Descriptions
*   Home Page - A general description of the site and what to expect. Overall the site is focused on biking opportunities around the North Shore and Metro West, with more of a 
focus on mountain biking.  Building out the page in the future you would see more mountain pages as well as a page dedicated to road bike routes and such.  The events dropdown currently only 
has the meetup section active, in the future there would be a page dedicated to events such as road races, centuries, meetups from local clubs etc.

*   On the home page and all other pages you can see the nav, which is from bootstrap with some custom JS to implement an iamhere type feature (including the dropdowns). The left sidebar is a php 
include using a composer package to call on the OpenWeatherMaps API.  There's some JS there to set the icon for the weather, though more cases need to be added to cover all situations. On 
the right sidebar is a list of relevant links.

*   Login / Signup Gages - These are implemented with PHP and a MySQL database, with user data stored in php session for later use. The signup page icorporates the jQuery validation plugin.

*   Middlesex Fells - Under the Mountain Biking Dropdown the Middlesex Fells page is active.  I've included an image of the DCR trail map with a link to the actual pdf. There is also a google map 
to help people with directions.  Lastly I incorporated a fancybox jquery image gallery.

*   Meetups - Under the Events dropdown.  Visitors who are not logged in will only see the upcoming meetups, organizer's name, and by hovering over the bike icon, the name of those attending. 
This data is generated dynamically through php scripts and a MySQL database.  Logged in users will see a button to either join the ride or say they can no longer attend if they had previously 
indicated that they were going. They will also see a new tab on the page to add a new meetup. This forms incorporates the jQuery validator as well as a jQuery plugin for date picking. 

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
    
*   jQuery Date Picker
    [Bootstrap-Datepicker](https://github.com/eternicode/bootstrap-datepicker)
    
    
    
   