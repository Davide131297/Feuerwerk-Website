<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "davide.chiffi@gmx.de"; // Empfängeradresse
    $subject = "Neue Kontaktanfrage";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-type: text/plain; charset=utf-8";
    
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet.";
    } else {
        echo "Fehler beim Senden der Nachricht.";
    }
}
?>
