
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php $title = 'Biking Around Boston'?>
<?php $css = ''?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/htmlheader.php';?>
<body id="home">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
    <div class="container-fluid" id="content_container">
        <div class="row">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/left_aside.php' ?>
            <div class="col-sm-8" id="main_content">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>What Type of Biker are You? We've Got a Little Bit of Everything</h2>
                        <p>
                            For an area not far Boston proper, the North Shore and Metro West offer a wealth of both road biking and mountain biking opportunities.
                            You don't need to travel far outside of the city to find numerous parks for off road adventures and miles and miles of road biking.
                        </p>
                        <h3>Mountain Biking</h3>
                        <p>
                            For Mountain Biking you can find classic New England roots and rocks with a mix of single trail and fire roads at the 2500+ acre
                            <a href="http://www.mass.gov/eea/agencies/dcr/massparks/region-north/middlesex-fells-reservation.html">Middlesex Fells</a>,
                            located just off Rt 93 a few miles north of Boston. For more technical riding, it's hard to beat the rocks and drops located in the
                            <a href="http://www.cityoflynn.net/citydepartments_lynnwoods.shtml">Lynn Woods Reservation</a> right off Rt 1.
                        </p>
                        <p>
                            Looking to get a little further from the hustle and bustle of the city (and don't mind a little driving)? Sites like the
                            <a href="http://www.mass.gov/eea/agencies/dcr/massparks/region-north/willowdale-state-forest.html">Willowdale State Forest</a> and
                            <a href="http://www.mass.gov/eea/agencies/dcr/massparks/region-north/harold-parker-state-forest.html">Harold Parker State Forest</a> have trails for
                            bikers of every ability.
                        </p>
                        <h3>Road Biking</h3>
                        <p>
                            Boston's streets may seem a little intimidating and at times poorly maintained, but if you are willing to get a little bit outside of the city there
                            are tremendous opportunities for riding.  From the roads around the <a href="https://www.google.com/maps/@42.4512531,-71.106494,13.25z">Fells</a>, to routes
                            hugging the coastline, and leisurely rides through he northern suburbs, we can find something to match every style of riding.
                        </p>
                        <h3>Social Riding</h3>
                        <p>
                            We've implemented a simple <a href="/meetup">meet up feature</a> for users of this site. Sign up, log in, and you'll be able to join rides that our users
                            have created around the area.
                        </p>
                        <p>
                            Looking for something more organized? Check out the <a href="#">Events Page</a> for a list of local group rides, centuries, and other biking events. Or
                            visit the sites of one of the many local bike clubs like the <a href="http://www.nscyc.org/">North Shore Cyclist</a> or the
                            <a href="http://www.nemba.org/rides">New England Mountain Bike Association</a>.
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="/images/full/fells_bridge.jpg"><img src="/images/500px/fells_bridge.jpg" class="img-responsive" alt="Railroad Bridge in Middlesex Fells" Title="Railroad Bridge in Middlesex Fells">
                                </a>
                                <h5>A light rail bridge in the Middlesex Fells.</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="/images/full/deer_island.jpg"><img src="/images/500px/deer_island.jpg" class="img-responsive" alt="View of Boston from Deer Island" Title="Boston Skyline from Deer Island"></a>
                                <h5>The Boston Skyline from Deer Island.</h5>
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
</body>
</html>
