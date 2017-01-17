<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function location($module, $action, $get='')
{
	$url = "location:?module=".$module."&action=".$action;
	if ($get != '') {
		$url .= "&".$get;
	}
	header($url);
	exit;
}