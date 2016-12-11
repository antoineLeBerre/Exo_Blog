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

$users = lire_table('blog_users');
$options = array("ORDER BY"=>"comment_date", "ORDER"=>"DESC", "OFFSET"=>$offset, "LIMIT"=>NB_COMMENT_PAGE, "WHERECOL", "VALUE");
if (isset($_GET["user"])) {
	$option['WHERECOL'] = "comment_author";
	$option['VALUE'] = $_GET['user'];
}
$nb_commentaires = count_table("blog_comments", $option);
$commentaires = lire_table("blog_comments", $options);


include ('app/view/commentaires/admin.php');