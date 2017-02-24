<?php

include ("app/model/users/login.php");
$information = explode(" ", $_POST["data"]);
$login = $information[0];
$password = $information[1];

$_POST["post_password"] = md5($_POST["post_password"].SALAGE);
$user = verif_login($_POST);
if (!$user) {
    header ("location:?module=user&action=login&notification=nok");
}
else
{
    $_SESSION["user"] = $user;
    if ($user["ID"] == 1)
    {
        $_SESSION["level"] = 1;
        location("articles", "index");
    }
    else
    {
        $_SESSION["level"] = 0;
        location("articles", "index");
    }
}