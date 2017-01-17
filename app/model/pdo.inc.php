<?php
if (!defined("BASE_URL")) die("ressource interdite");
try {

	/*$connect = "mysql:host=localhost;port=3306;dbname=aleberre";
	$login = "aleberre";
	$pass = "145416";*/ //Connextion serveur
	$connect = "mysql:host=localhost;port=3306;dbname=bdd_blog";
	$login = "root";
	$pass = ""; //Connexion local
	$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($connect, $login, $pass, $option);
	
} catch (Exception $e) {
	echo "Erreur Connexion : ",$e->getMessage();	
}

?>