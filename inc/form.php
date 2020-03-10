<!-- NAVIGATION -->
<div id="form">
	<div class="container container--form">
		<!--<form class="form__wrapper" method="post" action="inc/form_send.php">-->
		<form class="form__wrapper" method="post">
			<p class="form__item form__item--firstName">
				<label for="firstName">Prénom *</label>
				<input required id="firstName" name="firstName" value="" type="text" placeholder="Ex : Dupond">
				<span class="message__error message__error--firstName"></span>
			</p>
			<p class="form__item form__item--lastName">
				<label for="lastName">Nom *</label>
				<input id="lastName" name="lastName" value="" type="text" placeholder="Ex : Eliott">
				<span class="message__error message__error--lastName"></span>
			</p>
			<p class="form__item form__item--adress">
				<label for="adress">Adresse</label>
				<input id="adress" name="adress" type="text" value="" placeholder="Ex : 20 Rue du Joaillier">
			</p>
			<p class="form__item form__item--postCode">
				<label for="postCode">Code postal *</label>
				<input required id="postCode" name="postCode" value="" type="number" placeholder="Ex : 75000" maxlength="5">
				<span class="message__error message__error--postCode"></span>
			</p>
			<p class="form__item form__item--city">
				<label for="city">Ville *</label>
				<input required id="city" name="city" type="text" value="" placeholder="Ex : Paris">
				<span class="message__error message__error--city"></span>
			</p>
			<p class="form__item form__item--email">
				<label for="email">Adresse e-mail *</label>
				<input required id="email" name="email" type="email" value="" placeholder="Ex : adresse@mail.com">
				<span class="message__error message__error--email"></span>
			</p>
			<p class="form__item form__item--tel">
				<label for="tel">Téléphone</label>
				<input id="tel" name="tel" type="number" value="" placeholder="Ex : 06 00 00 00 00" maxlength="10">
			</p>
			<p class="form__obli">* : Champs obligatoires</p>
			<p class="form__item form__item--submit">
				<button type="submit" id="submit" name="submit">Transmettre ma demande</button>
			</p>
		</form>
	</div>
</div>

