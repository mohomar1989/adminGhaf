<?php

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");


$proeprty_reference = $_POST['property_reference'];
$renter_id = $_POST['renter_id'];
$building_number = $_POST['building_number'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$year_cost = $_POST['year_cost'];
$contract_type = $_POST['contract_type'];
$month_rent = $_POST['month_rent'];
$security_deposit = $_POST['security_deposit'];
$water_reader = $_POST['water_reader'];
$elec_reader = $_POST['elec_reader'];
$payments_paid = $_POST['payments_paid'];
$contract_number = $_POST['contract_number'];
//file name is contract


$fileName = $_FILES['contract']['name'];
$fileName = uniqid().$fileName;
$tempNAme = $_FILES['contract']['tmp_name'];
move_uploaded_file($tempNAme, "../uploads/".$fileName);
$contractURL = "http://admin.ghafoman.net/uploads/".$fileName;
        




$query = "INSERT INTO `m3z8z9h6_ghafoman`.`Property_Rent` "
        . "(`property_rent_id`, "
        . "`property_rent_property_id`,"
        . " `property_rent_renter_id`,"
        . " `property_rent_start_date`,"
        . " `property_rent_end_date`,"
        . " `property_rent_yearly_cost`,"
        . " `property_rent_contract_type`,"
        . " `property_rent_month_rate`,"
        . " `property_rent_deposit`,"
        . " `property_rent_water`,"
        . " `property_rent_electricity`,"
        . " `property_rent_total_payment`,"
        . " `property_rent_current_payments`,"
        . " `property_rent_contract_copy`,"
        . " `property_rent_contract_number`,"
        . " `property_rent_building_number`)"
        . " VALUES "
        . "(NULL,"
        . " '$proeprty_reference',"
        . " '$renter_id',"
        . " '$start_date',"
        . " '$end_date',"
        . " '$year_cost',"
        . " '$contract_type',"
        . " '$month_rent',"
        . " '$security_deposit',"
        . " '$water_reader',"
        . " '$elec_reader',"
        . " '12',"
        . " '$payments_paid',"
        . " '$contractURL',"
        . " '$contract_number',"
        . " '$building_number')";

echo $query;

mysqli_query($link, $query);

$query1 = "UPDATE `m3z8z9h6_ghafoman`.`Property` SET `property_isRented` = '1' WHERE `Property`.`property_id` = $proeprty_reference";

mysqli_query($link, $query1);
if($link != null)
mysqli_close($link);

