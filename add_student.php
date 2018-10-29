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
<h1>Add Users</h1>
<a href="show_students.php"><button>Cancel</button></a>
<hr>
<form action="saveStudent.php" method="GET">
    <label for="">Username:</label>
    <input type="text" name="username" required placeholder="Username">
    <label for="">Password:</label>
    <input type="text" name="password" required>
    <label for="">Name:</label>
    <input type="text" name="name" required placeholder="John Doe" >
    <label for="">Registration Number:</label>
    <input type="text" name="reg_num" required><br>
    <label for="">Year:</label>
    <input type="text" name="year">
    <label for="">Age:</label>
    <input type="text" name="age">
    <input type="submit" name="btn_save" value="Add">

</form>