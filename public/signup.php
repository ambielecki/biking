<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<?php $title = 'Sign Up'?>
<?php $css = ''?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/htmlheader.php';?>
<body class="signup ls">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
    <div class="container-fluid">
        <div >
            <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/left_aside.php' ?>
            <div class="col-sm-8" id="main_content">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-horizontal" method="post" action="/logic/signup_action.php" id="signup_form">
                            <div class="form-group">
                                <label for="first_name" class="col-sm-4 control-label">First Name:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-sm-4 control-label">Last Name:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">Email:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">Password:</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="col-sm-4 control-label">Confirm Password:</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>
                            <?php if(isset($_SESSION['formWarning'])){?>
                                <div class="row">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <span class="text-danger">Please ensure all fields are filled and passwords match.</span>
                                    </div>
                                </div>
                            <?php }
                            unset($_SESSION['formWarning']);
                            ?>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-default">Sign Up!</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/right_aside.php' ?>
        </div>
    </div><!-- end container -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="js/signup.js"></script>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
<!-- page specific js -->
</body>
</html>
