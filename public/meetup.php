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
<?php $css = '<link rel="stylesheet" type="text/css" href="/css/meetup.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.min.css">'?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/htmlheader.php';?>
<body class="meetup events">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
<div class="container-fluid" id="content_container">
    <div class="row">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/left_aside.php' ?>
        <div class="col-sm-8" id="main_content">
            <?php if(isset($_SESSION['id'])){ ?>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#upcoming" aria-controls="upcoming" role="tab" data-toggle="tab">Upcoming Meetups</a></li>
                <li role="presentation"><a href="#create" aria-controls="create" role="tab" data-toggle="tab">Create a New Meetup</a></li>
            </ul>
            <?php } ?>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="upcoming">
                    <div class="row">
                        <div class="col-sm-12"><h3>Upcoming Meetups</h3></div>
                    </div>
                    <?php foreach($results as $result){?>
                        <div class="row meetuprow">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-12">Date: <?php echo $result['date']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">Time: <?php echo $result['time']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">Discipline: <?php echo $result['discipline']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">Skill Level: <?php echo $result['level']; ?></div>
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
                                    <form method="post" action="/logic/meet_status.php">
                                        <input type="hidden" name="attending" value=0>
                                        <input type="hidden" name="event_id" value="<?php echo $result['event_id']; ?>">
                                        <input type="submit" class="btn btn-default attend_btn" value="I can't go">
                                    </form>
                                <?php }elseif(isset($_SESSION['id'])){?>
                                    <form method="post" action="/logic/meet_status.php">
                                        <input type="hidden" name="attending" value=1>
                                        <input type="hidden" name="event_id" value="<?php echo $result['event_id']; ?>">
                                        <input type="submit" class="btn btn-default attend_btn" value="Count Me In!">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php if(isset($_SESSION['id'])){ ?>
                <div role="tabpanel" class="tab-pane" id="create">
                    <div class="row">
                        <div class="col-sm-12"><h3>Create A New Meetup</h3></div>
                    </div>
                    <div class="row meetuprow">
                        <form class="form-horizontal" method="post" action="/logic/add_meetup.php" id="add_meetup_form">
                            <div class="form-group">
                                <label for="discipline" class="col-sm-4 control-label">Discipline:</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="discipline" id="discipline">
                                        <option value="mountain">Mountain</option>
                                        <option value="road">Road</option>
                                        <option value="cross country">Cross Country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="level" class="col-sm-4 control-label">Skill Level:</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="level" id="level">
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="expert">Expert</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-4 control-label">Date:</label>
                                <div class="col-sm-7">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" name="date" id="date">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="time" class="col-sm-4 control-label">Time:</label>
                                <div class="col-sm-7">
                                    <input type="time" class="form-control" id="time" name="time">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="location" class="col-sm-4 control-label">Location:</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="location" id="location">
                                        <?php foreach($displayLocations as $display){ ?>
                                            <option value="<?php echo($display['id'])?>"><?php echo($display['name'])?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <?php if(isset($_SESSION['formWarning'])){?>
                                <div class="row">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <span>Please ensure all fields are filled.</span>
                                    </div>
                                </div>
                            <?php }
                            unset($_SESSION['formWarning']);
                            ?>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-default">Create Meetup!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/right_aside.php' ?>
    </div>
</div><!-- end container -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
<!-- page specific js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/js/meetup.js"></script>
</body>
</html>

