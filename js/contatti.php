<?php
if (isset($_POST["submit"]))
{
    $nome=trim(strip_tags($_POST["nome"]));
    $email=trim(strip_tags($_POST["email"]));
    $message=trim(strip_tags($_POST["messaggio"]));

    $header = "From $email" . "a nome di $nome";
    $subject = "Contatto dal sito giuseppegrasso.me";
    $indirizzo = "giuseppe9486@gmail.com";




    if(mail($indirizzo, $subject, $message, $header)){
      echo "Grazie per avermi contattato";
    } else {
      echo "Qualcosa è andato storto. Riprova per favore!";
    } 
} 
?>