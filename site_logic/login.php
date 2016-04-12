<?php
//check if we have $_POST info
if ($_POST) {
    if ($_POST['email'] && $_POST['password']) {
        //set url for redirect
        $url = 'http://' . $_SERVER['SERVER_NAME'];
        $login = $url . '/login.php';
        //open db connection
        $db = mysqli_connect(
            $default_host, $default_user, $default_password, $default_db
        );
        //check for connection error
        if($db->connect_errno) {
            $_SESSION['flash_error'] = 'Database connection failed, error code: ' . $db->connect_error;
            mysqli_close($db);
            header("Location: $login");
        //success, ensure character set is utf-8
        }else{
            //fail charset change
            if(!$db->set_charset("utf8")){
                $_SESSION['flash_error'] = 'Error loading character set' . $db->error;
                mysqli_close($db);
                header("Location: $login");

            //successful charset change
            }else{
                //minimally sanitize inputs for the db
                $email = $db->real_escape_string($_POST['email']);
                $password = $db->real_escape_string($_POST['password']);

                //create the sql query to add a new user in the users table
                $checkUser = "SELECT first_name, last_name, email, password FROM users where email= '$email' LIMIT 1";

                //run the query
                if (!$userQuery = $db->query($checkUser)) {

                    //Query fails, flash message ad return to login page
                    $_SESSION['flash_error'] = 'There was a problem querying the database, please try again.';
                    mysqli_close($db);
                    header("Location: $login");
                } else {

                    //close db connection
                    mysqli_close($db);

                    //get the row of data
                    $row = $userQuery->fetch_assoc();

                    //set user variable
                    $userFirst = $row['first_name'];
                    $userLast = $row['last_name'];
                    $userPassword = $row['password'];
                    $userEmail = $row['email'];

                    //check if there is an email returned
                    if (!$userEmail) {
                        $_SESSION['flash_error'] = 'Email not found, please try again.';
                        header("Location: $login");

                    //verify entered password vs stored hash
                    } elseif (password_verify($password, $userPassword)) {

                        //set data to session
                        $_SESSION['first_name'] = $userFirst;
                        $_SESSION['last_name'] = $userLast;
                        $_SESSION['email'] = $userEmail;
                        $_SESSION['flash'] = 'Welcome back '.$userFirst.'!';

                        //set the new header to go back to the homepage after logging in
                        header("Location: $url");

                    //password does not verify, go back to login
                    } else {
                        $_SESSION['flash_error'] = 'Password Incorrect, please try again.';
                        header("Location: $login");
                    }
                }//close query success
            }//close charset success
        }//close db open success
    }//close check for email and password
}//close post check