<?php

protection("user", 1, "user", "login");

$users = lire_table("blog_users", array("ORDER BY"=>"user_login", "ORDER" => "DESC"));

define('PAGE_TITLE', "Detail des utilisateurs");
include ('app/view/users/users.php');