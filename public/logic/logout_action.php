<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 3/26/2016
 * Time: 6:49 PM
 */
session_start();

session_unset();
$url = $_SERVER['HTTP_REFERER'];

$_SESSION['flash'] = 'You have been logged out, please come back soon.';

header("Location: $url");