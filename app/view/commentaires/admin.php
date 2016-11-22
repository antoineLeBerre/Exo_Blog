<?php include("app/view/layout/header.php"); ?>

<div class='container-fluid'>
	<h3>Commentaires</h3>
	<?php select_list("post_users", $users, "ID", "user_login"); ?>
	<ul>
	<?php foreach ($commentaires as $commentaire) 
	{ ?>
		<li>Publié le <?php echo $commentaire["comment_date"]; ?></br>
		<?php echo $commentaire["comment_content"]; ?> </li>
	<?php } ?>
	</ul>
	<?php paginat($nb_commentaires, NB_COMMENT_PAGE, 'commentaires', "admin");?>
</div>

