<?php

require_once "data/Manajer.php";

$manajer = new Manajer();
$manajer->nama = "Budi" .PHP_EOL;
$manajer->sayHello("Andi") . PHP_EOL;

$vicePresiden = new VicePresiden();
$vicePresiden->nama = "Siti" .PHP_EOL;
$vicePresiden->sayHello("Joko") . PHP_EOL;
?>