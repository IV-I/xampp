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

    <p>PEER ASSESEMENT IN GROUP PROJECTS
        In some modules, you are required to take part in a group project. In these instances, it is necessary for all group members to work together to complete a project. It is expected that all members will work with the same level of commitment and enthusiasm. However, this does not always occur and as such, peer assessment of individuals within group tasks is an important aspect. There is an opportunity for a web application to be created that could support this process. In this system, there are the following types of users:
        •	Administrators
        •	Students
        Accompanying this, the following basic functionality should be implemented.
        •	Administrators should login to the system to gain access
        •	Administrators should be able to set up a coursework item and then should be able to split students into groups for the coursework.
        •	Students should enter the system through a personalized link and can then give feedback on how they worked in a group.
        o	Students should be able to upload files to supplement their feedback
        o	Students should not see the feedback from other students
        •	Administrators should be able to see a detailed report for each group showing how students worked together


    </p>

</main>
<!-- Main Ends -->
<!-- Footer Begin -->
<?php

require ("Footer.php");

?>

</body>
</html>