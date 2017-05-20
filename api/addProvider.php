<?php

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$provider_name = $_POST['provider_name'];
$fileName = $_FILES['provider_logo']['name'];
$tempNAme = $_FILES['provider_logo']['tmp_name'];
move_uploaded_file($tempNAme, "../uploads/".$fileName);
        



/*
 * 
 * 
 * 
 * 
 * 
 * 
 * Array ( [___] => Array ( [name] => 3.png [type] => image/png [tmp_name] => /Applications/XAMPP/xamppfiles/temp/phpfX9qsR [error] => 0 [size] => 7511 ) )
// Create connection


$link = mysqli_connect($servername, $username, $password, $dbName);
$query = "INSERT"
        . " INTO Provider"
        . " (provider_id, "
        . "provider_name,"
        . "VALUES (NULL, '$provider_name')";

mysqli_query($link, $query);
if ($link != null) {
    mysqli_close($link);
}*/