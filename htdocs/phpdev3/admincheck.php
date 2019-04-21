<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/04/2019
 * Time: 18:50
 */

$username=$_POST['name'];
$password=$_POST['password'];

if ($username==("admin") & $password==("123")){

    session_register('username');

}