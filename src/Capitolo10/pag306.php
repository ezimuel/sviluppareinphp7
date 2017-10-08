<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 $msg       = 'This is the secret message';
 $key       = random_bytes(32); // symmetric encryption key
 $publicKey = file_get_contents('public.key');

 // Encryption
 openssl_public_encrypt(
     $key,
     $encryptedKey,
     $publicKey,
     OPENSSL_PKCS1_OAEP_PADDING
 );

 // symmetric encryption using aes-256-gcm
 $ciphertext = encrypt($msg, $key);
 $passphrase = 'test';

 // Decryption
 $privateKey = openssl_pkey_get_private('file://private.pem', $passphrase);
 $result = openssl_private_decrypt(
     $encryptedKey,
     $decryptedKey,
     $privateKey,
     OPENSSL_PKCS1_OAEP_PADDING
 );

 if (false !== $result) {
     $result = decrypt($ciphertext, $decryptedKey);
 } else {
     while ($msg = openssl_error_string()) {
         printf("%s\n", $msg);
     }
 }
 printf("Operation : %s\n", $result === $msg ? 'Success' : 'Failure');
