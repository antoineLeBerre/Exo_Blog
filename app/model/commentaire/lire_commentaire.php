<?php

function lire_commentaire($id)
{
	global $pdo;

	try {

		$query = $pdo->prepare("SELECT * 
								FROM blog_comments, blog_users 
								WHERE comment_author=ID AND comment_post_ID = :id
								ORDER BY comment_date DESC");
		$query->bindParam(":id", $id, PDO::PARAM_INT);
		$query->execute();

		$commentaires = $query->fetchAll();

		$query->closeCursor();

		return $commentaires;
	} catch (Exception $e) {
		echo ('Erreur SQL : '.$e->getMessage());
	}
}