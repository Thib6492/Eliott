<?php
	//if(!isset($_POST['submit']))
	//{
	//	//This page should not be accessed directly. Need to submit the form.
	//	echo "Erreur. Veuillez renseigner le formulaire.\n";
	//}
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$adress = $_POST['adress'];
$postCode = $_POST['postCode'];
$city = $_POST['city'];
$email = $_POST['email'];
$tel = $_POST['tel'];

//Validate first
//if(empty($lastName)||empty($firstName)||empty($postCode)||empty($city)||empty($email))
//{
//	echo "Veuillez vous assurer de renseigner tous les champs obligatoires (Prénom, nom, code postal, ville et adresse e-mail).";
//	exit;
//}
//
//if(IsInjected($email))
//{
//	echo "Veuillez renseigner une adresse e-mail valide.";
//	exit;
//}

$email_from = 'contact@elio.tt';
$email_subject = "[Eliott] - Demande de contact";
$email_body = "Vous avez reçu une demande de contact depuis le site elio.tt. Voici les informations de la personne ayant demandé à être recontactée :\n\n".
	"Prénom : $firstName\n\n".
	"Nom : $lastName\n\n".
	"Adresse : $adress\n\n".
	"Code postal : $postCode\n\n".
	"Ville : $city\n\n".
	"Téléphone : $tel\n\n".
	"Adresse e-mail : $email\n\n".
	"Bonne journée !";

//$to = "david.audren@cerbahealthcare.com";
$to = "thibault@betterise.me";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
//echo 'console.log("Avant envoi");'
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//echo 'console.log("Après envoi");'
?>

<!--
<script type="text/javascript">
	alert("Votre message a bien été envoyé");
</script>
-->

<?php
//done. redirect to thank-you page.
//header('Location: ../index.php');
//exit();


 //Function to validate against any email injection attempts
//function IsInjected($str)
//{
	//$injections = array('(\n+)',
	//										'(\r+)',
	//										'(\t+)',
	//										'(%0A+)',
	//										'(%0D+)',
	//										'(%08+)',
	//										'(%09+)'
	//									 );
	//$inject = join('|', $injections);
	//$inject = "/$inject/i";
	//if(preg_match($inject,$str))
	//{
	//	return true;
	//}
	//else
	//{
	//	return false;
	//}
//}
?>
