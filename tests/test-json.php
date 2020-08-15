<?php

require_once __DIR__ . '/../vendor/autoload.php';

use FEV\SerializeJson;
use FEV\Test\Person;

$test_obj = new Person("Ivan","Petrov","22","male");

$test_arr = array ( "animal" => "Cat", "color"=> "Black", "name"=> "Murka" );

echo "Original data:" . PHP_EOL;
var_dump($test_arr);
var_dump($test_obj);

$serialize = new SerializeJson();

$json_data = $serialize->SerializeToFormat($test_arr);
echo "JSON Object string: " . $json_data . PHP_EOL;

$restore_data = $serialize->UnserializeFromEncodedFormat($json_data);
echo "Restored data:" . PHP_EOL;
var_dump($restore_data);

$json_data = $serialize->SerializeToFormat($test_obj);
echo "JSON Object string: " . $json_data . PHP_EOL;

$restore_data = $serialize->UnserializeFromEncodedFormat($json_data);
echo "Restored data:" . PHP_EOL;
var_dump($restore_data);