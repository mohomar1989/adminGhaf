<?php

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$renter_first_name = $_POST['renter_first_name'];
$renter_last_name = $_POST['renter_last_name'];
$renter_number = $_POST['renter_number'];
$renter_email = $_POST['renter_email'];
$renter_username = $_POST['renter_username'];
$renter_password = $_POST['renter_password'];




// Create connection


$link = mysqli_connect($servername, $username, $password, $dbName);
$query = "INSERT"
        . " INTO Renter"
        . " (renter_id, "
        . "renter_first_name,"
        . " renter_last_name,"
        . " renter_email, "
        . "renter_number, "
        . "renter_username,"
        . " renter_password) "
        . "VALUES (NULL, '$renter_first_name', '$renter_last_name', '$renter_email', '$renter_number', '$renter_username', '$renter_password')";

mysqli_query($link, $query);
if ($link != null) {
    mysqli_close($link);
}