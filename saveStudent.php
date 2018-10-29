<?php
/**
 * Created by PhpStorm.
 * User: mohamud abdifatah
 * Date: 18/10/2018
 * Time: 10:28
 */
//$posted = false;

//if( $_GET ) {

if(isset($_GET['btn_save'])){
    $connectdb= mysqli_connect("localhost", "root", "", "cat-two");
    if(!$connectdb){
        echo "Failed to connect to database!";
    }

    $name= $_GET['name'];
    $username= $_GET['username'];
    $reg_num= $_GET['reg_num'];
    $year= $_GET['year'];
    $age= $_GET['age'];
    $password=$_GET['password'];


    $insert= "INSERT INTO `students`(`id`, `username`, `password`, `name`, `reg_num`, `year`, `age`) VALUES (null,'$username','$password','$name','$reg_num','$year','$age')";
    $query= mysqli_query($connectdb,$insert);
    if($query){
        echo "Successfully saved!";
        header("location:show_students.php");
    }
    else{
        echo "Failed to save data!";
    }
}