<?php
include "dbConnect007i.php";


// Select Query

$query = 'SELECT * FROM assigngroupd'; //ORDER BY uid DESC  Tried message trying coursework
$assigngroupd = mysqli_query($db, $query); // Try project_team



if(isset($_GET['error'])){
    $error = $_GET['error'];
}

if(isset($_GET['success'])){
    $success = $_GET['success'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Group Message</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <style>

        .w3-container {
            width: 500px;
        }

        .alert{
            background-color: red;
            color: white;
            padding: 4px;
            margin-bottom: 10px;
        }
        .success{
            background-color: green;
            color: white;
            padding: 4px;
            margin-bottom: 10px;
        }


    </style>
</head>
<body>
<?php

require "adminheader.php"
?>
<main>
    <div class="welcome">
        <?php if(isset($error)): ?>
            <div class="alert"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if(isset($success)): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>

        <h3>SCHOOL OF COMPUTING SCIENCE AND DIGITAL MEDIA</h3>
        <h2>CMM007 - Intranet System Development (Online)</h2>
        <p>On behalf of the teaching team i'd like to welcome you to CMM007, Intranet Systems Development. I'm Dr. Stwart Massie the Module Coordinator, I'll be leading the module (online and on-campus) and will be delivering the teaching throughout the semester.</p>
        <p>I will ask for feedback throughout the module, but if any problems crop up, let me know. As requirement for this module, you are expected to sign in and be assigned to a project group team.</p>
    </div>
    <div class="signupform">
        <div class="w3-card w3-margin w3-padding">
            <h2 align="center">Assign Group D</h2>

            <form action="processassigngroupD.php" method="post" class="w3-container">


                <label class="w3-inpt w3-text-black">User Name</label>
                <input class="w3-input w3-border" type="text" name="username" placeholder="First & Last Name" required>
                <br>
                <label class="w3-inpt w3-text-black">Project Group</label>
                <input class="w3-input w3-border" type="text" name="project_group" required></input>
                <br>

                <button type="submit" name="submit" value="comment">Assign</button>

            </form>
            <hr>
            <ul>
                <?php while ($row = mysqli_fetch_assoc($assigngroupd)): ?> <!-- tRY coursework -->
                    <li><?php echo $row['username']; ?> | <?php echo $row['project_group']; ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</main><br><br>
<!-- End of main -->
<!-- Footer -->
<?php

require ("Footer.php")
?>
</body>
</html>
