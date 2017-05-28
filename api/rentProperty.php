<?php

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");


$property_id = $_POST['property_id'];
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
//file name is contract


$fileName = $_FILES['contract']['name'];
$fileName = uniqid().$fileName;
$tempNAme = $_FILES['contract']['tmp_name'];
move_uploaded_file($tempNAme, "../uploads/".$fileName);
$logo_url = "http://admin.ghafoman.net/uploads/".$fileName;
        




$query = "select property_reference
From Property where property_contract= 'rent' ";