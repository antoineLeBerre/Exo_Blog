<?php 

function location($module, $action, $get='')
{
	$url = "location:?module=".$module."&action=".$action;
	if ($get != '') {
		$url .= ""&".$get.";
	}
	header($url);
	exit;
}