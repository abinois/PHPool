<?php
include "rush.php";
include "create.php";
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Menu SNCF</title>
		<link rel="stylesheet" href="menu.css">
		<link rel="stylesheet" href="form.css">
	</head>	
	<body>
	<ul class="main">
			<li class="menu0 niveau1">Jus 🍏
				<ul class="niveau2">
					<li class="first">🍏 Orange</li>
					<li>🍏 Clémentine</li>
					<li>🍏 Raisin</li>
					<li>🍏 Pomme</li>
					<li>🍏 Poire</li>
					<li>🍏 Pamplemousse</li>
					<li>🍏 Ananas</li>
					<li>🍏 Fraise</li>
					<li>🍏 Kiwi</li>
					<li>🍏 Grenade</li>
					<li>🍏 Cranberry</li>
					<li>🍏 Lassi Banane</li>
					<li>🍏 Lassi Mangue</li>
					<li>🍏 Lassi Amande</li>
					<li>🍏 Lassi Miel</li>
					<li>🍏 Carrote Citron</li>
					<li class="last">🍏 Pomme Cannelle</li>
				</ul>
			</li>
			<li class="niveau1 menu1">Laits 🥛
				<ul class="niveau2">
					<li class="first">🥛 Lait Demi-Écrémé</li>
					<li>🥛 Lait Entier</li>
					<li>🥛 Soja Vanille</li>
					<li>🥛 Soja Nature</li>
					<li>🥛 Cacolac</li>
					<li>🥛 Candy Up Fraise</li>
					<li>🥛 Lait de Riz</li>
					<li>🥛 Lait d'Amande</li>
					<li>🥛 Lait Noisette</li>
					<li>🥛 Lait de Coco</li>
					<li class="last">🥛 Lait de Chanvre</li>
				</ul>
			</li>
			<li class="menu2 niveau1">Céréales 🌾
				<ul class="niveau2">
					<li class="first">🌾 Chocapic</li>
					<li>🌾 Choco Pops</li>
					<li>🌾 Golden Gramms</li>
					<li>🌾 Miel Pops</li>
					<li>🌾 Cookie Crisp</li>
					<li>🌾 Frosties</li>
					<li>🌾 Trésor</li>
					<li>🌾 Muesli</li>
					<li>🌾 Witabix</li>
					<li>🌾 Crunch</li>
					<li>🌾 Chokella</li>
					<li class="last">🌾 Lion</li>
				</ul>
			</li>
			<li class="menu3 niveau1">Topings 🍫
				<ul class="niveau2">
					<li class="first">🍫 Caramel</li>
					<li>🍫 Chocolat Fondu</li>
					<li>🍫 Marshmallow</li>
					<li>🍫 Chantilly</li>
					<li>🍫 Miel</li>
					<li>🍫 Sirop d'Érable</li>
					<li>🍫 Smarties</li>
					<li>🍫 Pop Corn</li>
					<li>🍫 Amandes</li>
					<li>🍫 Noisettes</li>
					<li>🍫 Cookie</li>
					<li>🍫 Raisins Secs</li>
					<li class="last">🍫 M&M</li>
				</ul>
			</li>
			<li class="menu4 niveau1">Pains 🍞
				<ul class="niveau2">
					<li class="first">🍞 Croissant</li>
					<li>🍞 Bagel</li>
					<li>🍞 Toast</li>
					<li>🍞 Pain au Chocolat</li>
					<li>🍞 Brioche</li>
					<li>🍞 Tradition</li>
					<li>🍞 Pitch</li>
					<li>🍞 Pain au lait</li>
					<li>🍞 Biscotte</li>
					<li>🍞 Muffin</li>
					<li>🍞 Galette</li>
					<li>🍞 Pita</li>
					<li class="last">🍞 Bun</li>
				</ul>
			</li>
		</ul>
		<div class="showroom">
		</div>
		<nav>
			<form method="POST" action="">
				<p>Déjà membre ?</p></br>
				Identifiant: <input type="text" name="login" placeholder="login" /></br>
				Mot de passe: <input type="password" name="passwd" placeholder="passwd" /></br>
				<input type="submit" name="submitlog" value="login" />
				<?PHP
					if (isset($_POST['submitlog']) && isset($error))
						echo $error;
				?>
			</form>
			<form method="POST" action="">
				<p>Devenir membre maintenant !</p></br>
				Identifiant: <input type="text" name="newuser" placeholder="login" /></br>
				Mot de passe: <input type="password" name="newpwd" placeholder="passwd" /></br>
				<input type="submit" name="submitnew" value="sign in" />
				<?PHP
					if (isset($_POST['submitnew']) && isset($error))
						echo $error;
				?>
			</form>
			<a href="panier.html">panier</a>
		</nav>
	</body>
</html>
