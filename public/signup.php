<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biking Around Boston - Sign Up</title>
    <!-- common css -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/css.php'; ?>
    <!-- page specific css -->

    <!-- common js -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/js_header.php'; ?>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 hidden-sm hidden-xs">
                <aside id="aside_left">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tristique vel nisl a gravida. Maecenas id blandit mauris, sed imperdiet urna. Fusce eu sodales magna, sit amet tempor magna. Suspendisse ornare eleifend venenatis. Curabitur sed justo et lectus tincidunt condimentum. Sed consectetur massa leo, nec mattis sem consectetur in. Nunc libero velit, auctor sed ipsum a, sollicitudin venenatis sem. Phasellus risus metus, pretium sit amet malesuada et, mattis non risus. Sed a sem odio. Etiam felis velit, rhoncus et sapien vitae, lobortis sodales sapien. Curabitur dictum sem at justo lobortis sodales. Phasellus pharetra dignissim dignissim.
                    </p>
                </aside>
            </div>
            <div class="col-sm-6" id="main_content">
                <div class="row">
                    <form class="form-horizontal" method="post" action="/logic/sign_up_action.php">
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
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                                <button type="submit" class="btn btn-default">Sign Up!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3">
                <aside id="aside_right">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tristique vel nisl a gravida. Maecenas id blandit mauris, sed imperdiet urna. Fusce eu sodales magna, sit amet tempor magna. Suspendisse ornare eleifend venenatis. Curabitur sed justo et lectus tincidunt condimentum. Sed consectetur massa leo, nec mattis sem consectetur in. Nunc libero velit, auctor sed ipsum a, sollicitudin venenatis sem. Phasellus risus metus, pretium sit amet malesuada et, mattis non risus. Sed a sem odio. Etiam felis velit, rhoncus et sapien vitae, lobortis sodales sapien. Curabitur dictum sem at justo lobortis sodales. Phasellus pharetra dignissim dignissim.
                    </p>
                </aside>
            </div>
        </div>
    </div><!-- end container -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
<!-- page specific js -->
</body>
</html>
