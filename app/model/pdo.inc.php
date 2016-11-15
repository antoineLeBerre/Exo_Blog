<?php

try {

	$connect = "mysql:host=localhost;port=3306;dbname=bdd_blog";
	$login = "root";
	$pass = "";
	$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($connect, $login, $pass, $option);
	
} catch (Exception $e) {
	echo "Erreur Connexion : ",$e->getMessage();	
}

?>