<?php

include("../users/list_users.php");
include("../pdo.inc.php");

$test = list_users();
var_dump($test);