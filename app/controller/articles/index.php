<?php

include_once ("app/model/pdo.inc.php");
include ("app/model/articles/lire_articles.php");
//include ("app/model/articles/lire_nb_articles.php");


if(!isset($_GET['page']))
{
	$page = 1;
}
else
{
	$page = $_GET["page"];
}

$offset = ($page - 1) * NB_ARTICLES_PAGE;
//$nb_articles = lire_nb_articles();
$nb_articles = count_table("blog_posts");
//$nb_pages = ceil($nb_articles/NB_ARTICLES_PAGE);
$articles = lire_article($offset, NB_ARTICLES_PAGE);

foreach ($articles as $cles => $article)
{
	$articles[$cles]['post_date'] = "Publié le :".$article["post_date"];
	$articles[$cles]["contenu"] = htmlspecialchars($article["contenu"]);
	$articles[$cles]["post_title"] = htmlspecialchars($article["post_title"]);
}

define('PAGE_TITLE', 'Liste des articles');
include ("app/view/articles/index.php");
