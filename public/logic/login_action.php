<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 3/26/2016
 * Time: 3:03 PM
 */
session_start();

//check whether we are local or production and load config file from the correct location
if($_SERVER['SERVER_NAME'] == 'biking.loc'){
    include('/xampp/htdocs/school/biking/dbconfig.php');
    include('/xampp/htdocs/school/biking/site_logic/login.php');
}else{
    include('/var/www/html/biking/dbconfig.php');
    include('/var/www/html/biking/site_logic/login.php');
}

?>