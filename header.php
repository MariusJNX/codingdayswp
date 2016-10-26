<!DOCTYPE html>
<html>
	<head >
		<!-- C'est la balise qui vous permet de pouvoir mettre des des è é ê ç, etc sinon, votre navigateur ne sera pas les interpreter :) -->
		<meta charset="UTF-8">
		<!--
		 On a dit que le fichier header.php aller être recopié sur chaque page de votre site...
		 Ok, mais toutes les pages n'ont pas le même titre comment es-ce qu'on peut faire ?
		 La réponse ci-dessous :)
	  -->
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<!-- Rajoutez ci-dessous vos libraries CSS, JS, etc :)  -->


		<!-- wp_head(); est un hook qui permet d'insèrer des fonctions dans la balise head -->
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header">
			<!-- Vous pouvez mettre ici toutes les infos que vous voulez retrouver dans le header de toutes vos pages  -->
		</header>
