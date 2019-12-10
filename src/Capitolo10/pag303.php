<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$algo = 'aes-256-gcm';
$iv   = random_bytes(openssl_cipher_iv_length($algo));
$key  = random_bytes(32); // 256 bit
$data = 'This is the secret message';

$ciphertext = openssl_encrypt(
    $data,
    $algo,
    $key,
    OPENSSL_RAW_DATA,
    $iv,
    $tag
);

printf("Tag: %s\n", bin2hex($tag));
printf("IV : %s\n", bin2hex($iv));
printf("Ciphertext: %s\n", bin2hex($ciphertext));
