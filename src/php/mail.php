<?php



error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$name = $_POST['nameClient'];
$phone = $_POST['phoneClient'];
$to = $_POST['emailClient'];


$subject = "Франшиза"; 

$message = "<p>Уважаемый (ая) {$name} </p> </br> <b>На сайте TopFranshise.ru Вами была оставлена заявка </b> </br><i>Контакты заинтересованного лица</i> </br>";

// $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
// $headers .= "From: От кого письмо irinazuboreva@topfranchise.ru\r\n"; 
// $headers .= "Reply-To: rezultat_logoped@mail.ru\r\n"; 

$mail = mail($to, $subject, $message); 
mail($to, $subject, $message); 
?>