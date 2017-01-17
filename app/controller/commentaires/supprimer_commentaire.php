<?php 
if (!defined("BASE_URL")) die("ressource interdite");
$delete = delete_row("blog_comments", array("COL"=>"comment_ID", "VALUE"=>$_GET['id']));

if ($delete) {
	location("commentaires", "admin", "notif=ok&page=".$_GET['page']);
}
else {
	location("commentaires", "admin", "notif=nok&page=".$_GET['page']);
}