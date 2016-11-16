<?php

protection("user", 1, "user", "login");

include ('app/model/users/list_users.php');
$users = list_users();

define('PAGE_TITLE', "Detail des utilisateurs");
include ('app/view/users/users.php');