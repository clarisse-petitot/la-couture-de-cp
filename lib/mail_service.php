<?php

require __DIR__ . '/../vendor/autoload.php';

function sendTestMail(string $dest): void
{


    $env = parse_ini_file('.env');

    $api_key = $env["RESEND_API_KEY"];
    $resend = Resend::client($api_key);

    $resend->emails->send([
        'from' => 'contact@lacouturedecp.fr',
        'to' => $dest,
        'subject' => 'Test email from lcdcp',
        'html' => 'This is a test email send using Resend from La Couture de CP'
    ]);
}
