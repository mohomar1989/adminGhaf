<?php

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$owner_first_name = $_POST['owner_first_name'];
$owner_last_name = $_POST['owner_last_name'];
$owner_number = $_POST['owner_number'];
$owner_email = $_POST['owner_email'];
$owner_username = $_POST['owner_username'];
$owner_password = $_POST['owner_password'];




// Create connection


$link = mysqli_connect($servername, $username, $password, $dbName);
$query = "INSERT"
        . " INTO Owner"
        . " (owner_id, "
        . "owner_first_name,"
        . " owner_last_name,"
        . " owner_email, "
        . "owner_number, "
        . "owner_username,"
        . " owner_password) "
        . "VALUES (NULL, '$owner_first_name', '$owner_last_name', '$owner_email', '$owner_number', '$owner_username', '$owner_password')";

mysqli_query($link, $query);
if ($link != null) {
    mysqli_close($link);
}