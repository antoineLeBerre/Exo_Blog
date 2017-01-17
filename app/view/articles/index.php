<?php include("app/view/layout/header.php"); ?>
<?php if (!defined("BASE_URL")) die("ressource interdite"); ?>
<div class='container-fluid'>
	<h3>Derniers articles du blog</h3>
	
	<?php 
	foreach($articles as $article)
	{ ?>
		<div class="container">
			<p>
				<a href="?module=articles&action=detail&id=<?= $article['post_ID'] ?>">
				Titre = <?php echo $article["post_title"]; ?>
				</a>
				</br>
				Date = <?php echo $article['post_date']; ?>
				</br>
				Contenu = <?php echo $article['contenu']; ?> ...
			</p>
		</div>
		
	<?php } ?>
	<?php paginat($nb_articles, NB_ARTICLES_PAGE, $module, $action);?>
</div>

<?php include("app/view/layout/footer.php"); ?>