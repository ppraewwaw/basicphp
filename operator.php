<?php
$name   = "praew";
$age    = 23;
$weight = 48;

$normal_price = "299";
$sale_price   = 299.00;
$price        = 290;

echo "<pre>";
var_dump($name, $age, $weight);

var_dump($normal_price == $sale_price);
var_dump($normal_price === $sale_price);
var_dump($normal_price != $sale_price);
var_dump($sale_price != $price);
echo "</pre>";
