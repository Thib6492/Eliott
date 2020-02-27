<?php
$page = "application_page";
$lang = "FR";
$title = "Eliott";
$description = "L'assistant personnel de votre santé";

require_once('inc/head.php');
require_once('inc/nav.php');
?>

<!-- SECTION HEADER -->
<section id="header--application">
	<div class="section-background">
		<img src="assets/img/application/header/eliott_application_header_1920w.jpg"
		srcset="assets/img/application/header/eliott_application_header_320w.jpg 320w,
		assets/img/application/header/eliott_application_header_640w.jpg 640w,
		assets/img/application/header/eliott_application_header_1280w.jpg 1280w,
		assets/img/application/header/eliott_application_header_1920w.jpg 1920w,
		assets/img/application/header/eliott_application_header_2560w.jpg 2x"
		sizes="100vw" alt="">
	</div>
	<div class="container text-center">
        <h1 class="section-title">L’application Eliott, votre<br>compagnon au quotidien !</h1>
        <p class="section-intro">Dès l’activation de votre compte, Eliott vous interroge sur votre mode de vie, d’alimentation et vos habitudes sportives via un questionnaire.</p>
	</div>
</section>
<!-- SECTION APPLICATION -->
<section id="application">
    <div class="container">
        <div class="application__wrapper">
            <div class="application__item">
                <div class="application__item__header">
                    <img src="assets/img/application/application_journal.png" srcset="assets/img/application/application_journal@2x.png 2x, assets/img/application/application_journal@3x.png 3x" alt="Journal logo" class="application__logo">
                    <h3 class="application__title">Journal</h3>
                </div>
                <div class="application__item__content clearfix">
                    <img src="assets/img/application/journal.jpg" srcset="assets/img/application/journal@2x.jpg 2x, assets/img/application/journal@3x.jpg 3x" alt="Journal logo" class="application__img">
                    <div class="application__content">
                        <p class="application__text application__text--strong">A chaque connexion à votre application, votre journal se met à jour et vous propose des contenus personnalisés :</p>
                        <ul class="application__list">
                            <li class="application__list__item">Mot du coach</li>
                            <li class="application__list__item">Conseils santé et bien-être</li>
                            <li class="application__list__item">Recettes de cuisine du jour</li>
                        </ul>
                        <p class="application__text">Votre journal mémorise tous les conseils et articles des jours de connexion à l’application.</p>
                    </div>
                </div>
                <p class="application__text">Vous avez la possibilité de taguer vos articles préférés afin de les retrouver facilement dans votre menu, bouton favoris.</p>
            </div>
            <div class="application__item">
                <div class="application__item__header">
                    <img src="assets/img/application/application_activites.png" srcset="assets/img/application/application_activites@2x.png 2x, assets/img/application/application_activites@3x.png 3x" alt="Journal logo" class="application__logo">
                    <h3 class="application__title">Activités</h3>
                </div>
                <div class="application__item__content clearfix">
                    <img src="assets/img/application/activites.jpg" srcset="assets/img/application/activites@2x.jpg 2x, assets/img/application/activites@3x.jpg 3x" alt="activites logo" class="application__img">
                    <div class="application__content">
                        <p class="application__text application__text--strong">En complément de votre abonnement sportif, en salle ou à domicile, participez
                            aux challenges qu’Eliott vous propose via le module «Activités» :</p>
                        <ul class="application__list">
                            <li class="application__list__item">Travailler sa mémoire</li>
                            <li class="application__list__item">Détoxifier son corps</li>
                            <li class="application__list__item">Réduire sa consommation d’alcool</li>
                            <li class="application__list__item">Ou lutter contre la fatigue par exemple…</li>
                        </ul>
                    </div>
                </div>
                <p class="application__text">De nombreux challenges vous attendent ! Vous pouvez lancer un challenge en toute autonomie depuis votre application, à votre rythme, et selon vos envies.</p>
            </div>
            <div class="application__item">
                <div class="application__item__header">
                    <img src="assets/img/application/application_donnees.png" srcset="assets/img/application/application_donnees@2x.png 2x, assets/img/application/application_donnees@3x.png 3x" alt="donnees logo" class="application__logo">
                    <h3 class="application__title">Données</h3>
                </div>
                <div class="application__item__content clearfix">
                    <img src="assets/img/application/donnees.jpg" srcset="assets/img/application/donnees@2x.jpg 2x, assets/img/application/donnees@3x.jpg 3x" alt="donnees logo" class="application__img">
                    <div class="application__content">
                        <p class="application__text application__text--strong">Parce que vos données sont au cœur de l’application et vous pouvez l’utiliser pour centraliser :</p>
                        <ul class="application__list">
                            <li class="application__list__item">Bilans de Biologie médicale</li>
                            <li class="application__list__item">Comptes-rendus de vos rendez-vous avec votre nutritionniste</li>
                            <li class="application__list__item">Evolution de votre poids, périmètre abdominale, IMC</li>
                            <li class="application__list__item">Nombre de pas</li>
                        </ul>
                    </div>
                </div>
                <p class="application__text">L’application Eliott regroupe toutes ces données pour vous  permettre de créer votre carnet de suivi de vos objectifs personnels.</p>
            </div>
            <div class="application__item">
                <div class="application__item__header">
                    <img src="assets/img/application/application_alimentation.png" srcset="assets/img/application/application_alimentation@2x.png 2x, assets/img/application/application_alimentation@3x.png 3x" alt="Journal logo" class="application__logo">
                    <h3 class="application__title">Alimentation</h3>
                </div>
                <div class="application__item__content clearfix">
                    <img src="assets/img/application/alimentation.jpg" srcset="assets/img/application/alimentation@2x.jpg 2x, assets/img/application/alimentation@3x.jpg 3x" alt="alimentation logo" class="application__img">
                    <div class="application__content">
                        <p class="application__text application__text--strong">En complément, l’application Eliott vous permet de saisir tous vos repas via le module Alimentation. </p>
                        <p class="application__text">Vous pourrez ainsi identifier si vos apports correspondent aux recommandations provenant de « CIQUAL » de l’ANSES*, qui est une base de composition nutritionnelle des aliments.</p>
                    </div>
                </div>
                <p class="application__text">Une fois les repas de la journée saisis, Eliott vous restitue vos apports en glucides, lipides et protéines, en fonction de votre métabolisme (poids, taille, activité physique…) ainsi que les familles d’aliments à surveiller.</p>
            </div>
        </div>
    </div>
</section>
<!-- SECTION APPLICATION-LINKS -->
<section id="application-links">
    <div class="application-links__wrapper wrapper--grey">
        <a class="application-links__btn btn btn--secondary" href="sport.php">Votre sport<br>avec Eliott</a>
        <a class="application-links__btn btn btn--secondary" href="index.php#anchor-parcours">Découvrez votre<br>parcours</a>
    </div>
</section>
	<?php require_once('inc/contact.php'); ?>
	<?php require_once('inc/footer.php'); ?>
	<script src="assets/js/navbar.js"></script>
	<!-- Start of Zendesk Widget script -->
<!--	<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=f5e007f0-9d0d-4b7e-aa9f-2baca02aafe9"> </script>-->
	<!-- End of Zendesk Widget script -->
</body>
</html>