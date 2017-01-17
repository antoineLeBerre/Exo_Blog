<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function insert_row($table, $tab_valeur)
{
	global $pdo;

	try {
		$i = 0;
		$query = "INSERT INTO ".$table."(";
		while ($i < sizeof($tab_valeur)) {
			$query .= key($tab_valeur);
			if ($i < sizeof($tab_valeur) - 1) {
				$query .= ",";
			}
			next($tab_valeur);
			$i++;
		}
		$query .= ") values (";
		$j = 0;
		reset($tab_valeur);
		while ($j < $i) {
			$query .= $tab_valeur[key($tab_valeur)];
			if ($j < $i - 1) {
				$query .= ",";
			}
			next($tab_valeur);
			$j++;
		}
		$query .= ")";
		var_dump($query);
	$cursor = $pdo->exec($query);

	return true;
	} catch (Exception $e) {
		return false;
	}
	
}