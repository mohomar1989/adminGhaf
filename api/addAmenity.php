<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$amenityEn = $_POST['amenityEn'];
$amenityAr = $_POST['amenityAr'];
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";


// Create connection
$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET utf8");
$query = "INSERT INTO Amenity (amenity_id, amenity_name, ar_amenity_name) VALUES (NULL, '$amenityEn', '$amenityAr')";
mysqli_query($link, $query);
if($link != null)
mysqli_close($link);
header("Location: ../Amenities.php");