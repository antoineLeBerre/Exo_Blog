<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function count_table($table, $tab_option=array())
{
	global $pdo;
	try {

		$sql = "SELECT COUNT(*) AS nombre FROM ".$table;
		if (isset($tab_option["WHERECOL"]) && isset($tab_option["VALUE"])) {
			$sql .= " WHERE ".$tab_option["WHERECOL"]."='".$tab_option["VALUE"]."'";
		}

		$cursor = $pdo->query($sql);
		$cursor->execute();
		$result = $cursor->fetch();
		$cursor->closeCursor();

		return $result[0];

	} catch (Exception $e) {
		echo "Failed : ".$e->getMessage();
	}
}