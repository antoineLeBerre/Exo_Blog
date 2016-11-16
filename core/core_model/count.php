<?php 

function count_table($table)
{
	global $pdo;
	try {

		$cursor = $pdo->query("SELECT COUNT(*) AS nombre FROM ".$table);
		$cursor->execute();
		$result = $cursor->fetch();
		$cursor->closeCursor();

		return $result[0];

	} catch (Exception $e) {
		echo "Failed : ".$e->getMessage();
	}
}