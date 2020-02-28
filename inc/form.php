<!-- NAVIGATION -->
<div id="form">
	<div class="container container--form">
		<form class="form__wrapper" method="post" action="inc/form-send.php">
			<p class="form__item form__item--lastName">
				<label for="lastName">Nom *</label>
				<input required name="lastName" type="text" placeholder="Ex : Eliott">
			</p>
			<p class="form__item form__item--firstName">
				<label for="firstName">Prénom *</label>
				<input required name="firstName" type="text" placeholder="Ex : Dupond">
			</p>
			<p class="form__item form__item--adress">
				<label for="adress">Adresse</label>
				<input name="adress" type="text" placeholder="Ex : 20 Rue du Joaillier">
			</p>
			<p class="form__item form__item--postCode">
				<label for="postCode">Code postal</label>
				<input name="postCode" type="number" placeholder="Ex : 75000">
			</p>
			<p class="form__item form__item--city">
				<label for="city">Ville</label>
				<input name="city" type="text" placeholder="Ex : Paris">
			</p>
			<p class="form__item form__item--email">
				<label for="email">Adresse e-mail *</label>
				<input required name="email" type="email" placeholder="Ex : adresse@mail.com">
			</p>
			<p class="form__item form__item--tel">
				<label for="tel">Téléphone</label>
				<input name="tel" type="number" placeholder="Ex : 06 00 00 00 00">
			</p>
			<p class="form__obli">* : Champs obligatoires</p>
			<p class="form__item form__item--submit">
				<button type="submit" id="form__submit">Transmettre ma demande</button>
			</p>
		</form>
	</div>
</div>
