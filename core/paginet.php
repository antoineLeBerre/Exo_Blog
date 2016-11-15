<?php

function paginat($nb_page, $module, $action)
{
	echo "<ul class = 'paginat'>";
	for($i = 1; $i<=$nb_page; $i++) 
	{
		echo "<li><a href='?module=".$module."&action=".$action."&page=".$i."'>Page ".$i."</a></li>";
	}
	echo "</ul>";
}