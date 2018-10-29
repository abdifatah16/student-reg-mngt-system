<?php
/**
 * Created by PhpStorm.
 * User: mohamud abdifatah
 * Date: 24/10/2018
 * Time: 10:13
 */



if(isset($_GET['btn_submit'])) {
    $connectdb = mysqli_connect("localhost", "root", "", "cat-two");
    if (!$connectdb) {
        echo "Error Connecting to DataBase";
    } else {
        session_start();
        $username = $_GET['username'];
        $password = $_GET['password'];
        $_SESSION['user'] = $username;
        $checker = "SELECT  * FROM `admin` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connectdb, $checker);
        $cnt = mysqli_num_rows($result);
        if ($cnt == 1) {
            header('location:admin_landing.php');
        } else {
            header('location:index.php');
        }

    }
}