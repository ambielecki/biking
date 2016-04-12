<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biking Around Boston - <!-- Add Additional Title Info --></title>
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
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/left_aside.php' ?>
        <div class="col-sm-8" id="main_content">


            <!-- Content -->


        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/right_aside.php' ?>
    </div>
</div><!-- end container -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
<!-- page specific js -->
</body>
</html>
