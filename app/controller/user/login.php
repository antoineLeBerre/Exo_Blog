<?php 

/*if (isset($_SESSION['user'])) {
	if ($_SESSION["level"] == 0)
	{
		header ("location:?module=articles&action=index&notification=ok");
	}
	else
	{
		header ("location:?module=articles&action=admin&notification=ok");

	}
}*/

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
	if (!$user) {
		header ("location:?module=user&action=login&notification=nok");
	}
	else
	{
		$_SESSION["user"] = $user;
		if ($user["ID"] == 1) 
		{
			$_SESSION["level"] = 1;
			header ("location:?module=articles&action=admin&notification=ok");
		}
		else
		{
			$_SESSION["level"] = 0;
			header ("location:?module=articles&action=index&notification=ok");
		}
		
	}
}