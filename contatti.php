<?php
if (isset($_POST["submit"])) {
    $name =  $_POST["nome"];
    $email = $_POST["email"];
    $mailFrom = $_POST["email"];
    $message = $_POST["messaggio"];

    $mailTo = "giuseppe9486@gmail.com";

    $headers = "From: " .$name";
    $txt = "Hai ricevuto un messaggio da ".$sname.".\n\n".$message;
    $subject = "Contatto dal sito giuseppegrasso.me";
    $indirizzo = "giuseppe9486@gmail.com";




    mail($mailTo, $subject, $txt, $headers);
    header("Location: contatti.php?mailsend");
    
    }