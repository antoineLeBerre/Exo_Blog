<?php
define('BASE_URL', true);

include_once ("app/model/pdo.inc.php");
include_once ("core/core_view/paginet.php");
include_once ("core/core_view/helper.php");
include_once ("core/core_controlleur/protection.php");
include_once ("core/core_controlleur/location.php");
include_once ("core/core_model/count.php");
include_once ("core/core_model/lire_table.php");
include_once ("core/core_model/delete_rows.php");
include_once ("core/core_model/insert_row.php");
include_once ("app/config/config.inc.php");
include_once ("librairies/secu_sessionStart.php");

if (!mySessionStart()) {
	die("FAIL");
}

if (!isset($_GET["module"])) 
{
	$module = DEFAULT_MODULE;
}
else
{
	$module = $_GET["module"];
}
if (!isset($_GET["action"])) 
{
	$action = DEFAULT_ACTION;
}
else
{
	$action = $_GET["action"];
}
$url = 'app/controller/'.$module.'/'.$action.'.php';
if (file_exists($url)) {
	include_once ($url);
}
else
{
	die("Erreur 404");
}