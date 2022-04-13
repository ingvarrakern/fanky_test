<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once './User.php';

function sendMail(User $user) {

    require_once "vendor/autoload.php";

//PHPMailer Object
    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
//Enable SMTP debugging.
    $mail->SMTPDebug = 0;
//Set PHPMailer to use SMTP.
    $mail->isSMTP();
//Set SMTP host name                          
    $mail->Host = "smtp.yandex.ru";
//Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
//Provide username and password     
    $mail->Username = "fanky.test@yandex.ru";
    $mail->Password = "Print555";
//If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "ssl";
//Set TCP port to connect to
    $mail->Port = 465;

//From email address and name
    $mail->From = "fanky.test@yandex.ru";
    $mail->FromName = "Elena Kirova";

//To address and name
    $mail->addAddress($user->getEmail());

//Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = "Письмо от Funky test";

    $body = "Пользователь успешно создан <br>"
            . "Email: ".$user->getEmail()." <br>"
            . "Name: ".$user->getName()." <br>"
            . "Phone: ".$user->getPhone()." <br>"
            . "Created: ".$user->getCreated_at()."";

    $mail->Body = $body;

    $mail->setLanguage("ru");

    try {
        $mail->send();
        // echo "Сообщение отправлено успешно";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
