<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$passphrase = 'test';
$privateKey = openssl_pkey_get_private(
    'file://private.pem',
    $passphrase
);

$data = file_get_contents('/path/to/file_to_sign');
openssl_sign($data, $signature, $privateKey, "sha256");
printf("Signature : %s\n", base64_encode($signature));

// Verify the signature
$publicKey = openssl_pkey_get_public('file://public.key');
$result = openssl_verify($data, $signature, $publicKey, "sha256");
printf("Signature %s\n", $result === 1 ? 'Ok' : 'Not valid');
