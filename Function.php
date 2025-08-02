<?php

require_once "data/Person.php";

$person = new Person();

$person->name = "John Doe";

$person->sayHello(null);

$goni = new Person();
$goni->name = "Goni";
$goni->sayHello("Goni");

$goni->info();
$person->info();