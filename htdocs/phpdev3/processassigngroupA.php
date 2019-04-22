<?php

include "dbConnect007i.php";
?>
<?php


if(!empty($_POST['username']) && !empty($_POST['project_team'])){
    $username = mysqli_real_escape_string($db, $_POST['username']); // This text will safeguard data from hackers
    $project_team = mysqli_real_escape_string($db, $_POST['project_team']); // This text will safeguard data from hackers

    $query = "INSERT INTO assign_groups(username, project_team) VALUES('$username', '$project_team')";

    if(!mysqli_query($db, $query)){
        die(mysqli_error($db));
    }else {
        header("Location: GroupA.php?success=Welcome%20you%20are%20in%20group%20A");
    }
} else {
    header("Location: assigngroupA.php?error=Please%20Fill%20All%20Fields");
}
?>