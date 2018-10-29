<?php
/**
 * Created by PhpStorm.
 * User: mohamud abdifatah
 * Date: 23/10/2018
 * Time: 10:49
 */
$connectdb= mysqli_connect("localhost", "root", "", "cat-two");
if(isset($_POST['btn_save'])){
    extract($_POST);

    mysqli_query($connectdb, "UPDATE students SET username ='$username', name='$name', reg_num='$reg_num', year='$year', age='$age' WHERE id=$id");
    header("location: show_students.php");
}