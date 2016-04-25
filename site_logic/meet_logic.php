<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 4/25/2016
 * Time: 8:01 AM
 */
$url = 'http://' . $_SERVER['SERVER_NAME'];
if($_POST){
    $meetup = $url . '/meetup';
    $userId = $_SESSION['id'];
    $eventId = $_POST['event_id'];
    $status = $_POST['attending'];
    $db = mysqli_connect(
        $default_host, $default_user, $default_password, $default_db
    );
    //check for connection error
    if($db->connect_errno) {
        $_SESSION['flash_error'] = 'Database connection failed, error code: ' . $db->connect_error;
        mysqli_close($db);
        header("Location: $meetup");
        //success, ensure character set is utf-8
    }else {
        //fail charset change
        if (!$db->set_charset("utf8")) {
            $_SESSION['flash_error'] = 'Error loading character set' . $db->error;
            mysqli_close($db);
            header("Location: $meetup");

            //successful charset change
        }else{
            if($status){
                echo "Going";
                $query = "INSERT INTO event_user(user_id, event_id) VALUES (".$userId.", ".$eventId.");";
            }else{
                echo "Not going";
                $query = "DELETE FROM event_user WHERE user_id=".$userId." AND event_id=".$eventId.";";
            }
            if (!$userQuery = $db->query($query)) {

                //Query fails, flash message ad return to login page
                $_SESSION['flash_error'] = 'There was a problem querying the database, please try again.';
                mysqli_close($db);
                header("Location: $meetup");
            } else {
                //close db connection
                mysqli_close($db);
                if($status){
                    $_SESSION['flash'] = 'Great, see you there.';
                }else{
                    $_SESSION['flash'] = 'Sorry you cannot make it.';
                }
                header("Location: $meetup");
            }
        }
    }

}else{
    $_SESSION['flash_error'] = 'You are not authorized for this page.';
    header("Location: $url");
}