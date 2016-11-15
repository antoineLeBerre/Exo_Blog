<?php

function lire_article($offset, $limite)
{
	global $pdo;
	try {

		$query = $pdo->prepare("SELECT post_ID, post_title, post_date, left(post_content, 300) as contenu
							FROM blog_posts
							ORDER BY post_date DESC
							LIMIT :offset, :limite");

		$query->bindValue(":offset", $offset, PDO::PARAM_INT);
		$query->bindValue(":limite", $limite, PDO::PARAM_INT);
		$query->execute();

		$articles = $query->fetchAll();
		$query->closeCursor();
		
		return $articles;
	} catch (Exception $e) {
		echo "Erreur : ", $e->getMessage();
	}
	
}

?>