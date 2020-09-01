<?php

include_once "../dbinfo.php";

$query_id = $_POST["query_id"];

// include the currency exchange api class and the database class to the file
include_once "../classess/DbConnectQuery.php";

// DbConnectQuery
$dcq = new DbConnectQuery($host, $username, $password, $database, "3306");


// delete the user's search query
$sql = "
DELETE FROM date_range_user_query
WHERE id = '$query_id'
";
$latest_user_delete = $dcq->mysqlDelete($sql);
if ($latest_user_delete) {
    echo "User Query Deleted Successfully";
    echo "<br />";
}


// delete the user's search results
$sql2 = "
DELETE FROM date_rage_user_results
WHERE user_query_id = '$query_id'
";
$latest_results_delete = $dcq->mysqlDelete($sql2);
if ($latest_results_delete) {
    echo "User Query Deleted Successfully";
    echo "<br />";
}

?>
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







