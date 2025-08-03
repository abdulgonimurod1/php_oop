<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APP_VERSION;

$conflictOne = new Conflict();
$conflictTwo = new Data\Two\Conflict();

helpMe();
echo APP_VERSION . PHP_EOL;