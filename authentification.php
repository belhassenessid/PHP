<?php
session_start();
require_once ("config_db.php");

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $req = "select * from usertable where name='$name' and password='$pass'";
    $res = mysqli_query($conn,$req);

    $num = mysqli_num_rows($res);

    if($num==1) {
        $_SESSION['username']=$name;
        header('location:home.php');
    }else{
        header('location:login.php');
    }


    mysqli_close($conn);
?>