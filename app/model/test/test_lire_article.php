<?php
if (!defined("BASE_URL")) die("ressource interdite");
include("../articles/lire_article.php");
include("../pdo.inc.php");

$test = lire_article(1);
var_dump($test);