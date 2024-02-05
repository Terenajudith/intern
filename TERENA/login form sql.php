<?php
$username = $_POST['name'];
$password = '1233';
$db_name = "login form";
$conn = mysqli_connect($username, $password, $db_name);
if (!$conn) {

    echo "Connection failed!";

}