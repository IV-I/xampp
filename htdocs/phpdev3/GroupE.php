<?php
include "dbConnect007i.php";


// Select Query

$query = 'SELECT * FROM assigngroupe'; //ORDER BY uid DESC  Tried message trying coursework
$assigngroupe = mysqli_query($db, $query); // Try project_team


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
        <h4>SPORTS TEAM MANAGER</h4>
<p>The student Union sports section wants an application to help sports team managers organize team selection for sports fixtures in sports such as five-a-side football or badminton. It is often difficult knowing who is available for particular fixtures and then informing the players they have been selected. An application would allow a squad to be allocated to a team, squad members to identify their availability for particular fixtures and the team manager to select a team from the available squad members. A project exists where a web application can be made to aid in the managing of the team selection process. This system will require the following types of users:<br>
•	Administrator<br>
•	Student Team Manager<br>
•	Students Squad Members<br>
Accompanying this, the following basic functionality should be implemented:<br>
<br>•	Administrator should be able to enter the name of a sport and the team manager<br>
•	A team manager should be able to log in and enter a fixture list<br>
•	The system should be able to allow students to sign up as squad members<br>
•	Student squad members should be able to identify their availability for each fixture<br>
•	The team manager should be able to select a team for each fixture.<br>
•	Students should be able to request to swap groups with other students<br>
•	All users should be able to view teams selected for each fixture.<br>


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