<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 3/26/2016
 * Time: 9:36 AM
 */

$link = mysqli_connect(
    ini_get("mysql.default.user"),
    ini_get("mysql.default.password"),
    ini_get("mysql.default.host")
);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>