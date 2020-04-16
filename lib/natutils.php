<?php
/* Copyright (C) 2020 Andor Molnár <andor@apache.org> */

require_once __DIR__ . '/../vendor/autoload.php';

$userData = array(
    "login" => "username",
    "password" => "password",
    "taxNumber" => "12345678",
    "signKey" => "sign-key",
    "exchangeKey" => "exchange-key",
);

$softwareData = array(
    "softwareId" => "123456789123456789",
    "softwareName" => "string",
    "softwareOperation" => "ONLINE_SERVICE",
    "softwareMainVersion" => "string",
    "softwareDevName" => "string",
    "softwareDevContact" => "string",
    "softwareDevCountryCode" => "HU",
    "softwareDevTaxNumber" => "string",
);

$apiUrl = "https://api-test.onlineszamla.nav.gov.hu/invoiceService/v2";

$config = new NavOnlineInvoice\Config($apiUrl, $userData, $softwareData);
$config->setCurlTimeout(70); // 70 másodperces cURL timeout (NAV szerver hívásnál), opcionális

$reporter = new NavOnlineInvoice\Reporter($config);

try {
    $result = $reporter->queryTaxpayer("12345678");

    if ($result) {
        print "Az adószám valid.\n";
        print "Az adószámhoz tartozó név: $result->taxpayerName\n";

        print "További lehetséges információk az adózóról:\n";
        print_r($result->taxpayerShortName);
        print_r($result->taxNumberDetail);
        print_r($result->vatGroupMembership);
        print_r($result->taxpayerAddressList);
    } else {
        print "Az adószám nem valid.";
    }

} catch(Exception $ex) {
    print get_class($ex) . ": " . $ex->getMessage() . "\n";
}
