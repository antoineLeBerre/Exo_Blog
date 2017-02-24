<?php if (!defined("BASE_URL")) die("ressource interdite"); ?>
<!DOCTYPE html>
<html lang="<?php echo APP_LANG; ?>">
<head>
	<title><?php echo PAGE_TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="webroot/style/style.css">
	<link href="librairies/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="<?php echo APP_CHARSET; ?>">
<!--	<script type="text/javascript" src="webroot/js/commentaire_admin.js"></script>-->
    <script>
        function creerInstance(){
            var req = null;
            if(window.XMLHttpRequest){
                req = new XMLHttpRequest();
            }

            else if(window.ActiveXObject){
                try{
                    req = new ActiveXObject("Maxml2.XMLHTTP");
                }

                catch (e){
                    try{
                        req = new ActiveXObject("Microsoft.XMLHTTP");
                    }

                    catch (e){
                        alert("XHR notcreated");
                    }
                }
            }

            return req;
        };

        function monAffichage(data, element){
            element.innerHTML = data;
        }

        function monAjax(element){
            var req = creerInstance();
            var login = document.getElementById("login").value;
            var password = document.getElementById("password").value;
            var data = "data="+login+" "+password;

            monAffichage(data, element);
            req.onreadystatechange = function(){

                if(req.readyState == 4){
                    if(req.status == 200){
                        monAffichage(req.responseText, element);
                    }
                }

                else{
                    console.log("Erreur AJAX: " + req.status + " " + req.statusText);
                }
            };

            req.open("POST", "app/controller/user/connexionAjax.php", true);
            req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            req.send(data);
        }

    </script>
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
            <li>
                <form action="" method="post" id="test">
                    <label for="login">Login : </label><input type="text" name="login" id="login">
                    <label for="password">Password : </label><input type="text" name="mdp" id="password">
                    <input type="button" name="ok" value="OK" onclick="monAjax(document.getElementById('test'))" >
                </form>
            </li>
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
	