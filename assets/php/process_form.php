<?php
session_start();

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $errors = [];


    if(empty($name)){
        $errors["name"] = "Le champ 'name' est vide.";
    }

    if(empty($lastname)){
        $errors["lastname"] = "Le champ 'lastname' est vide.";
    }

    if(empty($email)){
        $errors["email"] = "Le champ 'email' est vide.";
    }

    if(empty($country)){
        $errors["country"] = "Le champ 'country' est vide.";
    }

    if(empty($message)){
        $errors["message"] = "Le champ 'message' est vide.";
    }


    if(!empty($errors)){
        $_SESSION["errors"] = $errors;
        header("Location: ../../index.php"); 
        exit(); 
    }
}

require `../../vendor/autoload.php`;

use PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Username = "LeD6mon@gmail.com";
    $mail->Password = "zjkw hbts ecwm ytdx";

    $mail->setFrom($email, $name);
    $mail->addAddress(`tomdelintepro@gmail.com`);
    $mail->Subject = "Nouveau messsage de $name - $subject";
    $mail->Body ="Nom: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    $mail->send();
    echo "Envoie du Formulaire";


}catch(Exception $e){
echo "Erreur lors de l'envoie de l'email", $mail->ErrorInfo;
}


?>