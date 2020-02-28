<?php
$connexion = "https://elio.tt/home"
?>

<!-- NAVIGATION -->
<nav id="navbar">
	<div class="container">
		<div class="navbar__wrapper">
			<div class="navbar__brand">
				<img class="navbar__logo" src="assets/img/logos/eliott_logo.png" srcset="assets/img/logos/eliott_logo@2x.png 2x, assets/img/logos/eliott_logo@3x.png 3x" alt="Eliott">
			</div>
			<ul class="navbar__menu">
				<li class="navbar__item">
					<a href="index.php" class="navbar__link">Accueil</a>
				</li>
				<li class="navbar__item">
					<a href="index.php#anchor-philosophie" class="navbar__link">Philosophie</a>
				</li>
				<li class="navbar__item">
					<a href="index.php#anchor-programme" class="navbar__link">Programme</a>
				</li>
				<li class="navbar__item">
					<a href="<?= $connexion ?>" class="navbar__link">
						<img class="navbar__connexion__img" src="assets/img/logos/connexion_logo.png" srcset="assets/img/logos/connexion_logo@2x.png 2x, assets/img/logos/connexion_logo@3x.png 3x" alt="Eliott">
						<span class="navbar__connexion">Connexion</span>
					</a>
				</li>
			</ul>
			<button class="navbar__hamburger">
				<svg class="icon">
					<use xlink:href="assets/icons/icons.svg#hamburger"></use>
				</svg>
			</button>
		</div>
	</div>
</nav>
