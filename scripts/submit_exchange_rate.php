<?php

include_once "../dbinfo.php";

// include the currency exchange api class and the database class to the file
include_once "../classess/CurrencyExchangeAPI.php";
include_once "../classess/DbConnectQuery.php";


// DbConnectQuery
//$dcq = new DbConnectQuery("localhost:3306", "admin", "admin", "exchange_rate_api", "3306");
$dcq = new DbConnectQuery($host, $username, $password, $database, "3306");

// currencyExchangeAPI
$cea = new CurrencyExchangeAPI();


// get the form values
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$baseCurrency = $_POST["baseCurrency"];
$dateCreated = date("Y-m-d H:i:s");


// get the query results from the 3rd party api
$result = $cea->getDateRangeCurrencyExchange($startDate, $endDate, $baseCurrency);
$string_result = json_encode($result);
$object_result = json_decode($result);
// display results
//echo $result;
?>


<!-- Bootstrap -->
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">


<table class="table table-striped table-bordered table-condensed">
    <thead>
    <td>CAD</td>
    <td>HKD</td>
    <td>ISK</td>
    <td>PHP</td>
    <td>DKK</td>
    <td>HUF</td>
    <td>CZK</td>
    <td>AUD</td>
    <td>RON</td>
    <td>SEK</td>
    <td>IDR</td>
    <td>INR</td>
    <td>BRL</td>
    <td>RUB</td>
    <td>HRK</td>
    <td>JPY</td>
    <td>THB</td>
    <td>CHF</td>
    <td>SGD</td>
    <td>PLN</td>
    <td>BGN</td>
    <td>TRY</td>
    <td>CNY</td>
    <td>NOK</td>
    <td>NZD</td>
    <td>ZAR</td>
    <td>USD</td>
    <td>MXN</td>
    <td>ILS</td>
    <td>GBP</td>
    <td>KRW</td>
    <td>MYR</td>
    <td>EUR</td>
    </thead>
<?php
foreach($object_result->rates as $res){
?>
<tr>
    <td><?php echo $res->CAD; ?></td>
    <td><?php echo $res->HKD; ?></td>
    <td><?php echo $res->ISK; ?></td>
    <td><?php echo $res->PHP; ?></td>
    <td><?php echo $res->DKK; ?></td>
    <td><?php echo $res->HUF; ?></td>
    <td><?php echo $res->CZK; ?></td>
    <td><?php echo $res->AUD; ?></td>
    <td><?php echo $res->RON; ?></td>
    <td><?php echo $res->SEK; ?></td>
    <td><?php echo $res->IDR; ?></td>
    <td><?php echo $res->INR; ?></td>
    <td><?php echo $res->BRL; ?></td>
    <td><?php echo $res->RUB; ?></td>
    <td><?php echo $res->HRK; ?></td>
    <td><?php echo $res->JPY; ?></td>
    <td><?php echo $res->THB; ?></td>
    <td><?php echo $res->CHF; ?></td>
    <td><?php echo $res->SGD; ?></td>
    <td><?php echo $res->PLN; ?></td>
    <td><?php echo $res->BGN; ?></td>
    <td><?php echo $res->TRY; ?></td>
    <td><?php echo $res->CNY; ?></td>
    <td><?php echo $res->NOK; ?></td>
    <td><?php echo $res->NZD; ?></td>
    <td><?php echo $res->ZAR; ?></td>
    <td><?php echo $res->USD; ?></td>
    <td><?php echo $res->MXN; ?></td>
    <td><?php echo $res->ILS; ?></td>
    <td><?php echo $res->GBP; ?></td>
    <td><?php echo $res->KRW; ?></td>
    <td><?php echo $res->MYR; ?></td>
    <td><?php echo $res->EUR; ?></td>
</tr>
<?php
}
?>
</table>
<?php

// save the user's form query to the db
$dbquery = "
INSERT INTO date_range_user_query (base_currency, start_date, end_date, date_created)
VALUES ('$baseCurrency', '$startDate', '$endDate', '$dateCreated')
";
$db_response = $dcq->mysqlInsert($dbquery);
if ($db_response) {

    echo "<br /><p>Successfully saved user's query</p><br />";

    // get the lastInsertId
    $lastInsertId = $dcq->getLastId();
    $dbquery2 = "
    INSERT INTO date_rage_user_results (user_query_id, base_currency, exchange_date, exchange_data)
    VALUES ('$lastInsertId', '$baseCurrency', '$dateCreated', '$string_result')
    ";
    $db_response2 = $dcq->mysqlInsert($dbquery2);
    if ($db_response2) {
        echo "<br /><p>Successfully saved user's query results</p><br />";
    }


}
?>

<a href="../index.php" class="btn btn-success">Back</a>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../assets/jquery/jquery-3.5.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>








