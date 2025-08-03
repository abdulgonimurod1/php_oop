<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{
    Conflict as ConflictOne,
    Sample,
    Dummy
};

$conflictOne = new ConflictOne();
$sample = new Sample();
$dummy = new Dummy();