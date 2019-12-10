<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

// Generate public and private keys
$keys = openssl_pkey_new(array(
    "private_key_bits" => 4096,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));

// Store the private key in an encrypted file
$passphrase = 'test';
openssl_pkey_export_to_file($keys, 'private.pem', $passphrase);
// Store the public key in a file
$details = openssl_pkey_get_details($keys);
$publicKey = $details['key'];
file_put_contents('public.key', $publicKey);
