<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 3/26/2016
 * Time: 6:49 PM
 */
session_start();
if($_SERVER['SERVER_NAME'] == 'biking.loc'){
    include('/xampp/htdocs/school/biking/site_logic/logout.php');
}else{
    include('/var/www/html/biking/site_logic/logout.php');
}
