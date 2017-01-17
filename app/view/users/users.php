<?php include("app/view/layout/header.php"); ?>
<?php if (!defined("BASE_URL")) die("ressource interdite"); ?>
<div class="container-fluid">
	<h3>Liste des utilisateurs du site</h3>
	<p>Voici la liste des utilisateur inscrit sur le site</p>


	<?php foreach ($users as $user) { ?>
		<div class="container">
			<ul>
				<li><strong>Nom : </strong><?php echo $user["display_name"]; ?></li>
				<li><strong>Email : </strong><?php echo $user["user_email"]; ?></li>
				<li><strong>Photo : </strong><img src="<?php echo $user["user_photo"]; ?>" alt="avatar"></li>
			</ul>
		</div>
	<?php } ?>
</div>
<?php include("app/view/layout/footer.php"); ?>