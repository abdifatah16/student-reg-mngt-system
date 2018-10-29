<?php
$connectdb= mysqli_connect("localhost", "root", "", "cat-two");
$id=$_GET['x'];
$fetch = mysqli_query($connectdb, "delete from students where id=$id");
header("location:show_students.php");
