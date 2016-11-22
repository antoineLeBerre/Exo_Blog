<?php 

protection("user", 0, "user", "login");

if(!isset($_POST['post_title']))
{
	$categories = lire_table("blog_categories");

	include_once ("app/view/articles/new.php");
}
else
{
	include_once ('app/model/articles/ajouter_article.php');
	$article = ajouter_article($_POST, $_SESSION["user"]["ID"]);
	if (!$article) {
		header ("location:?module=articles&action=new&notification=nok");
	}
	else{
		header ("location:?module=articles&action=detail&id=".$article."notification=ok");
	}
}


