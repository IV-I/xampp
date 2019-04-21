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

    <p>A SYSTEM FOR MONITORING PROJECT ETHICAL APPROVAL
Every experiment that takes place at Robert Gordon University by a student must receive ethical approval before commencing. This is currently a partly manual achieved with a form that is filled in and then stored online. This project will digitize the process by creating a web application so that the ethical approval of an experiment can take place in a more efficient manner. In this system, there are the following types of users:
•	Administrators
•	Experiment Approval Officers (EAO)
•	Students
Accompanying this, the following basic functionality should be implemented
•	Students should be able to sign up to the system, create an experiment, and then fill in the ethics attached to this. They should also be able to edit the ethics of a project.
o	Students should be able to upload additional files that supplement their ethical approval form (e.g. consent forms)
•	Experiment Approval Officers should be able to view experiments that have been assigned to them, give comments on an experiment, and finally decide whether to grant ethical approval for a project.
•	Administrators should be able to assign experiments to EAO’s.
•	All experiments should be assigned to 2 different EAO’s for feedback.


</p>

    <?php

    if ($users_data['type'] == 1) {
        echo 'Welcome Admin!';
    }
    ?>
</main>
<!-- Main Ends -->
<!-- Footer Begin -->
<?php

require ("Footer.php");

?>
</body>
</html>