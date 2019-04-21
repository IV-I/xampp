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


    </style>
</head>
<body>

<?php

require "headerloggedIn.php";
?>
<!-- Main Begin -->
<main>
    <div class="welcome">
        <h3>SCHOOL OF COMPUTING SCIENCE AND DIGITAL MEDIA</h3>
        <h2>CMM007 - Intranet System Development (Online)</h2>
        <p>On behalf of the teaching team i'd like to welcome you to CMM007, Intranet Systems Development. I'm Dr. Stwart Massie the Module Coordinator, I'll be leading the module (online and on-campus) and will be delivering the teaching throughout the semester.</p>
        <p>I will ask for feedback throughout the module, but if any problems crop up, let me know. As requirement for this module, you are expected to sign in and be assigned to a project group team.</p>
    </div>

    <p>SPORTS TEAM MANAGER
The student Union sports section wants an application to help sports team managers organize team selection for sports fixtures in sports such as five-a-side football or badminton. It is often difficult knowing who is available for particular fixtures and then informing the players they have been selected. An application would allow a squad to be allocated to a team, squad members to identify their availability for particular fixtures and the team manager to select a team from the available squad members. A project exists where a web application can be made to aid in the managing of the team selection process. This system will require the following types of users:
•	Administrator
•	Student Team Manager
•	Students Squad Members
Accompanying this, the following basic functionality should be implemented:
•	Administrator should be able to enter the name of a sport and the team manager
•	A team manager should be able to log in and enter a fixture list
•	The system should be able to allow students to sign up as squad members
•	Student squad members should be able to identify their availability for each fixture
•	The team manager should be able to select a team for each fixture.
•	Students should be able to request to swap groups with other students
•	All users should be able to view teams selected for each fixture.


</p>

   </main>
<!-- Main Ends -->
<!-- Footer Begin -->
<?php

require ("Footer.php");

?>
</body>
</html>