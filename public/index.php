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
                        For an area not far Boston poper, the North Shore and Metro West offer a wealth of both road biking and mountain biking opportunities.  You don't need to travel far outside of the city to find numerous parks for off road adventures and miles and miles of road biking.
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
