<?php

// include the currency exchange api class and the database class to the file
include_once "../classess/DbConnectQuery.php";

// DbConnectQuery
$dcq = new DbConnectQuery("localhost:3306", "admin", "admin", "exchange_rate_api", "3306");

$sql = "
SELECT * FROM date_range_user_query ORDER BY date_created DESC
";
$latest_user_queries = $dcq->mysqlGet($sql);

?>

<table class="table table-striped">
    <?php

    foreach($latest_user_queries as $luq){

        ?>
            <tr>
                <td><?php echo $luq[0]; ?></td>
                <td><?php echo $luq[1]; ?></td>
                <td><?php echo $luq[2]; ?></td>
                <td><?php echo $luq[3]; ?></td>
                <td><?php echo $luq[4]; ?></td>
                <td>
                    <button class="btn-success">View Results</button>
                </td>
                <td>
                    <button class="btn-warning">Delete Results</button>
                </td>
            </tr>

        <?php

    }


    ?>
</table>

