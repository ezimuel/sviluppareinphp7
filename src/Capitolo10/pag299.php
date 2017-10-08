<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
