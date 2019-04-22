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
        header{
            width: 1200px;
            height: 160px;
            margin-left: auto;
            margin-right: auto;
            background-color: oldlace;
        }
        /* #cammpusmoodle1{
             float: left;
             position: absolute;
             margin-left: 600px;
             margin-top: 0;
         }*/
        #campusmoodle h1{
            float: right;
            margin-right: 750px;
            font-family: "Arial Black";
            color: #7d007d;
            font-size:
        }
        #rgu{
            float: right;
            margin-right: 700px;
            margin-top: -40px;
            font-family: Bahnschrift;
            color: #bb60d5;
        }

    </style>
</head>
<body>
<header>
    <div id="campusmoodle">
        <img src="images/New_RGU_logo.jpg" width="100px" height="100px">
        <h1>CAMPUSMOODLE</h1>
        <h2 id="rgu">ROBERT GORDON UNIVERSITY</h2>
    </div>

    <div>
        <nav class="menu">
            <ul>
                <li id="a">
                    <a href="#a">MY MOODLE</a>
                    <ul>
                        <li>MyMoodle</strong><a href="#"></a></li>
                        <li><strong>My Profile</strong><a href="#"></a></li>
                        <li><strong>MyPortfolio</strong><a href="#"></a></li>
                        <li><strong>RGyoU Portal</strong><a href="#"></a></li>

                    </ul>
                </li>
                <li id="b">
                    <a href="Home.php">Home</a>
                </li>

                </li>
                <li id="c">
                    <a href="adminHomePage.php">Admin Home</a>
                </li>
                <li id="d">
                    <a href="#d">Project Groups</a>
                    <ul>
                        <li><a href="GroupA.php">Group A</a></li>

                        <li><a href="GroupB.php">Group B</a></li>

                        <li><a href="GroupC.php">Group c</a></li>

                        <li><a href="GroupD.php">Group D</a></li>

                        <li><a href="GroupE.php">Group E</a></li>

                    </ul>
                </li>
                <li id="e">
                    <a href="#e">Assign Groups</a>
                    <ul>
                        <li><a href="assigngroupA.php">Assign Group A</a></li>

                        <li><a href="assigngroupB.php">Assign Group B</a></li>

                        <li><a href="assigngroupC.php">Assign Group c</a></li>

                        <li><a href="assigngroupD.php">Assign Group D</a></li>

                        <li><a href="assigngroupE.php">Assign Group E</a></li>

                    </ul>


                </li>

            </ul>
        </nav>
    </div>
    <div>
        <form id="logout" method="post" action="logout.php">
            <button type="submit" name="submit" value="comment">Log Out</button>
        </form>
    </div>
</header>
</body>
</html>