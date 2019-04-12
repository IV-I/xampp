<?php

    $msg = "";
    // if upload button is pressed
if (isset($_POST['upload'])) {
    //the path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    // connect to the database
    include ("dbConnect007i.php"); //Ifeoma - remember to include images to database

    //Get all the submitted data from the form
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$images', ';$text')";
    mysqli_query($db, $sql); // stores the submitted data into the database table: images

    //Now let's move the uploaded image into the folder: images
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "There was a problem uploading images";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comment & File Upload</title>
</head>
<body>
<div id="content">

    <?php
        $db = mysqli_connect("localhost", "root", "1212903", "");
        $sql = "SELECT * FROM images";
        $result = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
                echo "<img src='images/".$row['image']."'>";
                    echo "<p>".$row['text']."</p>";
                        echo "</div>";
        }

    ?>
    <form method="post" action="Home.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
        <input type="file" name="image">
        </div>
        <div>
        <textarea name="text" cols="70" rows="6" placeholder="What is your view about this file/image..."></textarea>
        </div>
        <div>
            <input type="submit" name="upload" value="Upload File/Image">
        </div>
    </form>
</div>
</body>
</html>