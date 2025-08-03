<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as ConflictOne;
use Data\Two\Conflict as ConflictTwo;
use function Helper\helpMe as help;
use const Helper\APP_VERSION as app;

$conflictOne = new ConflictOne();
$conflictTwo = new ConflictTwo();

help();
echo app . PHP_EOL;