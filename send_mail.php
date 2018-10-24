<?php


$name=$_REQUEST['name'];
$email=$_REQUEST['mail'];
$message=$_REQUEST['message'];
$cle=mt_rand(1,100000);


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'FROM:' . htmlspecialchars($email);
$to='rawdhanouisser@gmail.com'; // Insérer votre adresse email ICI
$subject = 'Message envoyé par ' . htmlspecialchars($name) .' - <i>' . htmlspecialchars($email) .'</i>';
$entete = "From: rawdhanouisser@gmail.com" ;
$message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>Contenu du message:</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
mail($to, $subject, $message_content, $headers);

?>

