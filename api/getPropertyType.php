<?php
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
$id = $_GET['propertyTypeId'];
$query = "select propertyType_id,propertyType_name,ar_propertyType_name from PropertyType where propertyType_id=$id";
$result = mysqli_query($link, $query);

$rows=array();




while($row = mysqli_fetch_assoc($result)){
   
    $rows [] = $row;
}

echo json_encode($rows,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);