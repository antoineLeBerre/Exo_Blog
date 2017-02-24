<?php

define('SALAGE', "test9229");

$information = explode(" ", $_POST["data"]); //["admin", "admin"]; //
$password = $information[1];
$information[1] = md5($password.SALAGE);
$user = verif_login($information);
if (!$user) {
    echo "0";
}
else
{
    $_SESSION["user"] = $user;
    if ($user["ID"] == 1)
    {
        $_SESSION["level"] = 1;
        echo "1";
    }
    else
    {
        $_SESSION["level"] = 0;
        echo "2";
    }

}

function verif_login($info)
{
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

    try
    {
        $query = $pdo->prepare("SELECT * FROM blog_users 
								WHERE user_login = :login AND user_pass = :password");
        $query->bindValue(':login', $info["0"], PDO::PARAM_STR);
        $query->bindValue(':password', $info["1"], PDO::PARAM_STR);
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