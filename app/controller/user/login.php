<?php 

if (isset($_SESSION["user"])) {
	header ("location:?module=articles&action=admn&notification=nok");
}
//Test si le POST est vide et l'amene au formulaire login
if (!isset($_POST["post_login"]))
{
	include_once ("app/view/users/login.php");
}
//Si POST test si existant ou pas
else
{
	include_once ("app/model/users/login.php");
	$user = verif_login($_POST);
	var_dump($user);
	if (!$user) {
		header ("location:?module=user&action=login&notification=nok");
	}
	else
	{
		$_SESSION["user"] = $user;
		header ("location:?module=articles&action=admn&notification=ok");
	}
}