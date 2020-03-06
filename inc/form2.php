<?php require_once(form_send2.php); ?>
<!-- NAVIGATION -->
<div id="form">
	<div class="container container--form">
		<form class="form__wrapper" method="post">
			<p class="form__item form__item--lastName">
				<label for="lastName">Nom *</label>
				<input name="lastName" id="lastName" value="<?= $lastName ?>" type="text" placeholder="Ex : Eliott">
				<span class="message--error"><?= $lastname_error ?></span>
			</p>
			<p class="form__item form__item--firstName">
				<label for="firstName">Prénom *</label>
				<input name="firstName" id="firstName" value="<?= $firstName ?>" type="text" placeholder="Ex : Dupond">
				<span class="message--error"><?= $firstname_error ?></span>
			</p>
			<p class="form__item form__item--adress">
				<label for="adress">Adresse</label>
				<input name="adress" id="adress" value="<?= $adress ?>" type="text" placeholder="Ex : 20 Rue du Joaillier">
				<span class="message--error"><?= $adress_error ?></span>
			</p>
			<p class="form__item form__item--postCode">
				<label for="postCode">Code postal</label>
				<input name="postCode" id="postCode" value="<?= $postCode ?>" type="text" placeholder="Ex : 75000">
				<span class="message--error"><?= $postCode_error ?></span>
			</p>
			<p class="form__item form__item--city">
				<label for="city">Ville</label>
				<input name="city" id="city" value="<?= $city ?>" type="text" placeholder="Ex : Paris">
				<span class="message--error"><?= $city_error ?></span>
			</p>
			<p class="form__item form__item--email">
				<label for="email">Adresse e-mail *</label>
				<input name="text" id="text" value="<?= $email ?>" type="email" placeholder="Ex : adresse@mail.com">
				<span class="message--error"><?= $email_error ?></span>
			</p>
			<p class="form__item form__item--tel">
				<label for="tel">Téléphone</label>
				<input name="tel" id="tel" value="<?= $tel ?>" type="text" placeholder="Ex : 06 00 00 00 00">
				<span class="message--error"><?= $tel_error ?></span>
			</p>
			<p class="form__obli">* : Champs obligatoires</p>
			<p class="form__item form__item--submit">
				<button name="submit" type="submit" id="form__submit" data-submit="...Envoi en cours" onclick="SubmitFormData();">Transmettre ma demande</button>
			</p>
			<p class="message--success"><?= $success ?></p>
			<div id="results"></div>
		</form>
	</div>
</div>
<!--JQUERY CDN-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>
	function SubmitFormData() {
		var lastName = $("#lastName").val();
		var firstName = $("#firstName").val();
		var adress = $("#adress").val();
		var postCode = $("#postCode").val();
		var city = $("#city").val();
		var email = $("#email").val();
		var tel = $("#tel").val();
		$.post("form-send2.php", { lastName: lastName, firstName: firstName, adress: adress, postCode: postCode, city: city, email: email, tel: tel },
					 function(data) {
			$('#results').html(data);
			$('form__wrapper')[0].reset();
		});
	}
</script>