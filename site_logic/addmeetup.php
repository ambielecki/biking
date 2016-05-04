<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 4/24/2016
 * Time: 11:56 AM
 */
$url = 'http://' . $_SERVER['SERVER_NAME'].'/meetup';
//open db connection
if($_POST['date']&&$_POST['time']&&$_POST['location']&&$_POST['discipline']&&$_POST['level']){
    $db = mysqli_connect(
        $default_host, $default_user, $default_password, $default_db
    );

    //check for connection error
    if($db->connect_errno) {
        $_SESSION['flash_error'] = 'Database connection failed, error code: ' . $db->connect_error;
        mysqli_close($db);
        header("Location: $url");
        //success, ensure character set is utf-8
    }else {
        //fail charset change
        if (!$db->set_charset("utf8")) {
            $_SESSION['flash_error'] = 'Error loading character set' . $db->error;
            mysqli_close($db);
            header("Location: $url");

            //successful charset change
        } else {
            //minimally sanitize db inputs (would need more for a real world app)
            $date = $db->real_escape_string(date_create($_POST['date'].' '.$_POST['time'])->format('Y-m-d H:i:s'));
            $location = $db->real_escape_string($_POST['location']);
            $discipline = $db->real_escape_string($_POST['discipline']);
            $level = $db->real_escape_string($_POST['level']);
            $user = $_SESSION['id'];
            //build the query
            $newMeetUp = "INSERT INTO events (location_id, discipline, level, date, organizer_id)
                  VALUES ('$location', '$discipline', '$level', '$date', '$user')";
            if(!$db->query($newMeetUp)){

                //Query fails, flash message ad return to login page
                $_SESSION['flash_error'] = 'There was a problem adding your meetup to the database, please try again.';
                mysqli_close($db);
                header("Location: $url");
            }else{
                //close db connection
                mysqli_close($db);

                //set session variables
                $_SESSION['flash'] = 'Meetup added, maybe you would like to join it?.';
                //set the new header to go back to meetupp
                header("Location: $url");
            }
        }
    }
}else{
    $_SESSION['formWarning'] = true;
    $_SESSION['flash_error'] = 'There was a problem submitting your meetup, please try again';
    header("Location: $url");
}