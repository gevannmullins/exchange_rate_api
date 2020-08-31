<?php
include_once "./dbinfo.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Exchange Rate API</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

</head>
<body>

<!-- the top header section -->
<section class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Exchange Rate API</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr width="100%" />
        </div>
    </div>
</section>

<!-- the exchange rate form -->
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">

            <form class="form-inline" method="post" action="./scripts/submit_exchange_rate.php">
                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="startDate" class="form-control" id="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" name="endDate" class="form-control" id="end_date">
                </div>
                <div class="form-group">
                    <label for="base_currency">Base Currecy:</label>
                    <select class="form-control" name="baseCurrency" id="base_currency">
                        <option>Select Base Currency</option>
                        <option value="CAD">CAD</option>
                        <option value="HKD">HKD</option>
                        <option value="ISK">ISK</option>
                        <option value="PHP">PHP</option>
                        <option value="DKK">DKK</option>
                        <option value="HUF">HUF</option>
                        <option value="CZK">CZK</option>
                        <option value="AUD">AUD</option>
                        <option value="RON">RON</option>
                        <option value="SEK">SEK</option>
                        <option value="IDR">IDR</option>
                        <option value="INR">INR</option>
                        <option value="BRL">BRL</option>
                        <option value="RUB">RUB</option>
                        <option value="HRK">HRK</option>
                        <option value="JPY">JPY</option>
                        <option value="THB">THB</option>
                        <option value="CHF">CHF</option>
                        <option value="SGD">SGD</option>
                        <option value="PLN">PLN</option>
                        <option value="BGN">BGN</option>
                        <option value="TRY">TRY</option>
                        <option value="CNY">CNY</option>
                        <option value="NOK">NOK</option>
                        <option value="NZD">NZD</option>
                        <option value="ZAR">ZAR</option>
                        <option value="USD">USD</option>
                        <option value="MXN">MXN</option>
                        <option value="ILS">ILS</option>
                        <option value="GBP">GBP</option>
                        <option value="KRW">KRW</option>
                        <option value="MYR">MYR</option>
                        <option value="EUR">EUR</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr width="100%" />
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="user_last_query_container">
            Loading ...
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr width="100%" />
        </div>
    </div>
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./assets/jquery/jquery-3.5.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function(){

        // load the latest user results
        $.ajax({
            url: "./scripts/get_latest_user_queries.php",
            success: function(data){
                $("#user_last_query_container").html(data);
            }
        });

    });
</script>


</body>
</html>