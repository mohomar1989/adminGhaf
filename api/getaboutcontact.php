<?php
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");

$query = "select * from CMS";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
echo json_encode($row,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

