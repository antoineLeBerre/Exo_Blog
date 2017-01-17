<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function update_user($id, $tab_options)
{
	try {

		global $pdo;

		var_dump("test");
		$sql = ('UPDATE blog_users SET user_login = :login, user_pass = :pass, user_email = :email, display_name = :name WHERE ID = :id');

		$query = $pdo->prepare($sql);
		$query->bindValue(":login", $tab_options["post_login"], PDO::PARAM_STR);
		$query->bindValue(":pass", $tab_options["post_password"], PDO::PARAM_STR);
		$query->bindValue(":email", $tab_options["post_email"], PDO::PARAM_STR);
		$query->bindValue(":name", $tab_options["post_name"], PDO::PARAM_STR);
		$query->bindValue(":id", $id, PDO::PARAM_INT);
		$query->execute();

		return true;
	} catch (Exception $e) {
		echo "Fail".$e->getMessage();
		return false;
	}
}