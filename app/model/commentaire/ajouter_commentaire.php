<?php 
if (!defined("BASE_URL")) die("ressource interdite");

function ajouter_commentaire($commentaire, $user)
{
	global $pdo;
	
	try 
	{
		$query = $pdo->prepare("INSERT INTO blog_comments
								(comment_post_ID, comment_author, comment_content)
        						values
          						(:postId, :login, :contenu)");
		$query->bindValue(":postId", $commentaire["id"], PDO::PARAM_INT);
		$query->bindValue(":login", $user["ID"], PDO::PARAM_INT);
		$query->bindValue(":contenu", $commentaire["texte_commentaire"], PDO::PARAM_STR);
		$query->execute();

		return true;
	} catch (Exception $e) 
	{
		return false;
	}
}