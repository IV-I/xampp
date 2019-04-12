<?php

error_reporting(0);

if (isset($_POST['submit']))
{
    $name1 = $_POST['name1'];
    $name1 = $_POST['name2'];
    $name1 = $_POST['name3'];
    $name1 = $_POST['name4'];
    $name1 = $_POST['name5'];

    $names = array("1" => "$name1",
                    "2" => "$name2",
                    "3" => "$name3",
                    "4" => "$name4",
                    "5" => "$name5",);

    $random = rand(1,5);
}

    ?>

<html>

<form action="Home.php" method="post">
    Enter Name: <input type="text" name="name1" value="<?php echo $name1 ?>"><br>
    Enter Name: <input type="text" name="name2" value="<?php echo $name2 ?>"><br>
    Enter Name: <input type="text" name="name3" value="<?php echo $name3 ?>"><br>
    Enter Name: <input type="text" name="name4" value="<?php echo $name4 ?>"><br>
    Enter Name: <input type="text" name="name5" value="<?php echo $name5 ?>"><p>

    <input type="submit" name="submit" value="Pick One!">


</form>
<?php
    echo $names["$random"];
?>
</html>

