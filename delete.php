<?php 
session_start();
require_once("config_db.php");
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $rem = "delete from panier where id =$id";
    mysqli_query($conn,$rem);
    $_SESSION['message']="product has beed deleted";
    $_SESSION['msg_type']="success";
    header("location: panier.php");
}
?>