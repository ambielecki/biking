<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 3/28/2016
 * Time: 1:16 PM
 */
//check if we have $_POST info
if($_POST){
    //set url for redirect
    $url = 'http://'.$_SERVER['SERVER_NAME'];
    $signup = $url.'/signup';

    if($_POST['first_name']&&$_POST['last_name']&&$_POST['email']&&$_POST['password']&&($_POST['password']===$_POST['password_confirmation'])){

        //open db connect
        $db = mysqli_connect(
            $default_host, $default_user, $default_password, $default_db
        );
        if ($db->connect_errno) {
            $_SESSION['flash_error'] = 'Database connection failed, error code: ' . $db->connect_error;
            mysqli_close($db);
            header("Location: $signup");
        }else{
            //fail charset change
            if(!$db->set_charset("utf8")) {
                $_SESSION['flash_error'] = 'Error loading character set' . $db->error;
                mysqli_close($db);
                header("Location: $signup");

            //successful charset change
            }else{
                //minimally sanitize inputs for the db
                $first_name = $db->real_escape_string($_POST['first_name']);
                $last_name = $db->real_escape_string($_POST['last_name']);
                $email = $db->real_escape_string($_POST['email']);
                $pwd = $db->real_escape_string($_POST['password']);
                //set password hash
                $password = password_hash($pwd, PASSWORD_DEFAULT);

                //create the sql query to add a new user in the users table
                //user levels 0-superAdmin 1-admin 2-confirmed user 3-unconfirmed user
                $newUser = "INSERT INTO users (first_name, last_name, email, password, level)
                  VALUES ('$first_name', '$last_name', '$email', '$password', 1)";

                //run the query
                if(!$db->query($newUser)){

                    //Query fails, flash message ad return to login page
                    $_SESSION['flash_error'] = 'That email has already been signed up, please select another.';
                    mysqli_close($db);
                    header("Location: $signup");
                }else{
                    //close db connection
                    mysqli_close($db);

                    //set session variables
                    $_SESSION['first_name'] = $first_name;
                    $_SESSION['last_name'] = $last_name;
                    $_SESSION['email'] = $email;
                    $_SESSION['flash'] = 'Thank you for signing up, you are now logged in.';
                    //set the new header to go back to the homepage after signing up
                    header("Location: $url");
                }
            }//close successful charset change
        }//close successful db open
    //close check for filled fields
    }else{
        $_SESSION['formWarning'] = true;
        header("Location: $signup");
    }
}//close post check