<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 4/24/2016
 * Time: 11:56 AM
 */
$url = 'http://' . $_SERVER['SERVER_NAME'];;
//open db connection
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
        //query to get the event details
        $getLocations = "SELECT events.id, events.discipline, events.level, events.date, users.first_name, users.last_name, events.location_id, locations.name, locations.street, locations.city, locations.state, locations.zip
                              FROM events
                              JOIN locations ON events.location_id = locations.id
                              JOIN users ON events.organizer_id = users.id
                              ORDER BY events.date ASC;";
        if (!$userQuery = $db->query($getLocations)) {
            //Query fails, flash message ad return to login page
            $_SESSION['flash_error'] = 'There was a problem querying the database, please try again.';
            mysqli_close($db);
            header("Location: $url");
        } else {
            //get everything we need for display
            $results = [];
            //loop through each event
            foreach($userQuery as $query){
                $thisResult = [];
                //query to find users attending each event
                $attending = "SELECT users.first_name, users.last_name
                                  FROM event_user
                                  JOIN users ON event_user.user_id = users.id
                                  JOIN events ON event_user.event_id = events.id
                                  WHERE events.id =".$query['id'].";";
                if (!$userQuery2 = $db->query($attending)) {
                    $_SESSION['flash_error'] = 'There was a problem querying the database, please try again.';
                    mysqli_close($db);
                    header("Location: $url");
                }else{
                    //build an array of attendees
                    $inAttendence = [];
                    foreach($userQuery2 as $query2){
                        $thisAttendence = [];
                        $thisAttendence['biker_name'] = $query2['first_name']." ".$query2['last_name'];
                        array_push($inAttendence, $thisAttendence);
                    }
                    $thisResult['attendees'] = $inAttendence;
                }
                //if someone is logged in, see if they are attending the event
                if(isset($_SESSION['id'])){
                    $going = "SELECT * from event_user
                                WHERE user_id =".$_SESSION['id']." AND event_id=".$query['id']." LIMIT 1;";
                    if (!$userQuery3 = $db->query($going)) {
                        $_SESSION['flash_error'] = 'There was a problem querying the database, please try again.';
                        mysqli_close($db);
                        header("Location: $url");
                    }else{
                        $row = $userQuery3->fetch_assoc();
                        if($row['id']){
                            $thisResult['going'] = true;
                        }else{
                            $thisResult['going'] = false;
                        }
                    }
                }
                $thisResult['event_id'] = $query['id'];
                $thisResult['date'] = date('l, F jS, Y', strtotime($query['date']));
                $thisResult['time'] = date('gA', strtotime($query['date']));
                $thisResult['location'] = $query['name'];
                $thisResult['address'] = $query['street'].", ".$query['city'].", ".$query['state'].", ".$query['zip'];
                $thisResult['organizer'] = $query['first_name']." ".$query['last_name'];
                array_push($results, $thisResult);
            }
        }
    }
}
