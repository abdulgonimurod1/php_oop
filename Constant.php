<?php
require_once "data/Person.php";

define('CONSTANT', 'This is a constant value');
const APP_VERSION = '1.0.0';

echo CONSTANT . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL;