<?php
// Boilerplate code
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/04/2019
 * Time: 06:45
 */

$servername = "localhost";
$dbname = "coursework";
$username = "root";
$password = "1212903";

// Check connection
$db = new mysqli('localhost', 'root', '1212903', 'coursework');

//Check connection
if (!$db) {
    die("Connection failed: " . $db->connect_error);
}

//echo "Connected successfully";

?>