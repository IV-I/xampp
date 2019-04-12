
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <style>

        .w3-container {
            width: 500px;
        }


    </style>
</head>
<body>
<header>
    <div id="campusmoodle">
        <img src="images/campusmoodle.png">
    </div>
    <div>
        <nav class="menu">
            <ul>
                <li id="a">
                    <a href="#a">MY MOODLE</a>
                    <div>
                        <hr><strong>MyMoodle</strong><a href="#"></a>
                        <hr><strong>My Profile</strong><a href="#"></a>
                        <hr><strong>MyPortfolio</strong><a href="#"></a>
                        <hr><strong>RGyoU Portal</strong><a href="#"></a>

                    </div>
                </li>
                <li id="b">
                    <a href="#b">Library</a>
                </li>

                </li>
                <li id="c">
                    <a href="#c">Study Skills</a>
                </li>
                <li id="d">
                    <a href="#d">Employability</a>
                </li>
                <li id="e">
                    <a href="#e">Student Links</a>
                    <div>
                        <hr><strong>Student Help Desk</strong><a href="#"></a>

                        <hr><strong>IT Helpdesk</strong><a href="#"></a>

                        <hr><strong>ICRGU - RGU Ready</strong><a href="#"></a>

                        <hr><strong>Your Assignment</strong><a href="#"></a>

                        <hr><strong>Student Support</strong><a href="#"></a>

                        <hr><strong>Student Representation & Partnership</strong><a href="#"></a>
                        <hr><strong>RGU:Union</strong><a href="#"></a>
                    </div>


                </li>

            </ul>
        </nav>
    </div>
</header>
<main>
    <div class="welcome">
        <h3>SCHOOL OF COMPUTING SCIENCE AND DIGITAL MEDIA</h3>
        <h2>CMM007 - Intranet System Development (Online)</h2>
        <p>On behalf of the teaching team i'd like to welcome you to CMM007, Intranet Systems Development. I'm Dr. Stwart Massie the Module Coordinator, I'll be leading the module (online and on-campus) and will be delivering the teaching throughout the semester.</p>
        <p>I will ask for feedback throughout the module, but if any problems crop up, let me know. As requirement for this module, you are expected to sign in and be assigned to a project group team.</p>
    </div>
    <div class="signupform">
        <div class="w3-card w3-margin w3-padding">
            <h2 align="center">Log In</h2>

            <form action="login.php" method="post" class="w3-container">


                <label class="w3-inpt w3-text-black">User Name</label>
                <input class="w3-input w3-border" type="text" name="username" placeholder="Student Name" required>
                <br>
                <label class="w3-inpt w3-text-black">Password</label>
                <input class="w3-input w3-border" type="password" name="password" required>
                <br>
                <!--<label> Project Groups</label>
                <select class="w3-input w3-border" name="groups" required><br>
                    <option value="">-- Choose Your Group --</option>
                    <option value="groupA">Group A</option>
                    <option value="groupB">Group B</option>
                    <option value="groupC">Group C</option>
                    <option value="groupD">Group D</option>
                    <option value="groupE">Group E</option>
                </select>
                <br>-->
                <button type="submit" name="submit" value="login">Log In</button>
                <p>Not a User? <a href="signup.php"><b>Sign Up</b></a></p>



            </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?> </div>
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
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="CSS/style.css">
<style>
    footer{
</style>

}<footer class="footer">
    <table width="1000px">
        <tr>
            <td><img src="images/rgublklogo.png" alt=""></td>
            <td><h2 style="text-align: center">STAY CONNECTED</h2></td>
            <td><h2 style="text-align: center;color: white">CONTACT</h2></td>
        </tr>
        <tr>
            <td width="250px" style="text-align: center;color: whitesmoke"><a href="http://campusmoodle.rgu.ac.uk/public/policy/policy.html%22" style="color: whitesmoke">User Policy</a>  and <a href="http://campusmoodle.rgu.ac.uk/public/policy/policy.html" style="color: whitesmoke">Data Protection</a>
                <p style="color: whitesmoke">&copy 2019 <a href="https://www.rgu.ac.uk/" style="color: whitesmoke">Robert Gordon University.</a> All rights reserved. </p>
            </td>
            <td width="400px"><ul style="display: flex">
                    <li class="sm"><a href="https://www.facebook.com/"><img src="images/fblogo1.png"></a> </li><br><br>
                    <li class="sm"><a href="https://twitter.com/RobertGordonUni"><img src="images/twitterlogo1.png"></a> </li><br><br>
                    <li class="sm"><a href="https://www.instagram.com/robertgordonuni/"><img src="images/intagramlogo1.png"></a> </li><br><br>
                    <li class="sm"><a href="https://www.youtube.com/user/RobertGordonUni"><img src="images/ytlogo1.png"></a> </li><br><br>
                    <li class="sm"><a href="https://www.linkedin.com/school/robert-gordon-university/"><img src="images/linklogo1.png"></a> </li><br><br>
                    <li class="sm"><a href="https://www.rgu.ac.uk/"><img src="images/rgucurrentstulogo1.png"></a> </li>
                </ul></td>
            <td width="250px"><p style="text-align: center;color: white">Garthdee House, Garthdee Road, Aberdeen AB10 7QB, Scotland, United Kingdom</p>
                <p style="text-align: center; color: white">Phone: +44(0)1224 26 2000</p>
            </td></tr>
    </table>
</footer>

