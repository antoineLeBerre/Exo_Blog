<?php 

if (isset($_POST["id"])) 
{
	include_once ("app/model/commentaire/ajouter_commentaire.php");
	$resultat = ajouter_commentaire($_POST);
	if ($resultat) {
		header ("location:?module=articles&action=detail&id=".$_POST['id']."&notif=ok");
	}
	else
	{
		header ("location:?module=articles&action=detail&id=".$_POST['id']."&notif=nok");
	}
}
else
{
	die("POST absent");
}