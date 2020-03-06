<?php

$lastName_error = $firstName_error = $adress_error = $postCode_error = $city_error = $email_error = $tel_error = "";
$lastName = $firstName = $adress = $postCode = $city = $email = $tel = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["lastName"])) {
		$lastName_error = "Votre nom est requis.";
	} else {
		$lastName = text_input($_POST["lastName"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
			$lastName_error = "Seules les lettres et les espaces sont autorisés.";
		}
		
	}
}

if ($lastName_error == "" and $firstName_error == "" and $adress_error == "" and $postCode_error == "" and $city_error == "" and $email_error == "" and $tel_error = "") {
	$message_body = "";
	unset($_POST["submit"]);
	foreach($_POST as $key => $value) {
		$message_body .= "$key = $value\n\n";
	}
	
	$to = "thibault@betterise.me";
	$subject = "[Eliott] - Demande de contact";
	if (mail($to, $subject, $message_body)) {
		$success = "Message envoyé, merci de nous avoir contacté !";
		$lastName = $firstName = $adress = $postCode = $city = $email = $tel = "";
	}
}


//if(!isset($_POST['submit']))
//{
//	//This page should not be accessed directly. Need to submit the form.
//	echo "Erreur. Veuillez renseigner le formulaire.\n";
//}
//$lastName = $_POST['lastName'];
//$firstName = $_POST['firstName'];
//$adress = $_POST['adress'];
//$postCode = $_POST['postCode'];
//$city = $_POST['city'];
//$email = $_POST['email'];
//$tel = $_POST['tel'];
//
////Validate first
//if(empty($firstName)||empty($lastName)||empty($email))
//{
//	echo "Veuillez vous assurer de renseigner tous les champs obligatoires (Prénom, nom et adresse e-mail).";
//	exit;
//}
//
//if(IsInjected($email))
//{
//	echo "Veuillez renseigner une adresse e-mail valide.";
//	exit;
//}
//
//$email_from = 'contact@elio.tt';
//$email_subject = "[Eliott] - Demande de contact";
//$email_body = "Vous avez reçu une demande de contact depuis le site elio.tt. Voici les informations de la personne ayant demandé à être recontactée :\n\n".
//	"Prénom : $firstName\n\n".
//	"Nom : $lastName\n\n".
//	"Adresse : $adress\n\n".
//	"Code postal : $postCode\n\n".
//	"Ville : $city\n\n".
//	"Téléphone : $tel\n\n".
//	"Adresse e-mail : $email\n\n".
//	"Bonne journée !";
//
//$to = "david.audren@cerbahealthcare.com";
//$headers = "From: $email_from \r\n";
//$headers .= "Reply-To: $email \r\n";
//
////Send the email!
//mail($to,$email_subject,$email_body,$headers);
//
////done. redirect to thank-you page.
//header('Location: ../');
//?>

<!--
<script type="text/javascript">
	alert("Votre message a bien été envoyé")
</script>
-->

<?php
//// Function to validate against any email injection attempts
//function IsInjected($str)
//{
//	$injections = array('(\n+)',
//											'(\r+)',
//											'(\t+)',
//											'(%0A+)',
//											'(%0D+)',
//											'(%08+)',
//											'(%09+)'
//										 );
//	$inject = join('|', $injections);
//	$inject = "/$inject/i";
//	if(preg_match($inject,$str))
//	{
//		return true;
//	}
//	else
//	{
//		return false;
//	}
//}
?>
