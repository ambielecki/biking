<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biking Around Boston</title>
    <!-- common css -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/css.php'; ?>
    <!-- page specific css -->

    <!-- common js -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/js_header.php'; ?>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
    <div class="container-fluid" id="content_container">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/left_aside.php' ?>
        <div class="col-sm-6" id="main_content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tristique vel nisl a gravida. Maecenas id blandit mauris, sed imperdiet urna. Fusce eu sodales magna, sit amet tempor magna. Suspendisse ornare eleifend venenatis. Curabitur sed justo et lectus tincidunt condimentum. Sed consectetur massa leo, nec mattis sem consectetur in. Nunc libero velit, auctor sed ipsum a, sollicitudin venenatis sem. Phasellus risus metus, pretium sit amet malesuada et, mattis non risus. Sed a sem odio. Etiam felis velit, rhoncus et sapien vitae, lobortis sodales sapien. Curabitur dictum sem at justo lobortis sodales. Phasellus pharetra dignissim dignissim.
            </p>
            <p>
                Cras cursus neque lectus, vitae lacinia nibh malesuada quis. Suspendisse ut sapien lectus. Suspendisse egestas odio eu arcu eleifend, eu tristique tellus venenatis. Phasellus sollicitudin lobortis turpis, nec cursus massa lobortis ac. Integer porta consequat ex. Nunc et leo rhoncus urna egestas scelerisque eget vel quam. Suspendisse vehicula suscipit tortor at pellentesque. Fusce velit augue, hendrerit in purus in, porta porta mauris. In rhoncus auctor turpis eget pretium. Pellentesque dolor eros, porttitor quis laoreet vel, molestie quis orci.
            </p>
            <p>
                Suspendisse nec nulla lorem. Aliquam pretium nibh tempus, pharetra lorem nec, sodales nibh. Sed eget eleifend nulla. Suspendisse vitae iaculis turpis, vel pharetra tellus. Suspendisse erat dui, ullamcorper ac egestas sit amet, congue ut erat. Suspendisse malesuada sit amet metus vitae mollis. Fusce viverra arcu non tortor ultrices, vel semper nibh blandit. Duis ut libero vel mauris dictum dignissim ut a nulla. Etiam tempus nec augue ut aliquam.
            </p>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/asides/right_aside.php' ?>
    </div><!-- end container -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
    <!-- page specific js -->
</body>
</html>
