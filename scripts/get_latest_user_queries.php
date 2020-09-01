<?php

include_once "../dbinfo.php";

// include the currency exchange api class and the database class to the file
include_once "../classess/DbConnectQuery.php";

// DbConnectQuery
$dcq = new DbConnectQuery($host, $username, $password, $database, "3306");

$sql = "
SELECT * FROM date_range_user_query ORDER BY date_created DESC
";
$latest_user_queries = $dcq->mysqlGet($sql);

?>

<table class="table table-striped table-bordered">
    <thead>
        <td>ID</td>
        <td>Base Currency</td>
        <td>Start Date</td>
        <td>End Date</td>
        <td>Date Searched</td>
        <td></td>
        <td></td>
    </thead>
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
                    <button class="btn btn-success view_results_btn" query_id="<?php echo $luq[0]; ?>">View Results</button>
                </td>
                <td>
                    <button class="btn btn-warning delete_results_btn" query_id="<?php echo $luq[0]; ?>">Delete Results</button>
                </td>
            </tr>

        <?php

    }


    ?>
</table>

<script>
    $(document).ready(function() {

        $(".view_results_btn").on('click', function(){
            $.ajax({
                type: "POST",
                url: "./scripts/view_query_results.php",
                data: {"query_id":$(this).attr("query_id")},
                success: function(data){
                    $("#user_last_query_container").html(data);
                }
            });
        });

        $(".delete_results_btn").on('click', function(){
            $.ajax({
                type: "POST",
                url: "./scripts/delete_query_results.php",
                data: {"query_id":$(this).attr("query_id")},
                success: function(data){
                    $("#user_last_query_container").html(data);
                }
            });
        });

    });
</script>

