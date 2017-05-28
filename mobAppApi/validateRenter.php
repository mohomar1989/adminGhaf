<?php


//servername = "108.167.157.196";
$servername = "localhost";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password, $dbName);
mysqli_set_charset($link, "utf8");
$renter_username = $_POST['username'];
$renter_password = $_POST['password'];

$query = "select * from Renter where renter_username = '$renter_username' and renter_password = '$renter_password'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0)
echo $row['renter_id'];
else
    echo mysqli_num_rows ($result);
