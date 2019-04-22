<?php

include "dbConnect007i.php";
?>
<?php


if(!empty($_POST['username']) && !empty($_POST['project_group'])){
    $username = mysqli_real_escape_string($db, $_POST['username']); // This text will safeguard data from hackers
    $project_group = mysqli_real_escape_string($db, $_POST['project_group']); // This text will safeguard data from hackers

    $query = "INSERT INTO assigngroupd(username, project_group) VALUES('$username', '$project_group')";

    if(!mysqli_query($db, $query)){
        die(mysqli_error($db));
    }else {
        header("Location: GroupD.php?success=Welcome%20you%20are%20in%20group%20D");
    }
} else {
    header("Location: assigngroupC.php?error=Please%20Fill%20All%20Fields");
}
?>
