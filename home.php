<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>User Sign in && Sign up</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
    <body>
        <a class="float-right" href="logout.php">Logout</a>
        <h1>Welcome Home <?php echo $_SESSION['username']; ?> </h1>
    </body>
</html>