<?php
$miamail = "giuseppe9486@gmail.com";
$successo = $_POST['successo'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$messaggio = "Nome: " . $fname . "\nEmail: " . $email . "\nMessaggio: " . $message;
$headers = "From: " . $miamail . "\r\n" . "Reply-To: " . $miamail;
mail($miamail,"Messaggio dal sito",$messaggio,$headers);
header("location: " . $successo);
?>
