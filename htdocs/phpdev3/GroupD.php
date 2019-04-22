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
    <h4>PROJECT RESEARCH PAPER SHARING APP</h4>
In some modules, you are required to take part in a group project in which the project group members read and review research papers as part of the project. It can be difficult for group members to keep up-to-date with the research papers that have been identified and which ones they should be reviewing. There is an opportunity for a web application to be created that could support this process allowing project teams to be created, relevant research papers to be stored, and reviews to be allocated and uploaded. In this system, there are the following types of users:
<br>•	Administrator<br>
•	Student Team Leader<br>
•	Students<br>
<br>Accompanying this, the following basic functionality should be implemented.<br>
<br>•	Administrators should login to the system to gain access<br>
•	Administrators should be able to sets up a project and allocate students to the project, giving one the role of team leader.<br>
•	Students should enter the system through a personalized link and can then<br>
o	be able to upload research papers<br>
o	see any papers that have been allocated to them to review and upload their reviews<br>
o	be able to view all papers and reviews<br>
•	Team Leaders in addition to the student functionality should be able to allocate papers to students for review<br>


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