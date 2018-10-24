<?php






$mail='rawdhanouisser@gmail.com';
$sujet = "Activer votre compte" ;
$entete = "From: raoudha.nouisser@gmail.com" ;
$message = "Bienvenue sur l'application Control Diabete,
 
Pour activer votre compte, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.
 

 
---------------
Ceci est un mail automatique, Merci de ne pas y r�pondre.";
mail($mail, $sujet, $message, $entete);


?>

