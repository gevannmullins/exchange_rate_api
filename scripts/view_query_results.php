<?php

// include the database information
include_once "../dbinfo.php";

$user_query_id = $_POST['query_id'];

// include the currency exchange api class and the database class to the file
include_once "../classess/DbConnectQuery.php";

// DbConnectQuery
$dcq = new DbConnectQuery($host, $username, $password, $database, "3306");

// db query to get the user's query results
$sql = "
SELECT * FROM date_rage_user_results WHERE user_query_id = '$user_query_id'
";
$query_result = $dcq->mysqlGet($sql);

// looping through the results
foreach($query_result as $qr) {

    $response = substr_replace($qr[4],"",0,1);
    $response = substr_replace($response, "" , -1,1);
    $response = json_decode($response,true);

    ?>

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
    foreach($response['rates'] as $resp){
        ?>
        <tr>
            <td><?php echo $resp['CAD']; ?></td>
            <td><?php echo $resp['HKD']; ?></td>
            <td><?php echo $resp['ISK']; ?></td>
            <td><?php echo $resp['PHP']; ?></td>
            <td><?php echo $resp['DKK']; ?></td>
            <td><?php echo $resp['HUF']; ?></td>
            <td><?php echo $resp['CZK']; ?></td>
            <td><?php echo $resp['AUD']; ?></td>
            <td><?php echo $resp['RON']; ?></td>
            <td><?php echo $resp['SEK']; ?></td>
            <td><?php echo $resp['IDR']; ?></td>
            <td><?php echo $resp['INR']; ?></td>
            <td><?php echo $resp['BRL']; ?></td>
            <td><?php echo $resp['RUB']; ?></td>
            <td><?php echo $resp['HRK']; ?></td>
            <td><?php echo $resp['JPY']; ?></td>
            <td><?php echo $resp['THB']; ?></td>
            <td><?php echo $resp['CHF']; ?></td>
            <td><?php echo $resp['SGD']; ?></td>
            <td><?php echo $resp['PLN']; ?></td>
            <td><?php echo $resp['BGN']; ?></td>
            <td><?php echo $resp['TRY']; ?></td>
            <td><?php echo $resp['CNY']; ?></td>
            <td><?php echo $resp['NOK']; ?></td>
            <td><?php echo $resp['NZD']; ?></td>
            <td><?php echo $resp['ZAR']; ?></td>
            <td><?php echo $resp['USD']; ?></td>
            <td><?php echo $resp['MXN']; ?></td>
            <td><?php echo $resp['ILS']; ?></td>
            <td><?php echo $resp['GBP']; ?></td>
            <td><?php echo $resp['KRW']; ?></td>
            <td><?php echo $resp['MYR']; ?></td>
            <td><?php echo $resp['EUR']; ?></td>
        </tr>

        <?php
//        print_r($resp);
    }
?>
</table>


<?php

}

?>

<!-- added the back button to return to the previous page information -->
<a class="btn btn-success display_user_queries" href="#">Back</a>
<script>
    $(document).ready(function(){

        $(".display_user_queries").on("click", function(){
            $.ajax({
                url: "./scripts/get_latest_user_queries.php",
                success: function(data){
                    $("#user_last_query_container").html(data);
                }
            });
        });

    });
</script>

