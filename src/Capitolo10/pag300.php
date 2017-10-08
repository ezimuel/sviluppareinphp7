<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

function encrypt(string $data, string $key): string
{
    if (32 !== strlen($key)) {
        throw new RuntimeException('The key size must be 32 bytes');
    }
    $iv = random_bytes(12);
    $ciphertext = openssl_encrypt(
        $data,
        'aes-256-gcm',
        $key,
        OPENSSL_RAW_DATA,
        $iv,
        $tag
    );
    return $iv . $tag . $ciphertext;
}

function decrypt(string $data, string $key): string
{
    if (32 !== strlen($key)) {
        throw new RuntimeException('The key size must be 32 bytes');
    }
    $decrypt = openssl_decrypt(
        mb_substr($data, 28, null, '8bit'),
        'aes-256-gcm',
        $key,
        OPENSSL_RAW_DATA,
        mb_substr($data, 0, 12, '8bit'),
        mb_substr($data, 12, 16, '8bit')
    );
    if (false === $decrypt) {
        throw new RuntimeException('Authentication error!');
    }
    return $decrypt;
}
