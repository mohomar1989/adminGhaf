<?php
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");

$query = "select property_reference , property_id
From Property where property_contract= 'rent' and property_isRented = '1' ";
$result = mysqli_query($link, $query);
$rows=array();


while($row = mysqli_fetch_assoc($result)){
   $rows[] = $row;
}
   



echo json_encode($rows,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
