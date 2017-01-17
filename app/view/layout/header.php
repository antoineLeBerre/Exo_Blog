<?php if (!defined("BASE_URL")) die("ressource interdite"); ?>
<!DOCTYPE html>
<html lang="<?php echo APP_LANG; ?>">
<head>
	<title><?php echo PAGE_TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="webroot/style/style.css">
	<link href="librairies/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="<?php echo APP_CHARSET; ?>">
	<script type="text/javascript" src="webroot/js/commentaire_admin.js"></script>
</head>
<body>
<div class="container-fluid header">
	<h1>Bienvenue sur mon blog</h1>
</div>
<div class="container-fluid nav">
	<ul id="menu">
		<li><a href="?module=articles&action=index">Accueil</a></li>
		<li><a href="?module=user&action=users">Liste des utilisataeur</a></li>
		<li><a href="?module=articles&action=new">Creer un article</a></li>
		<li><a href="?module=commentaires&action=admin">Liste commentaires</a></li>
		
		<?php if (!isset($_SESSION['user']))
		{ ?>
			
			<li><a href="?module=user&action=login">Login</a></li>
		<?php }
		else
		{ ?>
			<?php if ($_SESSION["level"] == ADMIN) { ?>
				<li><a href="?module=user&action=create">Créer utilisateur</a></li>
			<?php } ?>
			<li><a href="?module=user&action=modif">Changer info</a></li>
			<li>Bonjour <?= $_SESSION['user']['user_login'] ?></li>
			<li><a href="?module=user&action=logout">Logout</a></li>
		<?php } ?>
	</ul>	
</div>
	