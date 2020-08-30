<?php

//include_once "./DbConnectQuery.php";


class CurrencyExchangeAPI
{
    // This is the base url for the currency exchange api
    public $baseUrl;
    private $base_url = "https://api.exchangeratesapi.io/";


    public function getDateRangeCurrencyExchange($startDate, $endDate, $baseCurrency="USD")
    {
        // DbConnectQuery
//        $dcq = new DbConnectQuery("localhost", "admin", "admin", "exchange_rate_api", "3306");

        return file_get_contents($this->base_url . "history?start_at=" . $startDate . "&end_at=" . $endDate . "&base=" . $baseCurrency);

    }


}