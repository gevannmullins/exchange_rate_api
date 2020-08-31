<?php

$query_id = $_POST["query_id"];

// include the currency exchange api class and the database class to the file
include_once "../classess/DbConnectQuery.php";

// DbConnectQuery
$dcq = new DbConnectQuery("localhost:3306", "admin", "admin", "exchange_rate_api", "3306");

// delete the user's search query
$sql = "
DELETE FROM date_range_user_query
WHERE id = '$query_id'
";
$latest_user_delete = $dcq->mysqlDelete($sql);
echo $latest_user_delete;


// delete the user's search results
$sql2 = "
DELETE FROM date_rage_user_results
WHERE user_query_id = '$query_id'
";
$latest_results_delete = $dcq->mysqlDelete($sql2);
echo $latest_results_delete;



