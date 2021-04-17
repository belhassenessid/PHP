<?php
session_start();

$conn = mysqli_connect('localhost','root','','createuser');
mysqli_set_charset($conn,"utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
$name = $_POST['user'];
$pass = $_POST['password'];

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
}
?>