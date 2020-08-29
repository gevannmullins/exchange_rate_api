<?php


class CurrencyExchangeAPI
{
    // This is the base url for the currency exchange api
    public $baseUrl;
    private $base_url = "https://api.exchangeratesapi.io/";


    public function getDateRangeCurrencyExchange($startDate, $endDate, $baseCurrency="USD")
    {
//        $startDate = date("Y-m-d", $startDate);
//        $endDate = date("Y-m-d", $endDate);
        return file_get_contents($this->base_url . "history?start_at=" . $startDate . "&end_at=" . $endDate . "&base=" . $baseCurrency);
//        return file_get_contents($this->base_url . "history?start_at=" . $startDate . "&end_at=" . $endDate);

    }


}