<?php
session_start();
require_once ("config_db.php");

$name=mysqli_real_escape_string($conn,$_POST['user']);
$pass=mysqli_real_escape_string($conn,$_POST['password']);

$req = "select * from usertable where name='$name'";
$res = mysqli_query($conn,$req);

$num = mysqli_num_rows($res);

if($num==1) {
     echo"Username Already Exists";
}else{
    $insert = "insert into usertable values('$name','$pass')";
    mysqli_query($conn,$insert);
    echo"Registration Successful";
}


mysqli_close($conn);
?>