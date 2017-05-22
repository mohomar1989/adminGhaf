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

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";




// Create connection
$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET utf8");
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



else
{
$property_id = mysqli_insert_id($link);


if (isset($_FILES['propertyImages'])) {
    
    $fileCount = count($_FILES['propertyImages']['name']);
   for ($i = 0; $i < $fileCount; $i++) {
        
         $fileName = uniqid() . $_FILES['propertyImages']['name'][$i];
         $tempName = $_FILES['propertyImages']['tmp_name'][$i];
        
        move_uploaded_file($tempName, "../uploads/" . $fileName);
        $logo_url = "http://admin.ghafoman.net/uploads/" . $fileName;
        $q1 = "Insert into Property_Image ("
                . "image_id,"
                . "image_url,"
                . "image_property"
                . ")"
                . "values"
                . "("
                . "NULL,"
                . "'$logo_url',"
                . "$property_id"
                . ")";
        mysqli_query($link, $q1);
         
         
    }
}

if($propertyAmenities!=null){
    foreach($propertyAmenities as $value){
        $q = "Insert into Property_Amenity (amenity_property_id,amenity_name,amenity_property) values"
                . "("
                . "NULL,"
                . "$value,"
                . "$property_id)";
        mysqli_query($link, $q);
    }
    
    
}
}
if($link != null)
mysqli_close($link);




