<?php
function contAccueil()
{
    require("Views/home.php");
}

function traitForm(){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    $to = "lorenzo.monminoux25@gmail.com";
    $subject = "Mail From Portfolio";
    $headers = "From: " . $prenom . "\r\n" . "CC: lorenzo.monminoux25@gmail.com";
    $txt = "From: " . $prenom . " " . $nom . "\nMail : " . $mail . "\nTel : " . $tel . "\nMessage: " . $message;
    mail($to, $subject, $txt, $headers);

    require("Views/sent.php");
}