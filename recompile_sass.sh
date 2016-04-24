# Code from https://stevegrunwell.com/blog/automatically-recompile-sass-upon-deployment-using-git-hooks/

#!/bin/bash

# Make sure that the 'sass' command exists (see http://stackoverflow.com/a/677212/329911)
command -v sass >/dev/null 2>&1 || {
  echo >&2 "SASS does not appear to be available. Unable to re-compile stylesheets";
  exit 1;
}

# Define our paths and stylesheets
echo "Re-compiling stylesheets..."
cd /var/www/html/biking/public/css

sass site.scss site.css --style compressed
echo "site.scss -> site.css (compressed)"
sass meetup.scss meetup.css --style compressed
echo "meetup.scss -> meetup.css (compressed)"

