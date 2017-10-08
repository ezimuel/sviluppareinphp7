<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$algo  = 'aes-256-gcm';
$iv    = random_bytes(openssl_cipher_iv_length($algo));
$key   = random_bytes(32); // 256 bit
$email = 'This is the secret message';
$aad   = 'From: foo@test.com, To: bar@test.com';

$ciphertext = openssl_encrypt(
    $email,
    $algo,
    $key,
    OPENSSL_RAW_DATA,
    $iv,
    $tag,
    $aad
);
// send $aad, $iv, $tag, $ciphertext to bar@test.com
