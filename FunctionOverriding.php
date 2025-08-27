<?php

require_once "data/Manajer.php";

$manajer = new Manajer();
$manajer->nama = "Andi";
$manajer->sayHello("Budi");

$vp = new VicePresiden();
$vp->nama = "Siti";
$vp->sayHello("Ali");