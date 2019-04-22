        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Admin Log In</title>
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

require "headerloggedIn.php"
?>
<main>
    <div class="welcome">
        <h3>SCHOOL OF COMPUTING SCIENCE AND DIGITAL MEDIA</h3>
        <h2>CMM007 - Intranet System Development (Online)</h2>
        <p>On behalf of the teaching team i'd like to welcome you to CMM007, Intranet Systems Development. I'm Dr. Stwart Massie the Module Coordinator, I'll be leading the module (online and on-campus) and will be delivering the teaching throughout the semester.</p>
        <p>I will ask for feedback throughout the module, but if any problems crop up, let me know. As requirement for this module, you are expected to sign in and be assigned to a project group team.</p>
    </div>
    <div class="signupform">
        <div class="w3-card w3-margin w3-padding">
            <h2 align="center">Admin Log In</h2>

            <form action="admincheck.php" method="post" class="w3-container">


                <label class="w3-inpt w3-text-black">User Name</label>
                <input class="w3-input w3-border" type="text" name="username" placeholder="Admin's First & Last Name" required>
                <br>
                <label class="w3-inpt w3-text-black">Password</label>
                <input class="w3-input w3-border" type="password" name="password" required>
                <br>

                <button type="submit" name="submit" value="login">Admin Log In</button>
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
