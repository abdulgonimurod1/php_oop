<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "John Doe";
$person->address = "123 Main St";

var_dump($person);

echo $person->name . PHP_EOL;
echo $person->address . PHP_EOL;
echo $person->country . PHP_EOL;