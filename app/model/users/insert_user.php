<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function insert_user($tab_options)
{
	try {

		global $pdo;

		$sql = ('INSERT INTO blog_users(user_login, user_pass, user_email, display_name, user_photo)
			values(:login, :pass, :email, :name, NULL)');

		$query = $pdo->prepare($sql);
		$query->bindValue(":login", $tab_options["post_login"], PDO::PARAM_STR);
		$query->bindValue(":pass", $tab_options["post_password"], PDO::PARAM_STR);
		$query->bindValue(":email", $tab_options["post_email"], PDO::PARAM_STR);
		$query->bindValue(":name", $tab_options["post_name"], PDO::PARAM_STR);
		$query->execute();

		return true;
	} catch (Exception $e) {
		return false;
	}
}