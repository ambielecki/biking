<?php //check for flash messages
    if(isset($_SESSION['flash_error'])||isset($_SESSION['flash'])){?>
        <div class="container-fluid">
            <?php if(isset($_SESSION['flash_error'])){?>
                <div class="row" id="flash_error">
                    <div class="col-sm-12">
                        <?php echo($_SESSION['flash_error']);
                        unset($_SESSION['flash_error']);
                        ?>
                    </div>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['flash'])){?>
                <div class="row" id="flash">
                    <div class="col-sm-12">
                        <?php
                            echo($_SESSION['flash']);
                            unset($_SESSION['flash']);
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
<?php }/* Close flash message block*/ ?>
<header>
    <div class="container-fluid">
        <div class="jumbotron bg-gradient" id="site_header"><a href="/"><h1>Biking on the North Shore of Boston</h1></a></div>
    </div>
</header>
<!-- Bootstrap nav -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#llnavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" id="nav_home">Home</a>
        </div><!-- end no collapse area -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="llnavbar">
            <!-- collapsable area -->
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mountain Biking <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/mtb/fells/">Middlesex Fells</a></li>
                        <li><a href="#">Lynn Woods</a></li>
                        <li><a href="#">Willowdale</a></li>
                    </ul>
                </li>
                <li><a href="/road">Road Biking</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Planned Events</a></li>
                        <li><a href="/meetup">Meetup / Social</a></li>
                    </ul>
                </li>
            </ul>
            <?php if(!isset($_SESSION['first_name'])){ ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log In / Sign Up <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/login">Log In</a></li>
                            <li><a href="/signup">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            <?php }else{ ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout">Hello <?php echo($_SESSION['first_name'])?> / Logout</a></li>
                </ul>
            <?php } ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>