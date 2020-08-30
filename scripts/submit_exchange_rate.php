<?php

// include the currency exchange api class and the database class to the file
include_once "../classess/CurrencyExchangeAPI.php";
include_once "../classess/DbConnectQuery.php";


// DbConnectQuery
$dcq = new DbConnectQuery("localhost:3306", "admin", "admin", "exchange_rate_api", "3306");
// currencyExchangeAPI
$cea = new CurrencyExchangeAPI();


// get the form values
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$baseCurrency = $_POST["baseCurrency"];
$dateCreated = date("Y-m-d");


// save the user's form query to the db
$dbquery = "
INSERT INTO date_range_user_query (base_currency, start_date, end_date, date_created)
VALUES ('$baseCurrency', '$startDate', '$endDate', '$dateCreated')
";
$db_response = $dcq->mysqlQuery($dbquery);
// get the lastInsertId
$lastInsertId = $dcq->getLastId();
// display the database response to check for successfull insert or error
echo $db_response;


// get the query results from the 3rd party api
$result = $cea->getDateRangeCurrencyExchange($startDate, $endDate, $baseCurrency);
$string_result = json_encode($result);
// display results
echo $result;


$dbquery2 = "
INSERT INTO date_rage_user_results (user_query_id, base_currency, exchange_date, exchange_data)
VALUES ('$lastInsertId', '$baseCurrency', '$dateCreated', '$string_result')
";
$db_response = $dcq->mysqlQuery($dbquery2);
// display the database response to check for successfull insert or error
echo $db_response;



