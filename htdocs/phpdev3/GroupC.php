<?php
include "dbConnect007i.php";


// Select Query

$query = 'SELECT * FROM assigngroupc'; //ORDER BY uid DESC  Tried message trying coursework
$assigngroupc = mysqli_query($db, $query); // Try project_team


if(isset($_GET['success'])){
    $success = $_GET['success'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="menu1.css" type="text/css">
    <style>

        .w3-container {
            width: 500px;
        }
        .success{
            background-color: green;
            color: white;
            padding: 4px;
            margin-bottom: 10px;
        }
        .swap{
            text-align: right;
        }


    </style>
</head>
<body>

<?php

require "headerloggedIn.php";
?>
<!-- Main Begin -->
<main>
    <div class="welcome">
        <?php if(isset($success)): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>

        <p class="swap">Do you want to swap your group? Click <a href="swaprequestform.php">here.</a> </p>

        <h3>SCHOOL OF COMPUTING SCIENCE AND DIGITAL MEDIA</h3>
        <h2>CMM007 - Intranet System Development (Online)</h2>
        <p>On behalf of the teaching team i'd like to welcome you to CMM007, Intranet Systems Development. I'm Dr. Stwart Massie the Module Coordinator, I'll be leading the module (online and on-campus) and will be delivering the teaching throughout the semester.</p>
        <p>I will ask for feedback throughout the module, but if any problems crop up, let me know. As requirement for this module, you are expected to sign in and be assigned to a project group team.</p>
    </div>
    <div class="welcome">
        <h3>Group Focus</h3>
        <h4>GROUP PROJECT TEAM MANAGER</h4>
<p>When creating groups for projects group selection can either take place by members of academic staff, or by students selecting their own groups. There are advantages and disadvantages to both methods. A project exists where a web application can be made to aid in the creation of these groups. This system will require the following types of users:
<br>•	Administrator<br>
•	Students<br>
Accompanying this, the following basic functionality should be implemented:<br>
•	Administrators should be able to enter the names / emails of students in a class (either manually or through upload)
•	The system should be able to randomly create groups from a class list<br>
o	This may involve constraints such as a minimum/maximum number of students in a group or splitting degree cohorts.<br>
•	The list of groups should be viewable by all students in the class (through a login system)<br>
•	Students should be able to request to swap groups with other students<br>
•	Group members should be able to leave comments for each other in a group area<br>
o	Group members should also be able to share files in this area.<br>


</p>
    </div>

    <?php
    require "message.php";
    ?>

    </main>
<!-- Main Ends -->
<!-- Footer Begin -->
<?php

require ("Footer.php");

?>
</body>
</html>