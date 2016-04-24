<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 4/24/2016
 * Time: 11:52 AM
 */?>
<?php session_start();

//check whether we are local or production and load config file from the correct location
if($_SERVER['SERVER_NAME'] == 'biking.loc'){
    include('/xampp/htdocs/school/biking/dbconfig.php');
    include('/xampp/htdocs/school/biking/site_logic/getmeetups.php');
}else{
    include('/var/www/html/biking/dbconfig.php');
    include('/var/www/html/biking/site_logic/getmeetups.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<?php $title = 'Biking Around Boston - Meetups'?>
<?php $css = '<link rel="stylesheet" type="text/css" href="/css/meetup.css">'?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/htmlheader.php';?>
<body id="home">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
<div class="container-fluid" id="content_container">
    <div class="row">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/left_aside.php' ?>
        <div class="col-sm-8" id="main_content">
            <div class="row">
                <div class="col-sm-12"><h3>Upcoming Meetups</h3></div>
            </div>
            <?php foreach($results as $result){?>
                <div class="row meetup">
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-12">Date: <?php echo $result['date']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">Time: <?php echo $result['time']; ?></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-12">Location: <?php echo $result['location']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">Address: <?php echo $result['address']; ?></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-12">Organizer: <?php echo $result['organizer']; ?></div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <span data-toggle="tooltip" data-html="true" data-placement="bottom"
                            Title="<?php foreach($result['attendees'] as $biker){?>
                                        <?php echo $biker['biker_name']."<br>";?>
                                    <?php } ?>">
                            <?php echo count($result['attendees']); ?> <i class="fa fa-bicycle" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="col-sm-2">
                        <?php if(isset($_SESSION['id']) && $result['going']){ ?>
                            <form id="setattendance" method="post">
                                <input type="hidden" id="attending" value="true">
                                <input type="hidden" id="event_id" value="<?php echo $result['event_id']; ?>">
                                <input type="button" class="btn btn-default" id="attend_btn" value="I can't go">
                            </form>
                        <?php }elseif(isset($_SESSION['id'])){?>
                            <form id="setattendance" method="post">
                                <input type="hidden" id="attending" value="false">
                                <input type="hidden" id="event_id" value="<?php echo $result['event_id']; ?>">
                                <input type="button" class="btn btn-default" id="attend_btn" value="Count Me In!">
                            </form>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/right_aside.php' ?>
    </div>
</div><!-- end container -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
<!-- page specific js -->
<script type="text/javascript" src="/js/meetup.js"></script>
</body>
</html>

