<?php



$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$id = $_GET['id'];

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");




$query = "select property_rent_current_payments from Property_Rent where property_rent_id=$id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$currentPayment = intval($row['property_rent_current_payments']);
$currentPayment = ++$currentPayment."";

$query = "UPDATE `m3z8z9h6_ghafoman`.`Property_Rent` SET `property_rent_current_payments` = '$currentPayment' WHERE `Property_Rent`.`property_rent_id` = $id";

mysqli_query($link, $query);
if($link != null)
mysqli_close($link);
