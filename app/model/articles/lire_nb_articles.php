<?php 

function lire_nb_articles()
{
	global $pdo;
try {

	$cursor = $pdo->query("SELECT COUNT(post_ID) FROM blog_posts");
	$cursor->execute();

	$nb_articles = $cursor->fetch();
	$cursor->closeCursor();

	return $nb_articles[0];

} catch (Exception $e) {
	echo "Failed : ".$e->getMessage();
}
	

}