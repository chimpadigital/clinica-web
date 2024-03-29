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

//inicio script grabar datos en csv
$fichero = 'clinica.csv';//nombre archivo ya creado
//crear linea de datos separado por coma
$fecha=date("d-m-y H:i:s");
$linea = $fecha.";".$_POST['name'].";".$_POST['email'].";".$_POST['superheroAlias']."\n";
// Escribir la linea en el fichero
file_put_contents($fichero, $linea, FILE_APPEND | LOCK_EX);
//fin grabar datos

$email_message = "<h3>Detalles del formulario de contacto:</h3><br>";
$email_message .= "<h4 style='margin-bottom:4px'>Nombre y Apellido:</h4> " . $_POST['name'] . "<br>";
$email_message .= "<h4 style='margin-bottom:4px'>Email:</h4> " . $_POST['email'] . "<br>";
$email_message .= "<h4 style='margin-bottom:4px'>Mensaje:</h4> " . $_POST['superheroAlias'] . "<br>";

$email_subject = "Consulta web clinica Santa Lucía";

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';

$mail->Host = '	mail.clinicasantaluciasalta.com';
$mail->Port = 9025;
// $mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->SMTPSecure = false;
$mail->SMTPAutoTLS = false;
// $mail->SMTPOptions = array(
//     'ssl' => array(
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//         'allow_self_signed' => true
//     )
// );
$mail->Username = 'info@clinicasantaluciasalta.com';
$mail->Password = 'santsalta159';
$mail->setFrom('info@clinicasantaluciasalta.com', 'clinica');

$mail->addReplyTo('info@clinicasantaluciasalta.com','test');
$mail->addAddress('info@clinicasantaluciasalta.com','Clínica Santia Lucía');
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