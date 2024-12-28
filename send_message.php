<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=htmlspecialchars($_POST['name']);
    $message=htmlspecialchars($_POST['message']);

    //Enregistre le message(par exemple dans un fichier ou base de données)
    $file='message.txt';
    $current=file_get_contents($file);
    $current.="Nom:$name\nMessage:$message\n\n";
    file_put_contents($file,$current);
    echo"Message envoyé avec succès!";
}