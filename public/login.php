<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<?php $title = 'Login'?>
<?php $css = ''?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/htmlheader.php';?>
<body class="login ls">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/left_aside.php' ?>
            <div class="col-sm-8" id="main_content">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-horizontal" method="post" action="/logic/login_action.php">
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">Email Address:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="emai" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">Password:</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-10">
                                    <button type="submit" class="btn btn-default">Log In!</button>
                                </div>
                            </div>
                        </form>
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
