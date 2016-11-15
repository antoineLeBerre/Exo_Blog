<?php 

function list_users()
{
	global $pdo;

	try {

		$query = $pdo->prepare("SELECT * FROM blog_users");
		$query->execute();
		$nb_users = $query->fetchAll();

		$query->closeCursor();
		return $nb_users;
		
	} catch (Exception $e) 
	{
		echo ("Erreur nb_user". $e->getMessage());
	}
}