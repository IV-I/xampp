<?php

include "dbConnect007i.php";
?>
<?php


if(!empty($_POST['username']) && !empty($_POST['message'])){
    $username = mysqli_real_escape_string($db, $_POST['username']); // This text will safeguard data from hackers
    $message = mysqli_real_escape_string($db, $_POST['message']); // This text will safeguard data from hackers

    $query = "INSERT INTO message(username, message) VALUES('$message', '$username')";

    if(!mysqli_query($db, $query)){
        die(mysqli_error($db));
    }else {
        header("Location: message.php?success=Message%20Added");
    }
} else {
    header("Location: message.php?error=Please%20Fill%20All%20Fields");
}
?>