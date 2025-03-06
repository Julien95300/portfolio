<?php
require 'vendor/autoload.php'; // Charger Mailjet avec Composer

use \Mailjet\Resources;

// Clés API Mailjet (remplace par tes vraies clés API)
$apiKey = 'ee2715081a7f659cd1c6d365f25d10ee';
$apiSecret = 'd36ef3e463dcb3ebb1be868ab966e36b';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et sécurisation des données du formulaire
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = nl2br(htmlspecialchars($_POST["message"]));

    // Configuration de Mailjet
    $mj = new \Mailjet\Client($apiKey, $apiSecret, true, ['version' => 'v3.1']);
    
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "portfoliojulien95@gmail.com", // Remplace par ton email d'envoi
                    'Name' => "Portfolio de Julien"
                ],
                'To' => [
                    [
                        'Email' => "julienjm07@gmail.com", // Ton email de réception
                        'Name' => "Julien"
                    ]
                ],
                'Subject' => $subject,
                'HTMLPart' => "
                    <h3>Nom : $name</h3>
                    <h4>Email : $email</h4>
                    <h4>Objet : $subject</h4>
                    <p>$message</p>
                "
            ]
        ]
    ];
    
    // Envoi de l'email
    $response = $mj->post(Resources::$Email, ['body' => $body]);

    // Redirection après l'envoi
    if ($response->success()) {
        header("Location: contact.php?success=1");
        exit();
    } else {
        header("Location: contact.php?error=1");
        exit();
    }
}
?>
