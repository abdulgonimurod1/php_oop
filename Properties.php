<?php

require_once "data/Person.php";

$person = new Person("John Doe", "123 Main St");
$person->sayHello(null);
$person->info();

echo $person->name . PHP_EOL;
echo $person->address . PHP_EOL;
echo $person->country . PHP_EOL;