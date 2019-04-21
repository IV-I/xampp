<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
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
<p>PROJECT CONSTRAINTS
    The following constraints must be followed for any project that is created:
    •	Your completed web application must be hosted on an server (accessible to the marker) with up-to-date code stored on GitHub (All code must be available on GitHub);
    •	Your web application must contain both front end (client side) and back end (server side) code;
    •	The created web application must contain the following features:
    o	A login system;
    o	More than one user role, e.g. administrator and general user;
    o	Some type of file upload system; and
    o	A system for users to input data that is stored and then recalled from a database.
    Submissions that do not follow the above constraints do not meet the coursework requirements.
</p>
    <p>INTRODUCTION
        In this coursework you are required, as an individual, to design, build and test a web application of your choice that employs some of the technologies you will learn throughout this module. This is likely to include HTML, CSS, PHP and MySQL.
        CHOOSING A WEB APPLICATION
        The decision of what web application you wish to create is up to you. You can either come up with your own idea or use one of the ideas shown as a guide. Below are five sample web applications that you may wish to consider creating. However, you are encouraged to create your own system.
        Please note that you only need to create one application.
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
