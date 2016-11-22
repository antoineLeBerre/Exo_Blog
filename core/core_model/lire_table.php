<?php 

function lire_table($table, $tab_option = array())
{
	global $pdo;
	try {
		$query = "SELECT * FROM ".$table;
		if (isset($tab_option["ORDER BY"])) {
			if (isset($tab_option["ORDER"])) {
				$query .= " ORDER BY ".$tab_option["ORDER BY"]." ".$tab_option["ORDER"];
			}
			else
			{
				$query .= " ORDER BY".$tab_option["ORDER BY"];
			}
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