<?php

session_start(); // Démarrer la session pour stocker les erreurs
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail_message = 'Identifiant : ' . $firstname . ' ' . $lastname . '<br>' . ' Email : ' . $email . '<br>' . ' Sujet : ' . $subject . '<br>' . ' Message : ' . $message;
$errors = [];
$data = ['lastname' => $lastname, '$firstname' => $firstname, 'email' => $email, 'subject' => $subject, 'message' => $message];

// Vérification des champs vides
if (empty($lastname)) {
    $errors['lastname'] = "Veuillez compléter le champ nom.";
}
if (empty($firstname)) {
    $errors['firstname'] = "Veuillez compléter le champ prénom.";
}

if (empty($email)) {
    $errors['email'] = "Veuillez compléter le champ email.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Votre email n'est pas valide. Veuillez entrer une adresse email au format firstname.lastname@example.com.";
}

if (empty($subject)) {
    $errors['subject'] = "Veuillez compléter le champ sujet.";
}

if (empty($message)) {
    $errors['message'] = "Veuillez compléter le champ message.";
}

if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors; // Stocker les erreurs dans la session
    $_SESSION['form_data'] = $data;
    header('Location: /contact/');
    exit; // Stopper l'exécution après la redirection
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'anthonycoppens04@gmail.com';                     //SMTP username
    $mail->Password = 'uheeowihcghfxcmg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@exemple.com', 'portfolio');
    $mail->addAddress('anthonycoppens04@gmail.com');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = $mail_message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    $_SESSION['form_success'] = 'Vos données ont été envoyées avec succès !';

    header('Location: /contact/');
    exit(); // Make sure no further code is executed after the redirection
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}