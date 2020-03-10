const formdisplay = (function() {
	let form = document.getElementById('form');
	let button = document.getElementById('contact__button');

		button.addEventListener('click', function(e) {
			if (form.classList.contains('is-open')) {
				form.classList.remove('is-open');
			} else {
				form.classList.add('is-open');
				//let scrollPos = window.scrollY;
				//scrollPos += 80;
			}
		});
})();


$(function() {
	
	$('.message__error').hide();
	
	var error_firstName = "Veuillez renseigner votre prénom";
	var error_lastName = "Veuillez renseigner votre nom";
	var error_postCode = "Veuillez renseigner votre code postal";
	var error_postCode_format = "Veuillez renseigner un code postal à 5 chiffres";
	var error_city = "Veuillez renseigner votre ville";
	var error_email = "Veuillez renseigner votre adresse e-mail";
	var error_email_format = "Veuillez renseigner une adresse e-mail valide";
	
	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/;
		return regex.test(email);
	}
	
	$("#submit").click(function(event) {
		//alert("Hello");
		//event.preventDefault();
		
		$('.message__error').hide();
//
		var firstName = $("input#firstName").val();
		var lastName = $("input#lastName").val();
		var adress = $("input#adress").val();
		var postCode = $("input#postCode").val();
		var email = $("input#email").val();
		var city = $("input#city").val();
		var tel = $("input#tel").val();
	//
		if (firstName == "") {
			$(".message__error--firstName").text(error_firstName);
			$(".message__error--firstName").show();
			$("input#firstName").focus();
			return false;
		}
		
		if (lastName == "") {
			$(".message__error--lastName").text(error_lastName);
			$(".message__error--lastName").show();
			$("input#lastName").focus();
			return false;
		}
		
		if (postCode == "") {
			$(".message__error--postCode").text(error_postCode);
			$(".message__error--postCode").show();
			$("input#postCode").focus();
			return false;
		}
		
		if (postCode == "") {
			$(".message__error--postCode").text(error_postCode);
			$(".message__error--postCode").show();
			$("input#postCode").focus();
			return false;
		}
		
		if (postCode.length != 5) {
			$(".message__error--postCode").text(error_postCode_format);
			$(".message__error--postCode").show();
			$("input#postCode").focus();
			return false;
		}
		
		if (city == "") {
			$(".message__error--city").text(error_city);
			$(".message__error--city").show();
			$("input#city").focus();
			return false;
		}
		
		if (email == "") {
			$(".message__error--email").text(error_email);
			$(".message__error--email").show();
			$("input#email").focus();
			return false;
		}
		
		if (!isEmail(email)) {
			$(".message__error--email").text(error_email_format);
			$(".message__error--email").show();
			$("input#email").focus();
			return false;
		}
		
		var dataString = 'firstName='+ firstName + '&lastName=' + lastName + '&=adress' + adress + '&postCode=' + postCode + '&city=' + city + '&email=' + email + '&tel=' + tel;
		//alert (dataString);return false;
		$.ajax({
			type: "POST",
			url: "inc/form_send.php",
			data: dataString,
			success: function() {
				$('#form').html("<div id='message__success'></div>");
				$('#message__success').html("Votre message a bien été envoyé!").hide().fadeIn(1500);
			}
		});
		return false;
	});
});