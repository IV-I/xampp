<?php

include ("dbConnect007i.php");

$name = $_POST["name"];
$comment = $_POST["comment"];

$comment_length = strlen($comment);

if($comment_length >200)
{
    header("location: Home.php?error=1");// user is directed to home page if error
}else{
    mysqli_query("INSERT INTO comments VALUES('','$name','$comment')");
    header("location: groupcomment.php"); // User will be redirected to Group page
}
?>

