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
$propertyAmenities = isset($_POST['propertyAmenities'])?$_POST['propertyAmenities']:null;
$propertyLatitude = $_POST['propertyLatitude'];
$propertyLongitude = $_POST['propertyLongitude'];
$propertyProvider = $_POST['propertyProvider'];
$propertyOwner = isset($_POST['propertyOwner'])?$_POST['propertyOwner']:"NULL";
$property360Link = $_POST['property360'];

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";



// Create connection
$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf-8");
$query = "INSERT INTO"
        . " Property "
        . "("
        . "property_id,"
        . "property_price,"
        . "property_beds,"
        . "property_baths,"
        . "property_description,"
        . "property_area,"
        . "property_reference,"
        . "property_type,"
        . "property_contract,"
        . "property_owner,"
        . "property_provider,"
        . "ar_property_description,"
        . "property_geolocation,"
        . "property_city,"
        . "property_areaLocation,"
        . "property_country,"
        . "property_360view"   
        . ") "
        . " VALUES "
        . "("
        . "NULL,"
        . "'$propertyPrice',"
        . "'$propertyBeds',"
        . "'$propertyBaths',"
        . "'$propertyDescription',"
        . "'$propertyArea',"
        . "'$propertyReference',"
        . "$propertyType,"
        . "'$contractType',"
        . "$propertyOwner,"
        . "$propertyProvider,"
        . "'$ar_propertyDescription',"
        . "'$propertyLatitude,$propertyLongitude',"
        . "$propertyCity,"
        . "$propertyAreaLocation,"
        . "$propertyCountry,"
        . "'$property360Link'"
        . ")";

if(!mysqli_query($link, $query))
{
    print_r(mysqli_error_list($link));
    echo "<br>.$query";
}
if($link != null)
mysqli_close($link);



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

