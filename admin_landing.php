<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Page</title>
    <link rel="stylesheet" href="Bootstrap/css/styles.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
</head>
<body id="login">
<div><h1 class="lgn_2_txt">Welcome
        <?php
        session_start();
        $nme=$_SESSION['user'];
        echo $nme;
        ?>
        !</h1></div>
<div class="row fr">
    <div class="col-md-2 ">


    </div>
    <div class="col-md-8 ">
        <p class="lgn_2_txt">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, animi architecto,
            consequatur cupiditate dicta eveniet id magni molestias nemo, obcaecati perferendis provident
            quidem quis quod reprehenderit tenetur unde veniam voluptas!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at dolor, earum eum fuga
            id illum ipsam non omnis, possimus praesentium quisquam, quo quod repellat sed sunt totam
            velit voluptas.
        </p>

    </div>
<div class="col-md-2">
    <ul>
        <li><a class="we" href="admin_landing.php">Home</a></li>
        <li><a class="we" href="add_student.php">Add student</a></li>
        <li><a class="we" href="show_students.php">Show Students</a></li>
        <li><a class="we" href="manage_students.php">Manage Students</a></li>
        <li><a class="we" href="index.php">Logout</a></li>
    </ul>
</div>
<div class="ftr">
    <p class="lgn_2_txt"> Copyrights Reserved <?php echo date('Y')?></p>
</div>
</div>
</body>
</html>