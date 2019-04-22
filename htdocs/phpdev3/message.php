<?php
include "dbConnect007i.php";


// Select Query

$query = 'SELECT * FROM message ORDER BY create_date DESC '; //Tried message trying coursework
$message = mysqli_query($db, $query);

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

<main>
    <div class="welcome">
        <?php if(isset($error)): ?>
        <div class="alert"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if(isset($success)): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>


    </div>
    <div class="signupform">
        <div class="w3-card w3-margin w3-padding">
            <h2 align="center">Group Comment</h2>

           <form action="messageprocess.php" method="post" class="w3-container">


                <label class="w3-inpt w3-text-black">User Name</label>
                <input class="w3-input w3-border" type="text" name="username" placeholder="First & Last Name" required>
                <br>
                <label class="w3-inpt w3-text-black">Comment</label>
                <textarea rows="6" cols="50" class="w3-input w3-border" type="text" name="message" required></textarea>
                <br>

                <button type="submit" name="submit" value="comment">Comment</button>

            </form>
            <hr>
            <ul>
                <?php while ($row = mysqli_fetch_assoc($message)): ?> <!-- tRY coursework -->
                <li><?php echo $row['username']; ?> | <?php echo $row ['message']; ?>[<?php echo $row['create_date']; ?>]</li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</main><br><br>
<!-- End of main -->
<!-- Footer -->

</body>
</html>
