<html>
<h1>Groups Members Comment</h1>

</html>

<?php
include ("dbConnect007i.php");

$find_comments = mysqli_query("SELECT * FROM comments");
while($row = mysql_fetch_assoc($find_comments))
{
    $comment_name = $row['name'];
    $comment = $row['comment']; //actual comment

    echo "$comment_name - $comment<p>";
}

if(isset($_GET['error']))
{
    echo "<p>200 Character Limit";
}

?>

<html>
<form action="postacomment.php" method="post">
    <input type="text" name="name" placeholder="Your Name"><br>
    <textarea name="comment" cols="70" rows="5" placeholder="Enter a Comment"></textarea>
    <input type="submit" value="Comment">

</form>
</html>
