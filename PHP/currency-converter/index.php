<?php

$euro = 100;

$usd = 1.1521;
$gbp = 0.856718;
$jpy = 182.548;
$sek = 10.948;

echo "<h1>Currency Converter</h1>";

echo "Euros: " . $euro . " €<br><br>";

echo "US dollars: " . ($euro * $usd) . " USD<br>";
echo "British pounds: " . ($euro * $gbp) . " GBP<br>";
echo "Japanese yen: " . ($euro * $jpy) . " JPY<br>";
echo "Swedish kronor: " . ($euro * $sek) . " SEK<br>";


?>
