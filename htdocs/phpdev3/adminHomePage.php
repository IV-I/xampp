<?php
$username = $_POST['username'];
$project_team = $_POST['project_team'];

if($username == ''|| $project_team == ''){
    header("Location: assigngroupA.php");
}
if($username == ''|| $project_team == 'A'){
    header("Location: assigngroupA.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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


require "adminheader.php";
?>

<main>
    <div class="welcome">
        <h3 style="color: green;text-align: center"> Welcome <?php echo $username; ?>, You are in Group <?php echo $project_team; ?> </h3><br>

        <h3>SCHOOL OF COMPUTING SCIENCE AND DIGITAL MEDIA</h3>
        <h2>CMM007 - Intranet System Development (Online)</h2>

    </div>
    <div class="signupform">
        <div class="w3-card w3-margin w3-padding">
            <h2 align="center">Admin Home Page</h2>

            <div class="w3-container">
                <table>
                    <tr>
                <td class="w3-inpt w3-text-black">User Name</td>

                <br><br><br>
                <td class="w3-inpt w3-text-black">Project Group</td>

                    </tr>
                    <tr>
                        <td class="w3-inpt w3-text-black"><?php echo $username; ?></td>

                        <br> <br><br>
                        <td class="w3-inpt w3-text-black"><?php echo $project_team; ?></td>

                        <br>

                    </tr>
                </table>
            </div>
            <div class="error"> </div>
        </div>
    </div>
</main><br><br>
<!-- End of main -->
<!-- Footer -->
<?php
require "Footer.php";
?>
