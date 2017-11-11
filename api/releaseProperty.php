<?php

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$id = $_GET['id'];
$propId = $_GET['propId'];

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");

$query1 = "DELETE FROM `m3z8z9h6_ghafoman`.`Property_Rent` WHERE `Property_Rent`.`property_rent_id` = $id";
mysqli_query($link, $query1);











$query2 = "UPDATE `m3z8z9h6_ghafoman`.`Property` SET `property_isRented` = '0' WHERE `Property`.`property_id` = $propId";
mysqli_query($link, $query2);

if($link != null)
mysqli_close($link);