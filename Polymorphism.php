<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Eko");
var_dump($company);
$company->programmer = new BackendProgrammer("John");
var_dump($company);
$company->programmer = new FrontendProgrammer("Doe");
var_dump($company);

sayHello(new Programmer("Eko"));
sayHello(new BackendProgrammer("John"));
sayHello(new FrontendProgrammer("Doe"));