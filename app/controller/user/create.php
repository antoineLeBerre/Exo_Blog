<?php 
if (!defined("BASE_URL")) die("ressource interdite");
include_once ("app/model/users/insert_user.php");
protection("user", ADMIN, "user", "login");

if (!isset($_POST["post_login"])) {
	define('PAGE_TITLE', "Créer un utilisateur");
	include_once ('app/view/users/create_users.php');
}
else{
	$salage = "test9229";
	$users = lire_table("blog_users");
	foreach ($users as $user) {
		if (($_POST["post_login"] == $user["user_login"]) || ($_POST["post_email"] == $user["user_email"]) || ($_POST["post_password"] == $user["user_pass"])) {
			location("user", "create", "notif=SameNameOrEmail");
		}
	}
	$_POST["post_password"] = md5($_POST["post_password"].SALAGE);
	$result = insert_user($_POST);
	if ($result) {
		location("user", "users");
	}
	location("user", "create", "notif=nokCreate");
}