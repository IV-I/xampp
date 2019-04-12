<?php
include("dbConnect007i.php"); //Estabilishing connection with my database

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT uid FROM users WHERE username='$username' and password='$password' LIMIT 1";

    //$query = msqli_query($db, $sql);

    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1)
    { session_start();
        $_SESSION['username'] = $username;

        header("location: home.php"); // Redirecting to another page
    }else
    {
        echo "Incorrect username or password.";
    }
}

?>
