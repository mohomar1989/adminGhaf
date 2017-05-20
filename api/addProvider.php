<?php

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$provider_name = $_POST['provider_name'];
$fileName = $_FILES['provider_logo']['name'];
$fileName = uniqid().$fileName;
$tempNAme = $_FILES['provider_logo']['tmp_name'];
move_uploaded_file($tempNAme, "../uploads/".$fileName);
$logo_url = "http://admin.ghafoman.net/uploads/"+$fileName;
        





$link = mysqli_connect($servername, $username, $password, $dbName);
$query = "INSERT"
        . " INTO Provider"
        . " (provider_id, "
        . "provider_name,"
        ."provider_logo)"
        . "VALUES (NULL, '$provider_name','$logo_url')";

mysqli_query($link, $query);
if ($link != null) {
    mysqli_close($link);
}