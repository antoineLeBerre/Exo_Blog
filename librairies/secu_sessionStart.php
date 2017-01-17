<?php 

function mySessionStart()
{
	session_start();
	$ip = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	$securite = $ip.'_'.$_SERVER["HTTP_USER_AGENT"];
	
	if (empty($_SESSION)) {
		$_SESSION["securiter"] = $securite;
		return true;
	}
	elseif ($_SESSION["securiter"] != $securite) {
		session_regenerate_id();
		$_SESSION = array();
		return false;
	}
	return true;
}