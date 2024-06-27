<?php

require __DIR__ . '/../vendor/autoload.php';

function sendMail(string $email, string $nom, string $prenom, string $objet, string $description): void
{
    $env = parse_ini_file('.env');

    $api_key = $env["RESEND_API_KEY"];
    $resend = Resend::client($api_key);

    $resend->emails->send([
        'from' => 'contact@lacouturedecp.fr',
        'to' => 'contact@lacouturedecp.fr',
        'subject' => $objet,
        'html' => $prenom ." ".$nom ." souhaite commander voici la description : " . $description.". Son email est : ".$email,
    ]);

    $resend->emails->send([
        'from' => 'contact@lacouturedecp.fr',
        'to' => $email,
        'subject' => $objet,
        'html' => "Votre commande a bien été envoyée",
    ]);
}
