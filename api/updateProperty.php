<?php

$propertyType = $_POST['propertyType'];
$contractType = $_POST['contractType'];
$propertyReference = $_POST['propertyReference'];
$propertyPrice = $_POST['propertyPrice'];
$propertyCountry = $_POST['propertyCountry'];
$propertyCity = $_POST['propertyCity'];
$propertyAreaLocation = $_POST['propertyAreaLocation'];
$propertyBeds = $_POST['propertyBeds'];
$propertyBaths = $_POST['propertyBaths'];
$propertyArea = $_POST['propertyArea'];
$propertyDescription = $_POST['propertyDescription'];
$ar_propertyDescription = $_POST['ar_propertyDescription'];
$propertyAmenities = isset($_POST['propertyAmenities']) ? $_POST['propertyAmenities'] : null;
$propertyLatitude = $_POST['propertyLatitude'];
$propertyLongitude = $_POST['propertyLongitude'];
$propertyProvider = $_POST['propertyProvider'];
$propertyOwner = isset($_POST['propertyOwner']) ? $_POST['propertyOwner'] : "NULL";
$property360Link = isset($_POST['property360']) ? $_POST['property360'] : "NULL";
$id = $_POST['propertyId'];


$propertygeo = $propertyLatitude.",".$propertyLongitude;
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbName);
mysqli_query($link, "SET NAMES 'utf8'");
mysqli_query($link, "SET CHARACTER SET utf8");
$query = "UPDATE Property SET"
        . " property_reference = '$propertyReference' ,"
        . " property_contract ='$contractType' ,"
        . " property_type = '$propertyType' ,"
        . " property_description = '$propertyDescription',"
        . " ar_property_description = '$ar_propertyDescription',"
        . " property_area = '$propertyArea',"
        . " property_beds = '$propertyBeds',"
        . " property_baths = '$propertyBaths',"
        . " property_country = '$propertyCountry',"
        . " property_city = '$propertyCity',"
        . " property_areaLocation = '$propertyAreaLocation',"
        . " property_geolocation = '$propertygeo',"
        . " property_owner = $propertyOwner,"
        . " property_provider = '$propertyProvider',"
        . " property_360view = '$property360Link',"
        . " property_price = '$propertyPrice'"
        . " WHERE property_id = $id";

mysqli_query($link, $query);
if ($link != null)
    mysqli_close($link);
header("Location: ../AvailableProperties.php");