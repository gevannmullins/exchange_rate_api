<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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

            <form class="form-inline" action="./scripts/submit_exchange_rate.php">
                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control" id="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" class="form-control" id="end_date">
                </div>
                <div class="form-group">
                    <label for="base_currency">End Date:</label>
                    <select class="form-control" id="base_currency">
                        <option>Select Base Currency</option>
                        <option>USD</option>
                        <option>EUR</option>
                        <option>CAD</option>
                        <option>ZAR</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div>
    </div>
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/jquery/jquery-3.5.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>