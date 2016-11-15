<?php 
include_once ("app/model/articles/lire_article.php");
include_once ("app/model/commentaire/lire_commentaire.php");
$articles = lire_article($_GET['id']);
$commentaires = lire_commentaire($_GET["id"]);

define('PAGE_TITLE', "Detail de l'article");
include ("app/view/articles/detail.php");