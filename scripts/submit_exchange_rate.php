<?php

// add the currency exchange api class to the file
include_once "../classess/CurrencyExchangeAPI.php";
$cea = new CurrencyExchangeAPI();

// get the form values
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$baseCurrency = $_POST["baseCurrency"];

$result = $cea->getDateRangeCurrencyExchange($startDate, $endDate, $baseCurrency);

var_dump($result);



