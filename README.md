# Biking Around The North Shore of Boston

## Live URL
<http://cscie12.andrewbielecki.me>

## Description
A site describing some of the mountain biking and road biking around the North Shore and Metro West areas of Boston. The site's goal is to provide information on local mountain biking and 
road biking opportunities. There is a section dedicated to creating user meetups as well as one implemented page about Middlesex fells and future space for other parks as well as a page 
dedicated to road biking.

## Active Pages
*   Home page <http://cscie12.andrewbielecki.me/>
*   Middlesex Fells <http://cscie12.andrewbielecki.me/mtb/fells.php/>
*   Meetup Page <http://cscie12.andrewbielecki.me/meetup.php>
*   Login <http://cscie12.andrewbielecki.me/login.php>
*   Signup <http://cscie12.andrewbielecki.me/signup.php>

## Login Information

login: test@user.com

pwd: foobarfizzbuzz

## Page Descriptions / Implementation
*   Home Page - A general description of the site and what to expect. Overall the site is focused on biking opportunities around the North Shore and Metro West, with more of a 
focus on mountain biking.  Building out the page in the future you would see more mountain pages as well as a page dedicated to road bike routes and such.  The events dropdown currently only 
has the meetup section active, in the future there would be a page dedicated to events such as road races, centuries, meetups from local clubs etc.

    On the home page and all other pages you can see the nav, which is from bootstrap with some custom JS to implement an iamhere type feature (including the dropdowns). The left sidebar is a php 
include using a composer package to call on the OpenWeatherMaps API.  There's some JS there to set the icon for the weather, though more cases need to be added to cover all situations. On 
the right sidebar is a list of relevant links.

    The site is laid out using Bootstrap, including the nav, responsive images, forms, and tabbed interface on the meetup page.

*   Login / Signup Pages - These are implemented with PHP and a MySQL database, with user data stored in php session for later use. The signup page icorporates the jQuery validation plugin.

*   Middlesex Fells - Under the Mountain Biking Dropdown the Middlesex Fells page is active.  I've included an image of the DCR trail map with a link to the actual pdf. There is also a google map 
to help people with directions.  Lastly I incorporated a fancybox jquery image gallery.

*   Meetups - Under the Events dropdown.  Visitors who are not logged in will only see the upcoming meetups, organizer's name, and by hovering over the bike icon, the name of those attending. 
This data is generated dynamically through php scripts and a MySQL database.  Logged in users will see a button to either join the ride or say they can no longer attend if they had previously 
indicated that they were going. They will also see a new tab on the page to add a new meetup. This forms incorporates the jQuery validator as well as a jQuery plugin for date picking. 

## Future Directions
There is still plenty of work to be done, obviously more pages need to be added to flesh out the site. Even the built page for Middlesex Fells needs quite a bit of expansion. For a real 
deployment I would have liked to focus on more information about things like routes for particular rides, waypoints on trails, directions and that sort of things. It would be nice to let 
users add their own rides or comments as well, maybe even upload their own pictures with some sort of verification.

For road biking I would have built links to cue sheets for rides on a site like RideWithGPS, and include some maps and descriptions of the rides.

The events page would have been pretty easy to create, but still takes a lot of work to track down the information for all the local bike events.

For user creation I'd like to add some sort of email verification, I'd probably tie that in to the meetup page where unverified users would be able to attend events but not create them. The 
meetup page also needs the ability to edit meetups you create and to add locations.

The mobile experience / css needs work. Right now I am not loading the background image on mobile / small screens just to save bandwidth.  I'm also hiding the weather / links 
asides on mobile, but I'd like to find a way to incorporate them in a less busy manner. Probably a text only weather piece and a separate page for the links.

## Lessons Learned
Styling could use some improvement from the base Bootstrap layouts and forms. The backend validation is pretty weak and would certainly need to be beefed up for a real deployment. 
The file structure got a little sloppy as I was trying to keep the PHP logic out of the public folder, but that created a lot of layers to get there (while accounting for the different 
server paths locally and in development).

The biggest thing is that I'd just move the whole thing over to a framework, I'm pretty comfortable with Laravel at this point from CSCI E15, but I had never built something with 
straight PHP and wanted the experience. And now that I know, never again.

Through it all my CSS got stronger (which was one of the reasons for taking the course), I pushed into SASS (which works great using PHPStorm to autocompile and using the webhook to compile
everything in development when pulling updates with git), and just generally strengthened my knowledge around servers and jQuery (my straight JS was already pretty strong from CSCI E3 
and other things I've code, but I've always shied away from jQuery unless absolutely necessary).  

The meetup page is currently showing all meetups and not just those after today's date, that needs to be added. 

## Known Errors

HTML All Pages- Bad Value from Google Fonts loading of fonts - this is Google's syntax

HTML - Middlesex Fells Page - Bad value gallery1 on rel, these errors are produced as a result of the fancybox image viewer

CSS Errors from using Bootstrap

The header gradient is not compatible with IE, that definitely needs to be fixed.

htaccess - Had trouble getting the file caching to work, my guess is this has to do with my server config, which I'm using for multiple projects. Looks like I need to enable the cache 
configurations. Definitely something for later.

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
    
    
    
   