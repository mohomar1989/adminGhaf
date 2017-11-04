<?php

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$provider_name = $_POST['provider_name'];
$provider_email = $_POST['provider_email'];
$provider_number= $_POST['provider_number'];
$fileName = $_FILES['provider_logo']['name'];
$fileName = uniqid().$fileName;
$tempNAme = $_FILES['provider_logo']['tmp_name'];
move_uploaded_file($tempNAme, "../uploads/".$fileName);
$logo_url = "http://admin.ghafoman.net/uploads/".$fileName;
        





$link = mysqli_connect($servername, $username, $password, $dbName);
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET utf8");
$query = "INSERT"
        . " INTO Provider"
        . " (provider_id, "
        . "provider_name,"
        ."provider_logo,"
        . "provider_email,"
        . "provider_number)"
        . "VALUES (NULL, '$provider_name','$logo_url','$provider_email','$provider_number')";

mysqli_query($link, $query);
if ($link != null) {
    mysqli_close($link);
}