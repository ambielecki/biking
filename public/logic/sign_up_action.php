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
}else{
    include('/var/www/html/biking/dbconfig.php');
}

//check if we have $_POST info
if($_POST){
    if($_POST['first_name']&&$_POST['last_name']&&$_POST['email']&&$_POST['password']&&($_POST['password']===$_POST['password_confirmation'])){
        //set url for redirect
        $url = 'http://'.$_SERVER['SERVER_NAME'];
        $signup = $url.'/signup';
        //open db connect
        $db = mysqli_connect(
            $default_host, $default_user, $default_password, $default_db
        );
        if ($db->connect_errno) {
            $_SESSION['flash_error'] = 'Database connection failed, error code: ' . $db->connect_error;
            mysqli_close($db);
            header("Location: $signup");
        }else{
            //minimally sanitize inputs for the db
            $first_name = $db->real_escape_string($_POST['first_name']);
            $last_name = $db->real_escape_string($_POST['last_name']);
            $email = $db->real_escape_string($_POST['email']);
            $pwd = $db->real_escape_string($_POST['password']);
            //set password hash
            $password = password_hash($pwd, PASSWORD_DEFAULT);

            //create the sql query to add a new user in the users table
            $newUser = "INSERT INTO users (first_name, last_name, email, password)
                  VALUES ('$first_name', '$last_name', '$email', '$password')";
            //run the query
            if(!$db->query($newUser)){
                //Query fails, flash message ad return to login page
                $_SESSION['flash_error'] = 'That email has already been signed up, please select another.';
                mysqli_close($db);
                header("Location: $signup");
            }else{
                //close db connection
                mysqli_close($db);
                //dump the output

                //set session variables
                $_SESSION['first_name'] = $first_name;
                $_SESSION['last_name'] = $last_name;
                $_SESSION['email'] = $email;
                $_SESSION['flash'] = 'Thank you for signing up, you are now logged in.';
                //set the new header to go back to the homepage after signing up
                header("Location: $url");
            }
        }
    }
}

?>