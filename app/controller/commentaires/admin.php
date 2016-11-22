<?php 

protection("user", 1, "articles", 'index');
if(!isset($_GET['page']))
{
	$page = 1;
}
else
{
	$page = $_GET["page"];
}

$offset = ($page - 1) * NB_COMMENT_PAGE;
$nb_commentaires = count_table("blog_comments");
$users = lire_table('blog_users');
$commentaires = lire_table("blog_comments", array("ORDER BY"=>"comment_date", "ORDER"=>"DESC", "OFFSET"=>$offset, "LIMIT"=>NB_COMMENT_PAGE));


include ('app/view/commentaires/admin.php');