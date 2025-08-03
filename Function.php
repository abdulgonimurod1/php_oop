<?php

require_once "data/Person.php";

$person = new Person("John Doe", "123 Main St");

$person->name = "John Doe";

$person->sayHello(null);

$goni = new Person("Goni", null);
$goni->sayHello("Goni");

$goni->info();
$person->info();