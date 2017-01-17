<?php
if (!defined("BASE_URL")) die("ressource interdite");
function paginat($nb_enregistrement, $nb_par_page, $module, $action,  $options = "")
{
	$nb_page = ceil($nb_enregistrement/$nb_par_page);
	echo "<ul class = 'paginat'>";
	for($i = 1; $i<=$nb_page; $i++) 
	{
		echo "<li><a href='?module=".$module."&action=".$action."&page=".$i.$options."'>Page ".$i."</a></li>";
	}
	echo "</ul>";
}