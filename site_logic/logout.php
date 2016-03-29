<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 3/28/2016
 * Time: 1:20 PM
 */
session_unset();
$url = $_SERVER['HTTP_REFERER'];

$_SESSION['flash'] = 'You have been logged out, please come back soon.';

header("Location: $url");