<?php
$page = "home_page";
$title = "Eliott";
$description = "L'assistant personnel de votre santé";
require_once('inc/head.php');
require_once('inc/nav.php');
?>
<!-- SECTION HEADER -->
<header id="header">
	<div class="container">
		<div class="header__wrapper">
			<h1 class="header__title">Eliott, votre programme<br>bien-être &amp; santé personnalisé</h1>
			<p class="header__subtitle">A partir de l’analyse biologique, nous déterminons avec précision votre profil et développons pour vous un programme sur-mesure, (sport, nutrition), accompagné par des experts de la santé et du bien-être.</p>
		</div>
	</div>
</header>
<!-- SECTION PHILOSOPHIE -->
<section id="philosophie">
	<div class="container text-center">
		<span id="anchor-philosophie" style="position:absolute; top:-120px;"></span>
		<h2 class="section-title">Philosophie</h2>
		<p class="section-intro">Eliott vous accompagne dans votre quête du bien-être, en s’inscrivant dans une volonté d’améliorer la qualité de vie, mise en lumière par l’essor de nouvelles pratiques alimentaires et sportives. Des quotidiens faits de défis, et de challenges qui demandent à chacun de donner le meilleur.</p>
	</div>
	<div class="philosophie__wrapper wrapper--grey text-center">
		<h3 class="philosophie__wrapper__title">Découvrez Eliott en vidéo</h3>
		<div class="philosophie__wrapper__video">
			<iframe id="eliottIframe" src="https://player.vimeo.com/video/304329383" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" data-ready="true"></iframe>
		</div>
	</div>
</section>
<!-- SECTION PROGRAMME -->
<section id="programme">
	<div class="container text-center">
		<span id="anchor-programme" style="position:absolute; top:-120px;"></span>
		<h2 class="section-title">Programme</h2>
		<p class="section-intro">Écouter son corps est difficile, Eliott le fait parler pour le comprendre.<br>
			Grâce à son programme en trois modules, Eliott vous assure l’amélioration de votre bien-être basé sur un suivi empirique de vos analyses biologiques.</p>
		<div class="programme__wrapper">
			<div class="programme__item">
				<img src="assets/img/home/programme/biologie_eliott.jpg" srcset="assets/img/home/programme/biologie_eliott@2x.jpg 2x, assets/img/home/programme/biologie_eliott@3x.jpg 3x" alt="" class="programme__img">
				<div class="programme__content">
					<h3 class="programme__title">La Biologie<br>médicale avec Eliott </h3>
					<p class="programme__description">L’intérêt de la biologie médicale est d’apporter des éléments de mesures fiables et de comprendre le fonctionnement de votre métabolisme. Avec votre bilan d’entrée dans le programme, nous pouvons établir votre profil et identifier vos points d’attention sur 4 thématiques essentielles.</p>
					<a class="btn btn--primary programme__btn" href="biologie.php">En savoir plus</a>
				</div>
			</div>
			<div class="programme__item">
				<img src="assets/img/home/programme/nutrition_eliott.jpg" srcset="assets/img/home/programme/nutrition_eliott@2x.jpg 2x, assets/img/home/programme/nutrition_eliott@3x.jpg 3x" alt="" class="programme__img">
				<div class="programme__content">
					<h3 class="programme__title">La nutrition <br>avec Eliott</h3>
					<p class="programme__description">Un nutritionniste vous accompagne par téléphone, sur des séances de 30 minutes pour changer et adapter vos habitudes alimentaires en fonction de vos carences, de votre métabolisme et de vos objectifs.</p>
					<a class="btn btn--primary programme__btn" href="biologie.php">En savoir plus</a>
				</div>
			</div>
			<div class="programme__item">
				<img src="assets/img/home/programme/sport_eliott.jpg" srcset="assets/img/home/programme/sport_eliott@2x.jpg 2x, assets/img/home/programme/sport_eliott@3x.jpg 3x" alt="" class="programme__img">
				<div class="programme__content">
					<h3 class="programme__title">Le sport <br>avec Eliott</h3>
					<p class="programme__description">Le sport est essentiel à la réussite du programme Eliott et à l’atteinte de vos objectifs. Pour cela, Eliott vous propose de choisir entre l’un des 2 partenaires de sport inclut dans votre programme. A découvrir depuis votre application Eliott, ou directement sur les sites de nos partenaires.</p>
					<a class="btn btn--primary programme__btn" href="sport.php">En savoir plus</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SECTION PROGRAMME DIGITAL-->
<section id="programme-digital">
	<div class="container text-center">
		<div class="programme-digital__wrapper">
			<div class="programme-digital__item">
				<div class="programme-digital__illustration">
					<img src="assets/img/home/programme/accompagnement.jpg" srcset="assets/img/home/programme/accompagnement@2x.jpg 2x, assets/img/home/programme/accompagnement@3x.jpg 3x" alt="" class="programme-digital__img">
				</div>
				<div class="programme-digital__content">
					<h2 class="section-title section-title--small">Un programme digital,<br>
						un accompagnement humain</h2>
					<p class="programme-digital__text">L’interface digitale d’Eliott a été pensée pour proposer un accompagnement humain répondant à vos attentes. <br>
						Tout au long du programme, de véritables personnes sont à votre écoute pour apporter les conseils et le soutien dont vous avez besoin : conseillers téléphoniques, biologistes médicaux, nutritionnistes… <br>
						Derrière l’application Eliott, c’est toute une équipe dédiée qui est à votre service pour vous aider à atteindre les objectifs que vous avez définis. </p>
				</div>
			</div>
			<div class="programme-digital__item">
				<div class="programme-digital__illustration">
					<img src="assets/img/home/programme/suivi.jpg" srcset="assets/img/home/programme/suivi@2x.jpg 2x, assets/img/home/programme/suivi@3x.jpg 3x" alt="" class="programme-digital__img">
				</div>
				<div class="programme-digital__content">
					<h2 class="section-title section-title--small">Un suivi précis, sérieux et intuitif<br>avec votre application</h2>
					<p class="programme-digital__text">La plateforme de suivi Eliott est disponible depuis un ordinateur, une tablette ou une application mobile. <br>
						En plus des contenus intégrés au programme, de nombreuses autres fonctionnalités sont présentes dans l’application : courbes de progression, notifications de suivi et rappel des objectifs … Eliott vous permet de constater votre progression d’un simple coup d’œil. <br>
						Eliott vous fournit tous les outils indispensables pour vous aider à atteindre vos objectifs prédéfinis par le programme. Il favorise ainsi votre qualité de vie au quotidien.</p>
					<a class="btn btn--primary programme-digital__btn" href="application.php">En savoir plus</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SECTION PARCOURS -->
<section id="parcours">
	<div class="parcours__wrapper text-center">
		<span id="anchor-parcours" style="position:absolute; top:-120px;"></span>
		<h3 class="parcours__wrapper__title">Votre parcours en vidéo</h3>
		<div class="parcours__wrapper__video">
			<iframe id="eliottIframe" src="https://player.vimeo.com/video/347524363" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" data-ready="true"></iframe>
		</div>
	</div>
</section>

<?php
	$first_link = "biologie.php";
	$first_text = "Vos rendez-vous</br>biologie et nutrition";
	$second_link = "sport.php";
	$second_text = "Votre sport</br>avec Eliott";
?>

<?php require_once('inc/links.php'); ?>
<?php require_once('inc/contact.php'); ?>
<?php require_once('inc/form.php'); ?>
<?php require_once('inc/footer.php'); ?>
