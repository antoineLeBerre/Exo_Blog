<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function delete_row($table, $tab_option = array())
{
	global $pdo;
	try {
		$query = "DELETE FROM ".$table;
		if (isset($tab_option['COL'])) {
			$query .= ' WHERE '.$tab_option['COL'].'='.$tab_option['VALUE'];
		}

	$cursor = $pdo->exec($query);

	return true;
	} catch (Exception $e) {
		return false;
	}
	
}