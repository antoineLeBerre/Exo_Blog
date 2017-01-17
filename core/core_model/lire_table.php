<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function lire_table($table, $tab_option = array())
{
	global $pdo;
	try {
		$query = "SELECT * FROM ".$table;
		if (isset($tab_option["WHERECOL"])&& isset($tab_option["VALUE"])) {
			$query .= " WHERE ".$tab_option["WHERECOL"]."='".$tab_option["VALUE"]."'";
		}
		if (isset($tab_option["ORDER BY"])) {
			$query .= " ORDER BY ".$tab_option["ORDER BY"];
			if (isset($tab_option["ORDER"])) {
				$query .= " ".$tab_option["ORDER"];
			}
		}
		if (isset($tab_option["LIMIT"])) {
			$query .= " LIMIT ";
			if (isset($tab_option["OFFSET"])) {
				$query .= $tab_option["OFFSET"]. ",";
			}
			$query .= $tab_option["LIMIT"];
		}
		$cursor = $pdo->query($query);
		
		$cursor->execute();
		$results = $cursor->fetchAll();
		$cursor->closeCursor();

		return $results;

	} catch (Exception $e) {
		echo "Failed : ".$e->getMessage();
	}
}