<?php
if (!defined("BASE_URL")) die("ressource interdite");
function verif_login($login)
{
	global $pdo;

	try 
	{
		$query = $pdo->prepare("SELECT * FROM blog_users 
								WHERE user_login = :login AND user_pass = :password");
		$query->bindValue(':login', $login["post_login"], PDO::PARAM_STR);
		$query->bindValue(':password', $login["post_password"], PDO::PARAM_STR);
		$query->execute();

		$users = $query->fetchAll();
		$query->closeCursor();

		if (empty($users) || sizeof($users) > 1)
		{
			return false;
		}
		else
		{
			return $users[0];
		}

	} catch (Exception $e) {
		echo "Erreur Login".$e->getMessage();
	}
}