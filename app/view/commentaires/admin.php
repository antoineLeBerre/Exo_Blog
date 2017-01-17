<?php include("app/view/layout/header.php"); ?>
<?php if (!defined("BASE_URL")) die("ressource interdite"); ?>
<div class='container-fluid'>
	<h3>Commentaires</h3>
	<?php 
	if (isset($_GET['user'])) {
		select_list("post_users", $users, "ID", "user_login","list_select", array("selected"=>$_GET['user']));
	}
	else {
		select_list("post_users", $users, "ID", "user_login","list_select"); 
		} ?>
	<ul>
	<?php foreach ($commentaires as $commentaire) 
	{ ?>
		<li>Publié le <?php echo $commentaire["comment_date"]; ?><br/>
		<?= $commentaire["comment_ID"]; ?><br/>
		<?php echo $commentaire["comment_content"]; ?><br/>
		<a href="?module=commentaires&action=supprimer_commentaire&id=<?php echo $commentaire['comment_ID']; ?>&page=<?= $page ?>" >Supprimer</a> </li>
	<?php } ?>
	</ul>
	<?php 
	if(isset($_GET['user'])) {
			paginat($nb_commentaires, NB_COMMENT_PAGE, 'commentaires', 'admin', '&user=' . $_GET['user']);
		}
		else {
			paginat($nb_commentaires, NB_COMMENT_PAGE, 'commentaires', 'admin');
		}	
	?>
</div>

