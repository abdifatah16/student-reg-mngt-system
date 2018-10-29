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
<div class=""><h1 class="lgn_2_txt">Students in the System</h1></div>
<div class="row fr">
    <div class="col-md-2 ">


    </div>
    <div class="col-md-8 ">
        <table class="tbl">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Year</th>
                <th>Age</th>
            </tr>
<?php
$connectdb= mysqli_connect("localhost", "root", "", "cat-two");
$fetch= mysqli_query($connectdb, "select * FROM students");
while($row = mysqli_fetch_assoc($fetch)){
    extract($row);
    echo "
<tr>
    <td>
    
    $id
</td>
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