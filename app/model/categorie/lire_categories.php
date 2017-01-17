<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function lire_categories()
{
	global $pdo;

	try {

		$query = $pdo->query("SELECT * FROM blog_categories");

		$categories = $query->fetchAll();
		$query->closeCursor();

		return $categories;
	} catch (Exception $e) {
		echo "Erreur : ", $e->getMessage();
	}
}