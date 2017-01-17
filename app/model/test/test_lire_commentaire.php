<?php
if (!defined("BASE_URL")) die("ressource interdite");
include("../commentaire/lire_commentaire.php");
include("../pdo.inc.php");

$test = lire_commentaire(1);
var_dump($test);