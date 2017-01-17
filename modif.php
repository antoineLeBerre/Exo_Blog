<?php 
if (!defined("BASE_URL")) die("ressource interdite");
include_once ("app/model/users/update_user.php");
protection("user", USER, "user", "login");

if (!isset($_POST["post_login"])) {

	define('PAGE_TITLE', "INFORMATION COMPTE");
	include_once ('app/view/users/modif_users.php');
}
else{
	$users = lire_table("blog_users");
	foreach ($users as $user) {
		if (($_POST["post_login"] == $user["user_login"]) || ($_POST["post_email"] == $user["user_email"])) {
			location("user", "modif", "notif=SameNameOrEmail");
		}
	if ($_POST["post_login"] == "") {
		$_POST["post_login"] = $_SESSION["user"]["user_login"];
	}
	if ($_POST["post_password"] == "") {
		$_POST["post_password"] = $_SESSION["user"]["user_pass"];
	}
	if ($_POST["post_email"] == "") {
		$_POST["post_email"] = $_SESSION["user"]["user_email"];
	}
	if ($_POST["post_name"] == "") {
		$_POST["post_name"] = $_SESSION["user"]["display_name"];
	}
	$result = insert_row("blog_users", array("user_login"=>$_POST["post_login"], "user_pass"=>$_POST["post_password"], "user_email"=>$_POST["post_email"], "display_name"=>$_POST["post_name"]));
	if ($result) {
		
		$_SESSION["user"]["user_login"] = $_POST["post_login"];
		$_SESSION["user"]["user_pass"] = $_POST["post_password"];
		$_SESSION["user"]["user_email"] = $_POST["post_email"];
		$_SESSION["user"]["display_name"] = $_POST["post_name"];
	}
		location("user", "modif", "notif=Update");
	}
		location("user", "modif", "notif=nokUpdate");
}