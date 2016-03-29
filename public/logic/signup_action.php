<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 3/26/2016
 * Time: 10:50 AM
 */
session_start();
//check whether we are local or production and load config file from the correct location
if($_SERVER['SERVER_NAME'] == 'biking.loc'){
    include('/xampp/htdocs/school/biking/dbconfig.php');
    include('/xampp/htdocs/school/biking/site_logic/signup.php');
}else{
    include('/var/www/html/biking/dbconfig.php');
    include('/var/www/html/biking/site_logic/signup.php');
}

?>