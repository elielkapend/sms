<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Messagerie by @ek</title>
</head>
<body>
    <h1>Contactez-nous</h1>
    <p>Veuillez remplir le formulaire ci-dessous pour toutes infos </p>
    <form method="post">
        <input type = "text" name ="nom" placeholder="Nom" required>
        <input type = "email" name ="email" placeholder="Email" required>
        <input type = "text" name ="sujet" placeholder="Sujet" required>
        <textarea name ="message" placeholder="Message" required></textarea>
        <input type = "submit" value ="Envoyer le message">
    </form>


   <?php

   // Si le formulaire a été soumis
   
   if (isset($_POST["message"])) {
    $message = "Ce message vous a été envoyé via la page contact du site elielkapend.com
    Nom : " . $_POST["nom"] . "
    Email : " . $_POST["email"] . "
    Message : " . $_POST["message"];

    $retour = mail("elielkapend1512@gmail.com", $_POST["sujet"], 
    $message, "From:contact@elielkapend.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
    if ($retour) {
        echo "<p>L'email a bien été envoyé.</p>";
    }

   
   }
   ?>

</body>
</html>