<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Update</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/styles.css">
</head>
<body id="login">
<h1>Update Users</h1>
<a href="show_students.php"><button>Cancel</button></a>
<hr>
<form action="updateProcess.php" method="POST">
    <?php
    $connectdb= mysqli_connect("localhost", "root", "", "cat-two");
    $id=$_GET['y'];
    $fetch = mysqli_query($connectdb, "select * from students where id=$id");
    $row= mysqli_fetch_assoc($fetch);
    extract($row);
    if(isset($_GET['y'])){

    }
    ?>
    <label for="">Username:</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
    <label for="">Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <label for="">Registration Number:</label>
    <input type="text" name="reg_num" value="<?php echo $reg_num ;?>">
    <label for="">Year:</label>
    <input type="text" name="year" value="<?php echo $year ;?>">
    <label for="">Age:</label>
    <input type="text" name="age" value="<?php echo $age ;?>">
    <input hidden type="number" name="id" value="<?php echo $id ;?>">
    <input type="submit" name="btn_save" value="Update">
</form>



</body>
</html>
