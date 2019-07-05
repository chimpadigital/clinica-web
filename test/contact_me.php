<?php
require 'php-mailer/PHPMailerAutoload.php';
date_default_timezone_set('America/Argentina/Buenos_Aires');

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data
// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array
	if (empty($_POST['name']))
		$errors['name'] = 'Falta el Nombre y apellido.';
	if (empty($_POST['email']))
		$errors['email'] = 'Falta la casilla de mail.';
	if (empty($_POST['superheroAlias']))
		$errors['superheroAlias'] = 'Falta el mensaje.';




// return a response ===========================================================
	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {
		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
		// if there are no errors process our form, then return a message
		// DO ALL YOUR FORM PROCESSING HERE
		// THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
$email_message = "<h3>Detalles del formulario de contacto:</h3><br>";
$email_message .= "<h4 style='margin-bottom:4px'>Nombre y Apellido:</h4> " . $_POST['name'] . "<br>";
$email_message .= "<h4 style='margin-bottom:4px'>Email:</h4> " . $_POST['email'] . "<br>";
$email_message .= "<h4 style='margin-bottom:4px'>Mensaje:</h4> " . $_POST['superheroAlias'] . "<br>";

$email_subject = "Consulta web clinica Santa Lucía";

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';

$mail->Host = 'clinicasantaluciasalta.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Username = 'info@clinicasantaluciasalta.com';
$mail->Password = 'santsalta159';
$mail->setFrom('info@clinicasantaluciasalta.com', 'clinica');

$mail->addReplyTo('info@clinicasantaluciasalta.com','test');
$mail->addAddress('clinicasantaluciasalta@gmail.com','Clínica Santia Lucía');
$mail->isHTML(true);
$mail->Subject = $email_subject;
$mail->Body    = $email_message;
// $mail->AltBody = $email_message;

$mail->CharSet = 'UTF-8';
if (!$mail->send()) {
   $data['error']=$mail->ErrorInfo;
}else{
		// show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = 'Mensaje enviado!';
	}
}
	// return all our data to an AJAX call
	echo json_encode($data);