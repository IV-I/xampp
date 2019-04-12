<?php
session_start();

include_once("dbConnect007i.php"); //Estabilishing connection with my database

$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);


$sql="INSERT INTO users(username, password)
      VALUES('$username', 'password')";

$result=mysqli_query($db,$sql);


if ($result) {

    $_SESSION['username'] = $username;

    header("location: home.php"); // Redirecting to another page

    echo "Welcome";
}else
{
    echo "Failed to register.";
}


?>
