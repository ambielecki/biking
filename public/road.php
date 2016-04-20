<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 4/12/2016
 * Time: 9:28 AM
 */

session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php $title = 'North Shore Road Biking'?>
<?php $css = ''?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/htmlheader.php';?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/left_aside.php' ?>
        <div class="col-sm-8" id="main_content">
            <h2>Middlesex Fells</h2>
            <div class="row">
                <section class="col-sm-8">
                    <p>The Middlesex Fells Reservation sits just outside the city of Boston, located in the towns of Malden, Medford, Stoneham, Melrose, and Winchester.
                        The Reservation is one of the largest parks in the Boston Metro area, and it's 2,575 acres are full of biking and hiking trails.  Due to the proximity
                        to the city, the Fells sees heavy use by a wide variety of interest groups, not all whom are necessarily aligned</p>
                    <p>Historically there has been tension between Mountain Bikers and groups such as the <a href="www.friendsofthefells.org">Friends of the Fells</a>, though
                        they have taken a less harsh stance towards biking recently.  Still, it is important to be respectful of all trail users and stay on the allowed trails to help
                        maintain our access to this park.</p>
                    <hr>
                    <h3>Some of the Middlesex Fells Rules for Bikers</h3>
                    <ul>
                        <li>Biking is not allowed on unpaved trails during the month of March</li>
                        <li>Bike only on Designated Trails. MTBs are allowed on:
                            <ul>
                                <li>The Mountain Bike Loop: Green Blaze</li>
                                <li>Reservoir Trail in the Western Fells: Orange Blaze</li>
                                <li>All Fire Roads or Forest Roads: Solid Green Lines on trail map</li>
                            </ul>
                        </li>
                        <li>Bikes must yeild to equestrians, runners, and hikers</li>
                        <li>Ride within your ability, at a safe speed, and avoid skidding or continuing to pedal once you have lost traction</li>
                        <li>Bikes must yeild to equestrians, runners, and hikers</li>
                        <li>Avoid trails when muddy or wet</li>
                    </ul>
                    <hr>
                    <h3>Other Rules of Interest</h3>
                    <ul>
                        <li>All dogs must be leashed except in the designated off leash are in the Sheepsfold</li>
                        <li>No more than 3 dogs per person</li>
                        <li>Be Mindful of the No Trespassing Areas for the town of Winchester Water Supply</li>
                        <li>Park is open dawn to dusk</li>
                    </ul>
                </section>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/images/fellsmap.jpg"><img src="/images/small/fellsmap_small.jpg" class="img-responsive" alt="Map of Middlesex Fells"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/documents/fells.pdf">PDF Trail Map from DCR <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 map_wrapper" >
                            <div class="map_div" id="fells_map"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="https://www.google.com/maps/dir//42.4515753,-71.1048641/@42.4501524,-71.1241746,13.75z?hl=en">Directions to Sheepsfold Entrance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/right_aside.php' ?>
    </div>
</div><!-- end container -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
<!-- page specific js -->
<script type="text/javascript" src="/js/fells.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAzpAc4TMsByW-AB3RACV6oP58h8-WGYE&callback=initMap">
</script>
</body>
</html>

