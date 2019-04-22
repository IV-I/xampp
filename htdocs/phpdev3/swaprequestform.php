<?php
include "dbConnect007i.php";


// Select Query

$query = 'SELECT * FROM assign_groups'; //ORDER BY uid DESC  Tried message trying coursework
$assign_groups = mysqli_query($db, $query); // Try project_team

/*while($row=mysqli_fetch_assoc($assign_groups)){
    $username=$row['username'];
    $project_team=$row['project_team'];

    echo " $username $project_team";
}*/

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

    </div>
    <div class="signupform">
        <div class="w3-card w3-margin w3-padding">
            <h2 align="center">Swap Request Form</h2>

            <form action="adminHomePage.php" method="post" class="w3-container">


                <label class="w3-inpt w3-text-black">User Name</label>
                <input class="w3-input w3-border" type="text" name="username" placeholder="First & Last Name" required>
                <br>
                <label class="w3-inpt w3-text-black"> Choose A Project Group</label>
                <select class="w3-input w3-border" type="text" name="project_team" required>
                    <option>Group A</option>
                    <option>Group B</option>
                    <option>Group C</option>
                    <option>Group D</option>
                    <option>Group E</option>
                </select>
                <br>
                <label class="w3-inpt w3-text-black">Reason for Swapping</label>
                <textarea rows="5" cols="60" class="w3-input w3-border" type="text" name="username" placeholder="State reasons for swapping..." required></textarea>
                <br>

                <button type="submit" name="submit" value="comment">Assign</button>

            </form>
            <hr>
            <ul>
                <?php while ($row = mysqli_fetch_assoc($assign_groups)): ?> <!-- tRY coursework -->
                    <li><?php echo $row['username']; ?> | <?php echo $row['project_team']; ?></li>
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
