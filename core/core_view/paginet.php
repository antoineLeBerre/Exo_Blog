<?php

function paginat($nb_enregistrement, $nb_par_page, $module, $action)
{
	$nb_page = ceil($nb_enregistrement/$nb_par_page);
	echo "<ul class = 'paginat'>";
	for($i = 1; $i<=$nb_page; $i++) 
	{
		echo "<li><a href='?module=".$module."&action=".$action."&page=".$i."'>Page ".$i."</a></li>";
	}
	echo "</ul>";
}