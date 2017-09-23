<?php

//$servername = "108.167.157.196";
$servername = "localhost";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password, $dbName);
mysqli_set_charset($link, "utf8");

$query = "select 
property_id as ID,
property_price as Price,
property_reference as Reference,
property_contract as ContractType,
propertyType_name as Type,
property_description as Description,
provider_name as Provider,
provider_logo as ProviderLogo,
property_beds as Beds,
property_baths as Baths,
country_name,
area_name,
city_name,
property_area as Area,
property_360view as View360,
property_geolocation as GeoLocation


From Property

left join Area  on area_id = property_areaLocation
left join Country  on country_id = property_country
left join City  on city_id = property_city
left join Provider  on provider_id = property_provider
Left join PropertyType  on propertyType_id = property_type

where property_contract = 'buy' ";
$result = mysqli_query($link, $query);
$rows = array();



while ($row = mysqli_fetch_assoc($result)) {

    $property_id = $row['ID'];
    $row['Location'] = $row['country_name'].",".$row['city_name'].",".$row['area_name'];
    $getImageQuery = "select image_url as imageUrl, image_property as imageProperty from Property_Image where image_property=$property_id";
    $imagesResult = mysqli_query($link, $getImageQuery);
    $imagesRows = array();
    while ($imagesRow = mysqli_fetch_assoc($imagesResult)) {
        $imagesRows [] = $imagesRow;
    }
    $row['Images'] = $imagesRows;
    $row['Thumbnail'] = $imagesRows[0]['imageUrl'];

    $getAmenityQuery = "select Amenity.amenity_name as AmenityName
        from Property_Amenity
       
            left join Amenity on amenity_id=Property_Amenity.amenity_name
            
            where amenity_property=$property_id";
    $amenitiesResult = mysqli_query($link, $getAmenityQuery);
    $amenitiesRows = array();
    while ($amenitiesRow = mysqli_fetch_assoc($amenitiesResult)) {
        $amenitiesRows [] = $amenitiesRow;
    }
    
    $row['Amenities'] = $amenitiesRows;

    $rows[] = $row;
}
$rowss = array('Properties'=>$rows);
echo json_encode($rowss, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);


