<?php 

$tab = array('post_category'=> 2, 'content'=>'Ceci est un test', 'title'=>'TEST');
include_once ('app/model/articles/ajouter_article.php');
$article = ajouter_article($tab);

var_dump($article);