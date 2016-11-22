<?php include("app/view/layout/header.php"); ?>

<div class="container-fluid">
	<h3><?php echo htmlspecialchars($articles[0]["post_title"]) ?></h3>
	<ul class="container">
		<li><strong>ID : </strong><?php echo $articles[0]["post_ID"]; ?></li>
		<li><strong>Auteur : </strong><?php echo $articles[0]["display_name"]; ?></li>
		<li><strong>Catégorie : </strong><?php echo $articles[0]["cat_descr"]; ?></li>
		<li><strong>Publié le : </strong><?php echo $articles[0]["post_date"]; ?></li>
		<li><strong>Contenu : </strong><?php echo htmlspecialchars($articles[0]["post_content"]) ?></li>
	</ul>
</div>

<div class="container-fluid">
	<h3>Commentaire</h3>
	<div class="container">
		
		<?php
		if (!isset($_SESSION["user"])) { ?>
			<p>Veuillez vous connecter</p>
		<?php } 
		else{ ?>
			<ul>
			<?php foreach ($commentaires as $commentaire) 
		{ ?>
			<li>Publié le <?php echo $commentaire["comment_date"]; ?> par <?php echo $commentaire["display_name"]; ?> </br>
			<?php echo $commentaire["comment_content"]; ?> </li>
		<?php } 
		} ?>
		
		</ul>
	</div>
	<form action="?module=commentaires&action=ajouter_commentaire" method="POST">
		<input type="hidden" name="id" value="<?= $_GET["id"] ?>">
		<label for="commentaire">Commentaire : </label>
		<textarea id="commentaire" name="texte_commentaire"></textarea><br />
		<input type="submit" value="Valider">
	</form>	
</div>


<?php include("app/view/layout/footer.php"); ?>