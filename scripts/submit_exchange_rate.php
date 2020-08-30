<?php

// add the currency exchange api class to the file
include_once "../classess/CurrencyExchangeAPI.php";
include_once "../classess/DbConnectQuery.php";

// DbConnectQuery
$dcq = new DbConnectQuery("localhost", "admin", "admin", "exchange_rate_api", "3306");

// currencyExchangeAPI
$cea = new CurrencyExchangeAPI();

// get the form values
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$baseCurrency = $_POST["baseCurrency"];

$result = $cea->getDateRangeCurrencyExchange($startDate, $endDate, $baseCurrency);

//var_dump($result);

//echo json_decode($result)[0];
echo $result;


