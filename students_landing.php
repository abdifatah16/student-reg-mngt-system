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
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
<p class="lgn_2_txt">
    Your Details:

</p>
        <table class="r">
            <th>Username</th>
            <th>Name</th>
            <th>Registration Num</th>
            <th>Year</th>
            <th>Age</th>
<?php
$connectdb= mysqli_connect("localhost", "root", "", "cat-two");
$fetch= mysqli_query($connectdb, "select * FROM students WHERE username='$nme'");
while($row = mysqli_fetch_assoc($fetch)){
    extract($row);
    echo "
   <tr>
    <td>
    $username
</td>
    <td>
    $name   
    </td>
    <td>
    $reg_num   
    </td>
    <td>
    $year   
    </td>
    <td>
    $age   
    </td>
    ";
    }
    ?>
        </table>
    </div>
<div class="col-md-2">
    <ul>
        <li><a class="we" href="students_landing.php">Home</a></li>
        <li><a class="we" href="index.php">Logout</a></li>
    </ul>
</div>
<div class="ftr">
    <p class="lgn_2_txt"> Copyrights Reserved <?php echo date('Y')?></p>
</div>
</div>
</body>
</html>