<?php 

if(!isset($_POST['post_title']))
{
	include_once ("app/model/categorie/lire_categories.php");
	$categories = lire_categories();
	
	include_once ("app/view/articles/new.php");
}
else
{
	include_once ('app/model/articles/ajouter_article.php');
	$article = ajouter_article($_POST, 2);
	if (!$article) {
		header ("location:?module=articles&action=new&notification=nok");
	}
	else{
		header ("location:?module=articles&action=detail&id=".$article."notification=ok");
	}
}


