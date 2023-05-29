<?php

if (isset($_POST['submit'])){
    $mail=$_POST['email'];
    $objet=$_POST['objet'];
    $message=$_POST['message'];

    $mailto="thamiz.sarboudine@univ-eiffel.fr";
    $headers= "From:".$mail;
    $txt="Tu a reçu un mail à partir de ton portfolio.\n".$message;

    mail($mailto,$objet,$txt,$headers);
    header(("Location:contact.php?mailsend"));
}

?>