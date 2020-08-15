<?php

require_once __DIR__ . '/../vendor/autoload.php';

use FEV\SerializeYaml;
use FEV\Test\Person;

$test_obj = new Person("Ivan","Petrov","22","male");

$test_arr = array ( "animal" => "Cat", "color"=> "Black", "name"=> "Murka" );

echo "Original data:" . PHP_EOL;
var_dump($test_arr);
var_dump($test_obj);

$serialize = new SerializeYaml();

$yaml_data = $serialize->SerializeToFormat($test_arr);

echo "YAML Array string: " . $yaml_data . PHP_EOL;
$restore_data = $serialize->UnserializeFromEncodedFormat($yaml_data);

echo "Restored Array data:" . PHP_EOL;
var_dump($restore_data);
echo "Original data equal Restored data: ";
var_dump($restore_data == $test_arr);

$yaml_data = $serialize->SerializeToFormat($test_obj);

echo "YAML Object string: " . $yaml_data . PHP_EOL;
$restore_data = $serialize->UnserializeFromEncodedFormat($yaml_data);

echo "Restored Object data:" . PHP_EOL;
var_dump($restore_data);
echo "Original data equal Restored data: ";
var_dump($restore_data == $test_obj);
